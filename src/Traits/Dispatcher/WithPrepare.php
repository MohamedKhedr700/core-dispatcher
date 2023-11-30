<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithPrepare
{
    /**
     * {@inheritdoc}
     */
    public function prepare(): void
    {
        $this->dispatchable()->dispatches()->create([
            'dispatcher_type' => static::class,
            'code' => $this->generateCode(),
        ]);
    }
}
