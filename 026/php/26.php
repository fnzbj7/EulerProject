<title>Osztás</title>
<?php
$maradek[] = 0;
$maxhossz=0;
$maxert;
for($oszto=1;$oszto<=1000;$oszto++){
	$osztando = 1;
	$fut=true;
	$i=1;
	while($fut){
		
		$eredmeny = bcdiv($osztando,$oszto);
		//echo $eredmeny." ";
		$maradek[$i] = $osztando - ($eredmeny * $oszto);
		$osztando = $maradek[$i]*10;
		for($j=0;$j<$i;$j++){
			if($maradek[$j]==$maradek[$i]){
				if($maxhossz<$i-$j){
					$maxhossz = $i-$j;
					$maxert = $oszto;
				}
				$fut=false;
			}
		}
		$i++;
	}
}
echo "<br>".$maxert;


?>