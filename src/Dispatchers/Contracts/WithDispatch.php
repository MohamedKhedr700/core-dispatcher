<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithDispatch extends WithGenerate, WithPrepare, WithReset, WithSend, WithVerify
{
    /**
     * dispatch the dispatch.
     */
    public function dispatch();
}
