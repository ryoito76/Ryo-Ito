<?php
// 実行ファイル
require_once("prices.php");
require_once("result.php");

$prices = new Prices(200, 300, 400, 500);
$result = new Result($prices);
//結果を表示
$result->showResult();