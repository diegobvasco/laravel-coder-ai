<?php

declare(strict_types=1);

namespace DiegoVasconcelos\CoderAi;

use DiegoVasconcelos\CoderAi\Commands\CoderAiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CoderAiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-coder-ai')
            ->hasConfigFile()
            ->hasCommand(CoderAiCommand::class);
    }
}
