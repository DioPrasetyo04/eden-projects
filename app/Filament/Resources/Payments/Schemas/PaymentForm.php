<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_id')
                    ->required()
                    ->numeric(),
                TextInput::make('payment_method')
                    ->default(null),
                TextInput::make('payment_gateway')
                    ->default(null),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
                TextInput::make('transaction_id')
                    ->default(null),
                TextInput::make('payment_proof')
                    ->default(null),
                DateTimePicker::make('paid_at'),
                Textarea::make('gateway_response')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
