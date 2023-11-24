<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithColumn
{
    /**
     * The verification column.
     */
    public const COLUMN = '';

    /**
     * Get the verification column.
     */
    public static function column(): string;

    /**
     * Get the dispatchable column.
     */
    public function dispatchableColumn(): mixed;
}
