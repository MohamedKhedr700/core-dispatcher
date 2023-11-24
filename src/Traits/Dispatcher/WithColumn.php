<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithColumn
{
    /**
     * {@inheritdoc}
     */
    public static function column(): string
    {
        return static::COLUMN;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchableColumn(): mixed
    {
        return $this->dispatchable(static::column());
    }
}
