<?php
require_once("prices.php");
require_once("calculate.php");

//　結果表示用クラス
class Result {
    private $prices;
    public function __construct(Prices $prices) {
        $this->prices = $prices;
    }

    public function showResult() {
        $peach = Calculate::cal($this->prices->getPeachPrices());
        $bery = Calculate::cal($this->prices->getBeryPrices());

        echo "桃の最大値:{$peach['max']}, 最小値:{$peach['min']}, 平均値:{$peach['avg']}\n";
        echo "いちごの最大値:{$bery['max']}, 最小値:{$bery['min']}, 平均値:{$bery['avg']}\n";
    }
}