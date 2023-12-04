<?php

namespace Lidonation\AdaPayments\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lidonation\AdaPayments\AdaPayments
 */
class AdaPayments extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lidonation\AdaPayments\AdaPayments::class;
    }
}
