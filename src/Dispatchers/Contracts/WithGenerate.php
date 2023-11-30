<?php

namespace Raid\Core\Dispatcher\Dispatchers\Contracts;

interface WithGenerate
{
    /**
     * Set generated result.
     */
    public function setGenerated(mixed $generated): static;

    /**
     * Generate dispatch.
     */
    public function generate();
}
