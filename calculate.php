<?php

//計算用クラス staticでどこからでも呼べるように
class Calculate {
    public static function cal(array $prices) {
        return [
            'max' => max($prices),
            'min' => min($prices),
            'avg' => round(array_sum($prices)/count($prices),0)
        ];
    }
}