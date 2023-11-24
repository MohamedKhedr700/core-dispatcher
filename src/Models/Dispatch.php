<?php

namespace Raid\Core\Dispatcher\Models;

class Dispatch extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'dispatches';

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'dispatchable_id',
        'dispatchable_type',
        'dispatcher_column',
        'verified_at',
        'dispatched',
        'verified',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'dispatched' => 'boolean',
        'verified' => 'boolean',
    ];

    /**
     * {@inheritdoc}
     */
    protected $dates = [
        'dispatched_at',
        'verified_at',
    ];

    /**
     * {@inheritdoc}
     */
    public function dispatchable()
    {
        return $this->morphTo();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatcher()
    {
        return $this->morphTo();
    }

    /**
     * {@inheritdoc}
     */
    public function verify()
    {
        $this->verified = true;
        $this->verified_at = now();
        $this->save();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch()
    {
        $this->dispatched = true;
        $this->dispatched_at = now();
        $this->save();
    }
}