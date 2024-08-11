<?php

namespace App\Filament\Merchant\Resources;

use App\Filament\Merchant\Resources\BookingResource\Pages;
use App\Filament\Merchant\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Branch Selection')
                ->description('Select a merchant profile where this branch belongs to')
                ->aside()
                ->schema([
                Forms\Components\Select::make('branch_id')
                    ->label('Branch')
                    ->options(                    
                        Branch::where('merchant_id', auth()->user()->merchant->id)
                    ->pluck('name', 'id'))
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
                 
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\DateTimePicker::make('slot')
                    ->required(),
                Forms\Components\TextInput::make('remark')
                    ->maxLength(255),
                Forms\Components\Toggle::make('accepted'),
                Forms\Components\DateTimePicker::make('accepted_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->numeric()
                ->sortable(),   
                Tables\Columns\TextColumn::make('branch.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('slot')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('remark')
                    ->searchable(),

                Tables\Columns\TextColumn::make('accepted_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ensure that only the authenticated merchant's branches are shown
        return parent::getEloquentQuery()
        ->whereHas('branch', function($query) {
            $user = Auth::user();
            $merchant = $user->merchant;
            $branchIds = $merchant->branch->pluck('id')->toArray();

            $query->whereIn('id', $branchIds);
        });
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
}
