<?php

namespace App\Filament\Resources\Memberships\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MembershipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('membership_plan_id')
                    ->required()
                    ->numeric(),
                TextInput::make('membership_number')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                DatePicker::make('next_billing_date'),
                TextInput::make('total_paid')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('beneficiary_name')
                    ->default(null),
                TextInput::make('beneficiary_phone')
                    ->tel()
                    ->default(null),
                TextInput::make('beneficiary_relation')
                    ->default(null),
                Textarea::make('digital_will')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('funeral_wishes')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
