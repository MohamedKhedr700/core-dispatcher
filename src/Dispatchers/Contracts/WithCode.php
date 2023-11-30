<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithCode
{
    /**
     * Generate the dispatcher code.
     */
    public function generateCode();
}
