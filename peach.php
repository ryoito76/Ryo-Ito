<?php
 //乱数の範囲を設定
 $Pmax=300;
 $Pmin=200;
 //要素数0の配列に生成した乱数を15個格納する
 $count=0;
 $array=array();
 for($count=count($array);$count<15;$count++){
     $array[]=rand($Pmin,$Pmax);
     ;
}
//値が入った配列の最大値、最小値、平均値を求める
 echo ("桃の最高値は".max($array)."円です");
 echo "<br>";
 echo ("桃の最安値は".min($array)."円です");
 echo "<br>";
$average=round(array_sum($array)/count($array),0);
 echo ("桃の平均価格は".$average."円です");
 echo "<br>";

 //乱数の範囲を設定
 $Bmax=500;
 $Bmin=400;
//要素数0の配列に生成した乱数を15個格納する
 $count=0;
 $array=array();
 for($count=count($array);$count<15;$count++){
     $array[]=rand($Bmin,$Bmax);
     ;
}
//値が入った配列の最大値、最小値、平均値を求める
 echo ("イチゴの最高値は".max($array)."円です");
 echo "<br>";
 echo ("イチゴの最安値は".min($array)."円です");
 echo "<br>";
$average=round(array_sum($array)/count($array),0);
 echo ("イチゴの平均価格は".$average."円です");
 echo "<br>";
