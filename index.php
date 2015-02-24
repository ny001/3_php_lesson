<?php
// 結果配列を用意する。
$uranai[] = "大吉！！！";
$uranai[] = "中吉！！";
$uranai[] = "小吉！";
$uranai[] = "凶";
$uranai[] = "大凶！！？";

$min = 0;
$max = count($uranai) - 1;

// mt_rand() 関数の結果を$key 変数に記憶
$key = mt_rand($min,$max);

// 結果出力
echo $uranai[$key];
