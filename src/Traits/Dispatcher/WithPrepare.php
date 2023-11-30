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
            'code' =>  $this->getCode(),
            'dispatcher_type' => static::class,
        ]);
    }
}