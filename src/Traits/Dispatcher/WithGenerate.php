<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithGenerate
{
    /**
     * Generated result.
     */
    protected mixed $generated = null;

    /**
     * Set generated result.
     */
    public function setGenerated(mixed $generated): static
    {
        $this->generated = $generated;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function generated(): mixed
    {
        return $this->generated;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(): void
    {
    }
}