<?php

namespace Lidonation\AdaPayments;

use Lidonation\AdaPayments\Commands\AdaPaymentsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AdaPaymentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-adapayments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-adapayments_table')
            ->hasCommand(AdaPaymentsCommand::class);
    }
}
