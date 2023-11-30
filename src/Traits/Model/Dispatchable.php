<?php

namespace Raid\Core\Dispatcher\Traits\Model;

use Raid\Core\Dispatcher\Models\Dispatch;

trait Dispatchable
{
    /**
     * {@inheritdoc}
     */
    public function dispatches()
    {
        return $this->morphMany(Dispatch::class, 'dispatchable');
    }

    /**
     * {@inheritdoc}
     */
    public function latestDispatch(string $type)
    {
        return $this->dispatches()->where('dispatcher_type', $type)->latest()->first();
    }
}
