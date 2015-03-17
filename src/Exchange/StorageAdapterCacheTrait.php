<?php

namespace Billingo\Exchange;

use Doctrine\Common\Cache\Cache;

trait StorageAdapterCacheTrait {
    protected $cache;

    /**
     * @return Cache
     */
    public function getCache() {
        return $this->cache;
    }

    /**
     * @param mixed $cache
     */
    public function setCache(Cache $cache) {
        $this->cache = $cache;
    }

}