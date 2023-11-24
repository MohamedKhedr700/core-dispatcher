<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithVerify
{
    /**
     * Verify the dispatch.
     */
    public function verify();
}
