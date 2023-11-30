<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface DispatchableInterface
{
    /**
     * Get dispatchable dispatches.
     */
    public function dispatches();

    public function latestDispatch();
}
