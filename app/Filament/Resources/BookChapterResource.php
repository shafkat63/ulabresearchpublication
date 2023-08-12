<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookChapterResource\Pages;
use App\Filament\Resources\BookChapterResource\RelationManagers;
use App\Models\BookChapter;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookChapterResource extends Resource
{
    protected static ?string $model = BookChapter::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('TitlePaper')->required(),
                Forms\Components\TextInput::make('user_id')->required(),
                Forms\Components\TextInput::make('Author')->required(),
                Forms\Components\TextInput::make('bookName')->required(),
                Forms\Components\TextInput::make('chapterTitle')->required(),
                Forms\Components\TextInput::make('issue')->required(),
                Forms\Components\TextInput::make('Volume')->required(),
                Forms\Components\TextInput::make('PublicationYear')->required(),
                Forms\Components\TextInput::make('PublicationDate')->required(),
                Forms\Components\TextInput::make('BookPublisher')->required(),
                Forms\Components\TextInput::make('URL')->required(),
                Forms\Components\TextInput::make('DOI')->required(),
                Forms\Components\FileUpload::make('document')->directory('documents'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TitlePaper'),
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('Author'),
                Tables\Columns\TextColumn::make('bookName'),
                Tables\Columns\TextColumn::make('chapterTitle'),
                Tables\Columns\TextColumn::make('issue'),
                Tables\Columns\TextColumn::make('Volume'),
                Tables\Columns\TextColumn::make('PublicationYear'),
                Tables\Columns\TextColumn::make('PublicationDate'),
                Tables\Columns\TextColumn::make('BookPublisher'),

                Tables\Columns\TextColumn::make('URL'),
                Tables\Columns\TextColumn::make('DOI'),
                Tables\Columns\ImageColumn::make('document')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBookChapters::route('/'),
            'create' => Pages\CreateBookChapter::route('/create'),
            'edit' => Pages\EditBookChapter::route('/{record}/edit'),
        ];
    }
}
