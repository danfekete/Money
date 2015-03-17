<?php
namespace Billingo\Formatter;

trait RoundTo {
    public function roundTo($value, $roundTo=1) {
        if($roundTo == 0) return $value;
        return round($value / $roundTo) * $roundTo;
    }
}