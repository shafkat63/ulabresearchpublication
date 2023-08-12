<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JournalResource\Pages;
use App\Filament\Resources\JournalResource\RelationManagers;
use App\Models\Journal;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
// use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class JournalResource extends Resource
{
    protected static ?string $model = Journal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('TitlePaper')->required(),
                Forms\Components\TextInput::make('Author')->required(),
                Forms\Components\TextInput::make('journalName')->required(),
                Forms\Components\TextInput::make('issue')->required(),
                Forms\Components\TextInput::make('volume')->required(),
                Forms\Components\TextInput::make('publicationYear')->required(),
                Forms\Components\TextInput::make('publicationDate')->required(),
                Forms\Components\TextInput::make('publisher')->required(),
                Forms\Components\TextInput::make('DOI')->required(),
                Forms\Components\TextInput::make('URL')->required(),
                Forms\Components\FileUpload::make('document')->directory('documents'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TitlePaper'),
                Tables\Columns\TextColumn::make('Author'),
                Tables\Columns\TextColumn::make('journalName'),
                Tables\Columns\TextColumn::make('issue'),
                Tables\Columns\TextColumn::make('volume'),
                Tables\Columns\TextColumn::make('publicationYear'),
                Tables\Columns\TextColumn::make('publicationDate'),
                Tables\Columns\TextColumn::make('publisher'),
                Tables\Columns\TextColumn::make('DOI'),
                Tables\Columns\TextColumn::make('URL'),
                Tables\Columns\TextColumn::make('user_id'),
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
            'index' => Pages\ListJournals::route('/'),
            'create' => Pages\CreateJournal::route('/create'),
            'edit' => Pages\EditJournal::route('/{record}/edit'),
        ];
    }
}
