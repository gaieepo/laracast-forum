<?php

namespace App;

use Illuminate\Support\Facades\Redis;

trait RecordsVisits {
    public function recordVisit()
    {
        Redis::incr("threads.{$this->id}.visits");

        return $this;
    }

    public function visits()
    {
        return Redis::get($this->visitsCacheKey()) ?? 0;
    }

    public function resetVisits()
    {
        Redis::del($this->visitsCacheKey());

        return $this;
    }

    public function visitsCacheKey()
    {
        return "threads.{$this->id}.visits";
    }
}
