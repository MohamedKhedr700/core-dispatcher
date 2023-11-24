<?php

namespace Raid\Core\Dispatcher\Traits\Provider\Dispatcher;

use Raid\Core\Dispatcher\Dispatchers\Contracts\DispatchableInterface;

trait WithDispatchable
{
    /**
     * The dispatchable instance.
     */
    protected DispatchableInterface $dispatchable;

    /**
     * {@inheritdoc}
     */
    public function setDispatchable(DispatchableInterface $dispatchable): void
    {
        $this->dispatchable = $dispatchable;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchable(string $key = null, mixed $default = null): mixed
    {
        return $key ? $this->dispatchable->attribute($key, $default) : $this->dispatchable;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchableId(): int
    {
        return $this->dispatchable('id');
    }
}
