<?php
namespace Billingo\Exchange;


class Converter {
    protected $storage;

    function __construct(StorageAdapterInterface $storage) {
        $this->storage = $storage;
    }

    public function convert($value, $from, $to) {
        $fromRate = $this->storage->get($from);
        $toRate = $this->storage->get($to);

        return $value * (round($fromRate * (1 / $toRate)));
    }
}