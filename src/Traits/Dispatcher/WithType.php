<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithType
{
    /**
     * {@inheritdoc}
     */
    public static function type(): string
    {
        return static::TYPE;
    }
}
