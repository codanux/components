<?php

namespace Codanux\Components;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codanux\Components\Skeleton\SkeletonClass
 */
class ComponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'components';
    }
}
