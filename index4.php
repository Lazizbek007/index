<?php
for($i=1; $i<11;$i++){
    echo"Ahoj<br>";
}

$i = 1;
$pocet = 20;

while ($i <= $pocet)

{
    echo($i . ' ');
    $i++;
}
for($i = 0;$i<10;$i++){

    for($j = 0;$j<10;$j++){

    }
}
$radek=2;
$sloupec=18;
echo"<table border='1'>";
for($i = 1;$i<=$radek;$i++){
    echo"<tr>";
    for($j=1;$j<=$sloupec;$j++){

    echo"<td> radek".$i."sloupec".$j."</td>";
    }
    echo"</tr>";
}
?>