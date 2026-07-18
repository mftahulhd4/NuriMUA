<?php

namespace App\Filament\Resources\Costumes;

use App\Filament\Resources\Costumes\CostumeResource\Pages;
use App\Models\Costume;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CostumeResource extends Resource
{
    protected static ?string $model = Costume::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-sparkles';
    
    protected static ?string $navigationLabel = 'Koleksi Kostum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Kategori'),
                
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama Kostum'),
                
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('costumes')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Foto'),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Nama'),
                Tables\Columns\TextColumn::make('category.name')->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCostumes::route('/'),
            'create' => Pages\CreateCostume::route('/create'),
            'edit' => Pages\EditCostume::route('/{record}/edit'),
        ];
    }
}