<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Posts;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PostsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostsResource\RelationManagers;

class PostsResource extends Resource
{
    protected static ?string $model = Posts::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Konten';
    protected static ?string $navigationLabel = 'Berita';
    // protected static ?string $slug = 'posts';
    // protected static ?string $recordTitleAttribute = 'title';
    protected static ?int $navigationSort = 1;
    
    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug', 'content'];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            TextInput::make('title')->label('Judul')->required(),
            TextInput::make('slug')->required()->unique(ignoreRecord: true),
            RichEditor::make('content')->label('Konten')->required(),
            FileUpload::make('thumbnail')
                ->image()
                ->directory('thumbnail')
                ->visibility('public')
                ->imagePreviewHeight(150)
                ->imageResizeMode('cover')
                ->maxSize(2048)
                ->label('Thumbnail'),
            Select::make('category_id')
                ->label('Kategori')
                ->relationship('category', 'name')
                ->required(),
            Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                ])->default('draft'),
            DateTimePicker::make('published_at')->label('Tanggal Terbit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            TextColumn::make('id')->label('ID'),
            TextColumn::make('title')->label('Judul')->searchable(),
            TextColumn::make('category.name')->label('Kategori'),
            TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'published' => 'success',
                    'draft' => 'warning',
                }),
            TextColumn::make('thumbnail')
                ->label('Thumbnail')
                ->formatStateUsing(fn ($state) => $state ? '<img src="' . asset('storage/' . $state) . '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">' : '<span style="color: #9ca3af;">No Image</span>')
                ->html()
                ->url(fn ($record) => $record->gambar),
            TextColumn::make('published_at')->label('Terbit'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePosts::route('/create'),
            'edit' => Pages\EditPosts::route('/{record}/edit'),
        ];
    }
}
