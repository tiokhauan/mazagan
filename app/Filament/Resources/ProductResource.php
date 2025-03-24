<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Leandrocfe\FilamentPtbrFormFields\Money;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->reactive()
                    ->debounce(1000)
                    ->afterStateUpdated(function ($state, $set) {
                        $slug = Str::slug($state);
                        $set('slug', $slug);
                    })
                    ->label('Nome Produto'),

                TextInput::make('description')->label('Descrição Produto'),

                Money::make('price')
                    ->label('Preço Produto')
                    ->default('0,00')
                    ->reactive()
                    ->debounce(600)
                    ->inputMode('numeric')
                    ->afterStateUpdated(function ($state, $set) {
                        $onlyNumbers = preg_replace('/\D/', '', $state);
                        if (strlen($onlyNumbers) > 0) {
                            $formattedPrice = number_format($onlyNumbers / 100, 2, ',', '.');
                        } else {
                            $formattedPrice = '0,00';
                        }
                        $set('price', $formattedPrice);
                    }),

                TextInput::make('amount')
                    ->label('Quantidade Produto')
                    ->numeric()
                    ->rules(['required', 'integer', 'min:0']),

                TextInput::make('slug')->disabled(),

                FileUpload::make('photo')
                    ->image()
                    ->directory('products'),

                Select::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->options(function () {
                        return \App\Models\Category::pluck('name', 'id')->toArray();
                    })
                    ->searchable(false),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo'),
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('description'),
                TextColumn::make('price')->sortable()->money('BRL')->formatStateUsing(fn($state) => 'R$ ' . number_format($state, 2, ',', '.')),
                TextColumn::make('amount'),
                TextColumn::make('created_at')->date('d/m/y H:i:s')->sortable()
            ])
            ->filters([
                // Filter::make('amount')->query(fn(Builder $builder) => $builder->where('amount', '>', 6))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'DESC');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
