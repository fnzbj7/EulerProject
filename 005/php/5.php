<title>5-os Feladat</title>
<?php

$szam = 0;
for($i=1;$i<=100;$i++){
	$szam += $i*$i;
}

$negyzet = 0;
for($i=1;$i<=100;$i++){
	$negyzet +=$i;
}
$negyzet *= $negyzet;
echo $negyzet-$szam ."<br>";
?>