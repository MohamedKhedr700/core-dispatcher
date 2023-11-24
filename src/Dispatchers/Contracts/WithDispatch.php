<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatch extends WithGenerate, WithPrepare, WithSend
{
    /**
     * dispatch the dispatch.
     */
    public function dispatch();
}
