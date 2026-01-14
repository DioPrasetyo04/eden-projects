<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('subject')
                    ->default(null),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('service_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('product_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('preferred_contact')
                    ->required()
                    ->default('email'),
                TextInput::make('status')
                    ->required()
                    ->default('new'),
                TextInput::make('responded_by')
                    ->numeric()
                    ->default(null),
                DateTimePicker::make('responded_at'),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
