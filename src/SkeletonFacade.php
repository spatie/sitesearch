<?php

namespace Spatie\Sitesearch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Sitesearch\SitesearchClass
 */
class SitesearchFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Sitesearch';
    }
}
