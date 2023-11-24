<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithType
{
    /**
     * Dispatcher type.
     */
    public const TYPE = '';

    /**
     * Get a dispatcher type.
     */
    public static function type();
}
