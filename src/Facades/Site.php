<?php

namespace Thora\Site\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thora\Site\Site
 */
class Site extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Thora\Site\Site::class;
    }
}
