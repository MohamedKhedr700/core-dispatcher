<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithType
{
    /**
     * Type of dispatcher
     */
    public const TYPE = '';

    /**
     * {@inheritdoc}
     */
    public static function type(): string
    {
        return static::TYPE;
    }
}
