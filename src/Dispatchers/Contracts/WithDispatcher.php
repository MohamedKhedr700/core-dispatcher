<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatcher
{
    /**
     * Set the dispatcher.
     */
    public function setDispatcher(DispatcherInterface $dispatcher): static;

    /**
     * Get the dispatcher.
     */
    public function dispatcher(): DispatcherInterface;
}
