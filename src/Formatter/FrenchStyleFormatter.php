<?php
namespace Billingo\Formatter;


class FrenchStyleFormatter implements FormatterInterface {
    use NumberFormatTrait, RoundTo;


    function __construct(){
        $this->numDecimals = 2;
        $this->thousandsSep = ' ';
        $this->decimalsSep = ',';
    }

    public function format($value) {
        return $this->formatNumber($value);
    }
}