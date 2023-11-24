<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithPrepare
{
    /**
     * Prepare the dispatch.
     */
    public function prepare();
}
