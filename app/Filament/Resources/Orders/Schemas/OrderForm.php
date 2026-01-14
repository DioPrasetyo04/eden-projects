<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('order_number')
                    ->required(),
                TextInput::make('order_type')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
                TextInput::make('discount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('tax')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('management_fee')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('customer_email')
                    ->email()
                    ->required(),
                TextInput::make('customer_phone')
                    ->tel()
                    ->required(),
                Textarea::make('customer_address')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('deceased_name')
                    ->default(null),
                TextInput::make('deceased_religion_id')
                    ->numeric()
                    ->default(null),
                DateTimePicker::make('service_date'),
                Textarea::make('service_location')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('assigned_team_id')
                    ->numeric()
                    ->default(null),
                DateTimePicker::make('completed_at'),
            ]);
    }
}
