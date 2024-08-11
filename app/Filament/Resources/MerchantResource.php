<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MerchantResource\Pages;
use App\Filament\Resources\MerchantResource\RelationManagers;
use App\Models\Merchant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class MerchantResource extends Resource
{
    protected static ?string $model = Merchant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manage: Accounts';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Selection')
                ->description('Select a user profile where this merchant belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('user_id')
                ->relationship('user','name')
                ->required(),
                ]),
                Section::make('Merchant Information')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->aside()
                ->schema([
                Forms\Components\TextInput::make('company_name')
                ->required(),
                Forms\Components\TextInput::make('registration_number')
                ->required(),
                Forms\Components\FileUpload::make('registration_document')
                ->required(),
                Forms\Components\Select::make('business_type')
                ->options([
                    'draft' => 'Food & Beverage',
                    'reviewing' => 'Bar',
                    'published' => 'Entertainment',
                ])
 
                ]),
            Section::make('In-charge Information')
                ->description('Select a user profile where this merchant belongs to')
                ->aside()
                ->schema([
                    Forms\Components\TextInput::make('in_charge_name')
                    ->required(),
                    Forms\Components\TextInput::make('in_charge_nric')
                    ->required(),
                    Forms\Components\TextInput::make('in_charge_designation')
                    ->required(),
                    Forms\Components\TextInput::make('in_charge_contact')
                    ->required(),
                    Forms\Components\Toggle::make('approved')
                    ->required(),
                ]),    
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                ->searchable(),
                Tables\Columns\TextColumn::make('registration_number')
                ->searchable(),
                Tables\Columns\TextColumn::make('business_type')
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
            'index' => Pages\ListMerchants::route('/'),
            'create' => Pages\CreateMerchant::route('/create'),
            'edit' => Pages\EditMerchant::route('/{record}/edit'),
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
