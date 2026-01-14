<?php

namespace App\Filament\Resources\MembershipPlans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MembershipPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('protection_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('monthly_fee')
                    ->required()
                    ->numeric(),
                TextInput::make('yearly_fee')
                    ->required()
                    ->numeric(),
                TextInput::make('min_age')
                    ->required()
                    ->numeric(),
                TextInput::make('max_age')
                    ->required()
                    ->numeric(),
                TextInput::make('waiting_period_days')
                    ->required()
                    ->numeric()
                    ->default(0),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('terms_conditions')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('is_recommended')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('color')
                    ->default(null),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
