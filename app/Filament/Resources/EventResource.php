<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use App\Models\Bidang;
use App\Models\Ruangan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Acara')
                    ->required(),
                Select::make('ruangan_id')
                    ->label('Ruangan')
                    ->options(Ruangan::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->native(false),
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
                Select::make('bidang_id')
                    ->label('Bidang')
                    ->options(Bidang::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Acara')
                ->searchable(),
                TextColumn::make('starts_at')
                ->label('Mulai')
                ->searchable(),
                TextColumn::make('ends_at')
                ->label('Selesai'),
                TextColumn::make('ruangan.nama')
                ->label('Ruangan'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
