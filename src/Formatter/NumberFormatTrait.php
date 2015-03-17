<?php
namespace Billingo\Formatter;


trait NumberFormatTrait {
    protected $thousandsSep;
    protected $decimalsSep;
    protected $numDecimals;

    protected function formatNumber($value) {
        return number_format($value, $this->numDecimals, $this->decimalsSep, $this->thousandsSep);
    }
}