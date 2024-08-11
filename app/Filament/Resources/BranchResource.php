<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
use App\Filament\Resources\BranchResource\RelationManagers;
use App\Models\Branch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;


class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;
    
    public static function form(Form $form): Form
    {
        return $form
        
            ->schema([
                Section::make('Merchant Selection')
                ->description('Select a merchant profile where this branch belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('merchant_id')
                ->relationship('merchant','company_name')
                ->required(),
                ]),
                Section::make('Profile Photo')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->aside()
                    ->schema([
                    Forms\Components\FileUpload::make('photo')
                    ->avatar()
                    ->imageEditor()
                    ->required(),
                    Forms\Components\FileUpload::make('banner')
                    ->required()
                    ->imageEditor()
                    ->image(),
                    ]),
                    Section::make('General Info')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->aside()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                        Forms\Components\TextInput::make('address')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('category')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('halal_status')
                    ->options([
                        '1' => 'Halal Certified',
                        '2' => 'No Lard & Alcohol',
                        '3' => 'Non Halal',
                    ])
                    ->native(false),
                    ]),
                    Section::make('Detailed Information')
                    ->description('Prevent abuse by limiting the number of requests per period')
                    ->aside()
                    ->schema([
                        Forms\Components\TextInput::make('summary')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('description')
                        ->required(),
                    Forms\Components\TextInput::make('operation_time')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('approved')
                        ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('halal_status')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('approved')
                    ->searchable(),
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
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
