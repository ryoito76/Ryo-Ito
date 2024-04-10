<?php
//外部ファイルの取り込み
require_once("getprices.php");

//乱数の範囲を設定
$Pminprice=200;
$Pmaxprice=300;

//$pricesに15個のランダムな整数を格納する
$prices=array();
for($count=0;$count<15;$count++){
    $prices[]=rand($Pminprice,$Pmaxprice);
}

//インスタンス化 メンバ関数を呼び出す
$calculate=new Prices();
  $maxprice=$calculate->getmax($prices);
  $minprice=$calculate->getmin($prices);
  $avgprice=round($calculate->getavg($prices));

  
echo("桃の最高値は".$maxprice."円です");
echo"<br>";
echo("桃の最安値は".$minprice."円です");
echo"<br>";
echo ("桃の平均価格は".$avgprice."円です");
echo "<br>";

//乱数の範囲を設定
$Bminprice=400;
$Bmaxprice=500;
//$pricesに15個のランダムな整数を格納する
$prices=array();
for($count=0;$count<15;$count++){
    $prices[]=rand($Bminprice,$Bmaxprice);
}
//インスタンス化 メンバ関数を呼び出す
$calculate=new Prices();
  $maxprice=$calculate->getmax($prices);
  $minprice=$calculate->getmin($prices);
  $avgprice=round($calculate->getavg($prices));

  
echo("イチゴの最高値は".$maxprice."円です");
echo"<br>";
echo("イチゴの最安値は".$minprice."円です");
echo"<br>";
echo ("イチゴの平均価格は".$avgprice."円です");
echo "<br>";