<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatcher
{
    /**
     * Set the dispatcher.
     */
    public function setDispatcher(DispatcherInterface $dispatcher): void;

    /**
     * Get the dispatcher.
     */
    public function dispatcher(): DispatcherInterface;
}
