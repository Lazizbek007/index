<?php
$zelenina= array(1=>"paprika","brambora","rajce","cesnek","cibule","mrkev","repa","celer","porek","zeli");
echo "<br><br>";

echo $zelenina[5];

$barvyzelenin= array(1=>"zelena","zluta","cervena","bila","zlutobila","oranzova","fialova","bezova","tmavozelena","svetlozelena");

echo $barvyzelenin[5];

$ceny=array(1=>"10kc","15kc","15kc","18kc","12kc","11kc","20kc","16kc","14kc","13kc");

echo $ceny=[5];
echo"<br><br>";

$zelenina["paprika"]["zelena"]["10kc"]["mala"]["nakupnimisto"]="Tesco";
$zelenina["brambora"]["zluta"]["15kc"]["stredni"]["nakupnimisto"]="Globus";
$zelenina["rajce"]["cervena"]["15kc"]["mala"]["nakupnimisto"]="Kaufland";
$zelenina["cesnek"]["bila"]["18kc"]["mala"]["nakupnimisto"]="Lidl";
$zelenina["cibule"]["zlutobila"]["12kc"]["velka"]["nakupnimisto"]="Albert";
$zelenina["mrkev"]["oranzova"]["11kc"]["stredni"]["nakupnimisto"]="Kaufland";
$zelenina["repa"]["fialova"]["20kc"]["mala"]["nakupnimisto"]="Tesco";
$zelenina["celer"]["bezova"]["16kc"]["stredni"]["nakupnimisto"]="Lidl";
$zelenina["porek"]["tmavozelena"]["14kc"]["velka"]["nakupnimisto"]="Globus";
$zelenina["zeli"]["svetlozelena"]["13kc"]["stredni"]["nakupnimisto"]="Albert";

echo $zelenina["zeli"]["svetlozelena"]["13kc"]["stredni"]["nakupnimisto"]="Albert";

var_dump($zelenina);
var_dump($barvyzelenin);
var_dump($ceny);
?>