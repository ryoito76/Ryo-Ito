<?php

//フツールの値段を設定、返すクラス
class Prices {  
    private $peachPrices = [];
    private $beryPrices = [];
    public function __construct(int $minPeach, int $maxPeach, int $minBery, $maxBery, int $count = 15) {
        for ($i = 0; $i < $count; $i++){
            $this->peachPrices[] = rand($minPeach, $maxPeach);
            $this->beryPrices[] = rand($minBery, $maxBery);
        }
    }
    public function getPeachPrices() {
        return $this->peachPrices;
    }
    public function getBeryPrices() {
        return $this->beryPrices;
    }
};