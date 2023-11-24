<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithDispatch
{
    /**
     * {@inheritdoc}
     */
    public function dispatch()
    {
        $this->prepare();

        $this->generate();

        $this->send();
    }
}
