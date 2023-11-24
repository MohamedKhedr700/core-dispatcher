<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithSend
{
    /**
     * Send the dispatch.
     */
    public function send();
}
