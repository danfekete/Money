<?php

namespace Billingo\Exchange;


interface StorageAdapterInterface {
    public function get($code);
}