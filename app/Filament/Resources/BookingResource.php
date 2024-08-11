<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use App\Models\Branch;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Branch Selection')
                ->description('Select a merchant profile where this branch belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('branch_id')
                    ->label('Branch')
                    ->options(Branch::all()->pluck('name', 'id')->toArray())
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('product_id', null)),

                Forms\Components\Select::make('product_id')
                    ->label('Product')
                    ->options(function (callable $get) {
                        $branchId = $get('branch_id');
                        if ($branchId) {
                            return Product::where('branch_id', $branchId)->pluck('name', 'id')->toArray();
                        }
                        return [];
                    }),
                
                ]),

                Section::make('Customer Selection')
                ->description('Select a merchant profile where this branch belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('user_id')
                ->relationship('user','name')
                ->required(),
                ]),


                Section::make('Profile Photo')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->aside()
                ->schema([
                Forms\Components\DateTimePicker::make('slot')
                    ->required(),
                Forms\Components\TextInput::make('remark')
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
                Tables\Columns\TextColumn::make('user.name')
                ->label('User')
                ->searchable(),
                
                Tables\Columns\TextColumn::make('user.name')
                ->label('User')
                ->searchable(),

                Tables\Columns\TextColumn::make('slot')
                    ->dateTime()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('remark')
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
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
