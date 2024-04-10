<?php
 class Prices{
    public $max;
    public $min;
    public $avg;
    function getmax($prices){
        $this->max=max($prices);
        return $this->max;
    }
    function getmin($prices){
        $this->min=min($prices);
        return $this->min;
    }
    function getavg($prices){
        $this->avg=round(array_sum($prices)/count($prices),0);
        return $this->avg;
    }
}