<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithPrepare
{
    /**
     * {@inheritdoc}
     */
    public function prepare(string $code): void
    {
        $this->dispatchable()->dispatches()->create([
            'code' =>  $this->getCode(),
        ]);
    }
}