<?php

namespace Gunharth\Lightspeed;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\GoogleCalendar\GoogleCalendar
 */
class LightspeedFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lightspeedapi';
    }
}
