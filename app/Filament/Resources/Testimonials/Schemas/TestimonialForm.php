<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('order_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('name')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(5),
                TextInput::make('avatar')
                    ->default(null),
                Toggle::make('is_featured')
                    ->required(),
                Toggle::make('is_approved')
                    ->required(),
                DateTimePicker::make('approved_at'),
            ]);
    }
}
