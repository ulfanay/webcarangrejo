<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('luaswilayah')
                        ->label('Luas Wilayah (Km2)')
                        ->placeholder('e.g., 1.234 Km2 ')
                        ->required(),
                        TextInput::make('jumlahpenduduk')
                        ->label('Jumlah Penduduk')
                        ->placeholder('e.g., 1.234 ')
                            ->required(),  
                        TextInput::make('dusun')
                        ->label('Jumlah Dusun')
                        ->placeholder('e.g., 1 Dusun ')
                            ->required(),
                        RichEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable(),
                Tables\Columns\TextColumn::make('content')
                ->limit(50),

                Tables\Columns\TextColumn::make('luaswilayah')
                ->label('Luas Wilayah (Km2)')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('jumlahpenduduk')
                ->label('Jumlah Penduduk')->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('dusun')->label('Jumlah Dusun')->sortable()->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
