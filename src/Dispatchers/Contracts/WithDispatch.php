<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatch extends WithPrepare, WithGenerate, WithVerify, WithSend, WithReset
{
    /**
     * dispatch the dispatch.
     */
    public function dispatch();
}
