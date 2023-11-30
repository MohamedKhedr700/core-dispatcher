<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

use Raid\Core\Dispatcher\Models\Dispatch;

interface DispatchableInterface
{
    /**
     * Get dispatchable dispatches.
     */
    public function dispatches();

    /**
     * Get the latest dispatch.
     */
    public function latestDispatch(string $type): ?Dispatch;
}
