<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('leader_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                Textarea::make('coverage_area')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('is_available')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
