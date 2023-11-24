<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface DispatcherInterface
{
    /**
     * Set the dispatchable instance.
     */
    public function setDispatchable(DispatchableInterface $dispatchable): void;

    /**
     * Get the dispatchable instance or attribute by given key.
     */
    public function dispatchable(string $key = null, mixed $default = null): mixed;

    /**
     * Get the dispatchable id.
     */
    public function dispatchableId(): int;
}
