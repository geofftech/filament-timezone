<?php

namespace GeoffTech\FilamentTimezone;

use Filament\Forms\Components\Select;

class SelectTimezone extends Select
{
    protected function setup(): void
    {
        parent::setup();

        $this->options(Timezone::class)
            ->default(Timezone::AustraliaSydney)
            ->searchable()
            ->required()
            ->optionsLimit(1000)
            ->native(false);
    }
}
