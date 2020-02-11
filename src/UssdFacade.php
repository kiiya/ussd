<?php

namespace Kiiya\Ussd;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiiya\Ussd\Skeleton\SkeletonClass
 */
class UssdFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ussd';
    }
}
