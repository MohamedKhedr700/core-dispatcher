<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatchable
{
    /**
     * Set the dispatchable instance.
     */
    public function setDispatchable(DispatchableInterface $dispatchable): static;

    /**
     * Get the dispatchable instance or attribute by given key.
     */
    public function dispatchable(string $key = null, mixed $default = null): mixed;

    /**
     * Get the dispatchable id.
     */
    public function dispatchableId(): int;
}
