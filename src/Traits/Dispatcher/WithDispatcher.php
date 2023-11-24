<?php

namespace Raid\Core\Dispatcher\Traits\Provider\Dispatcher;

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
    public function setDispatcher(DispatcherInterface $dispatcher): void
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatcher(): DispatcherInterface
    {
        return $this->dispatcher;
    }
}
