<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service_category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('religion_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('short_description')
                    ->default(null),
                TextInput::make('base_price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('$'),
                TextInput::make('price_type')
                    ->required()
                    ->default('fixed'),
                TextInput::make('duration_days')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_available_24h')
                    ->required(),
                Textarea::make('coverage_area')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('is_featured')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('meta_title')
                    ->default(null),
                Textarea::make('meta_description')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
