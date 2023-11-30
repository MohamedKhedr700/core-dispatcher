<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

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
    public function setDispatchable(DispatchableInterface $dispatchable): static
    {
        $this->dispatchable = $dispatchable;

        return $this;
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
