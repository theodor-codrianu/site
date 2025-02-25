<?php

namespace Thora\Site;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thora\Site\Commands\SiteCommand;

class SiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('site')
            ->hasConfigFile()
            ->hasViews()
            //->hasMigration('create_site_table')
            ->hasCommand(SiteCommand::class);
    }
}
