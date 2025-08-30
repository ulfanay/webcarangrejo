<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Albums;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AlbumsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlbumsResource\RelationManagers;

class AlbumsResource extends Resource
{
    protected static ?string $model = Albums::class;
    protected static ?string $navigationLabel = 'Album Carousel';
    protected static ?string $navigationGroup = 'Konten';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')
                    ->label('Nama Carousel')
                    ->required(),
                TextInput::make('description')
                    ->label('Deskripsi')
                    ->nullable(),
                FileUpload::make('carousel_image')
                    ->label('Gambar Carousel')
                    ->image()
                    ->directory('albums/carousel_images')
                    ->visibility('public')
                    ->imagePreviewHeight(150)
                    ->imageResizeMode('cover')
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Album')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),

                TextColumn::make('carousel_image')
                ->label('Carousel Images')
                ->formatStateUsing(fn ($state) => $state ? '<img src="' . asset('storage/' . $state) . '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">' : '<span style="color: #9ca3af;">No Image</span>')
                ->html()
                ->url(fn ($record) => asset('storage/' . $record->carousel_image)),

                TextColumn::make('created_at')
                ->label('Dibuat Pada')
                ->dateTime()
                ->sortable(),
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
            'index' => Pages\ListAlbums::route('/'),
            'create' => Pages\CreateAlbums::route('/create'),
            'edit' => Pages\EditAlbums::route('/{record}/edit'),
        ];
    }
}
