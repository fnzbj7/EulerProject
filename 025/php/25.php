<title>25. Feladat</title>
<?php

$masodik = "1";
$akt = "1";

for($i=0;$i<10;$i++){
$seged = $akt;
$akt = bcadd($akt,$masodik);
$masodik = $seged;
echo $i.". ".$akt."<br>";
	
}

?>