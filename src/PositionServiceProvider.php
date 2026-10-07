<?php

declare(strict_types=1);

namespace Rimba\Position;

use Rimba\Base\Services\BitesServiceProvider;

class PositionServiceProvider extends BitesServiceProvider
{
    protected function bootPackage(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //
    }

    protected function registerPackage(): void
    {
        //
    }
}
