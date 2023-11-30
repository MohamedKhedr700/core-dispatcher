<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

use Raid\Core\Dispatcher\Dispatchers\Contracts\DispatcherInterface;

trait WithDispatcher
{
    /**
     * The dispatcher instance.
     */
    protected DispatcherInterface $dispatcher;

    /**
     * {@inheritdoc}
     */
    public function setDispatcher(DispatcherInterface $dispatcher): static
    {
        $this->dispatcher = $dispatcher;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatcher(): DispatcherInterface
    {
        return $this->dispatcher;
    }
}
