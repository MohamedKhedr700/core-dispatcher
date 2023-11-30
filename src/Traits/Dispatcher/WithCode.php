<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithCode
{
    /**
     * Dispatcher code.
     */
    protected string $code;

    /**
     * Set the dispatcher code.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the dispatcher code.
     */
    public function code(): string
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function generateCode(): static
    {
        $this->code = mt_rand(100000, 999999);

        return $this;
    }
}
