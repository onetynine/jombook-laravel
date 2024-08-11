<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 6;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Branch Selection')
                ->description('Select a merchant profile where this branch belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('branch_id')
                    ->relationship('branch','name')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('customer_id')
                    ->relationship('customer','customer_name')
                    ->searchable()
                    ->required(),
               
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('description'),
                Forms\Components\Select::make('star')
                ->options([
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ]),
                Forms\Components\TextInput::make('comment'),
                Forms\Components\Select::make('status')
                ->options([
                    'Unchecked' => 'Unchecked',
                    'Authentic' => 'Authentic',
                    'Inappropriate' => 'Inappropriate',
                    'Spam/Fake/Paid' => 'Spam/Fake/Paid',
                ]),
            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch.name')
                ->label('Branch')
                ->searchable(),
                Tables\Columns\TextColumn::make('customer.customer_name')
                ->label('Customer Name')
                ->searchable(),
                Tables\Columns\TextColumn::make('star')
                ->label('Star'),
                Tables\Columns\TextColumn::make('title')
                ->label('Title'),
                Tables\Columns\TextColumn::make('status')
                ->label('Status'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
