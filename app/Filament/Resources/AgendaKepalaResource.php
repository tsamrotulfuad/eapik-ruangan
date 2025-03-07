<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AgendaKepala;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AgendaKepalaResource\Pages;
use App\Filament\Resources\AgendaKepalaResource\RelationManagers;

class AgendaKepalaResource extends Resource
{
    protected static ?string $model = AgendaKepala::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Agenda";

    protected static ?string $navigationLabel = 'Kepala Perangkat Daerah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                TextInput::make('place')
                    ->label('Tempat')    
                    ->required(),
                DateTimePicker::make('starts_at')
                    ->label('Mulai')
                    ->closeOnDateSelection()
                    ->seconds(false)
                    ->native(false)
                    ->minDate(now())
                    ->required(),
                DateTimePicker::make('ends_at')
                    ->label('Selesai')
                    ->closeOnDateSelection()
                    ->seconds(false)
                    ->native(false)
                    ->minDate(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Acara')
                ->searchable(),
                TextColumn::make('place')
                ->label('Tempat')
                ->searchable(),
                TextColumn::make('starts_at')
                ->label('Mulai')
                ->searchable(),
                TextColumn::make('ends_at')
                ->label('Selesai'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAgendaKepalas::route('/'),
            'create' => Pages\CreateAgendaKepala::route('/create'),
            'edit' => Pages\EditAgendaKepala::route('/{record}/edit'),
        ];
    }
}
