<?php

declare(strict_types=1);

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
