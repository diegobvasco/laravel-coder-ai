<?php

namespace DiegoVasconcelos\CoderAi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DiegoVasconcelos\CoderAi\CoderAi
 */
class CoderAi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DiegoVasconcelos\CoderAi\CoderAi::class;
    }
}
