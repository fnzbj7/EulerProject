<title>51-es Feladat</title>
<?php
set_time_limit(0);

//megnézi egy elemről, hogy prím-e, de adni kell hozzá egy olyan tömböt, amiben szerepel a keresett elem elött szereplő összes prím szám
function Prim($primArray,$szam){
	$gyok = sqrt($szam);
	foreach($primArray as $prim){
		if ($szam%$prim==0 && $gyok>$prim) return 0;
	}
	return 1;
}
//összehasonlítja a 2 elemet és csak a megadott számú eltéréssel fogadja el
function Compare($egyik,$masik,$elter){
	$hossz = strlen($egyik);
	for($i=0;$i<$hossz;$i++){
		if($egyik[$i]!=$masik[$i]){
			if(!isset($elterSzam)) $elterSzam = $masik[$i];
			else {if($elterSzam!=$masik[$i]) {return 0;}}
			if($elter==0) return 0;
			$elter--;
		}
	}
	if($elter==0) return 1;
	return 0;
	
}

function sameNum($szam,$darab,&$tomb){
	$n = strlen($szam);
	for($i=0;$i<=$n-$darab;$i++){
		$mennyi = $darab;
		for($j=0;$j<$n;$j++){
			if($szam[$i]==$szam[$j]){
				$tomb[$darab-$mennyi]=$j;
				$mennyi--;
			}
		}
		if($mennyi == 0) return 1;
	}
	return 0;
}

function sameNum2($szam,$darab){
	$n = strlen($szam);
	for($i=0;$i<=$n-$darab;$i++){
		$mennyi = $darab;
		for($j=0;$j<$n;$j++){
			if($szam[$i]==$szam[$j]){
				$mennyi--;
			}
		}
		if($mennyi == 0) return 1;
	}
	return 0;
}

function sameNumWhere($szam,$hely){
	$n = count($hely);
	for($i=0;$i<$n-1;$i++){
		if($szam[$hely[$i]]!=$szam[$hely[$n-1]]) return 0;
	}
	return 1;
}

$prim2[] = 2;
$prim2[] = 3;
$darab = 2;
$i=6;
$m = 9000;


while($darab<$m){
	
	if(Prim($prim2,$i-1)){
		$prim2[] = $i-1;
		$darab++;
	}
	
	if(Prim($prim2,$i+1)){
		$prim2[] = $i+1;
		$darab++;
	}
	
	$i +=6;
}

$hasonlitas = 2;

foreach($prim2 as $pri){
	if(sameNum2((string)$pri,$hasonlitas)) $prim[]=$pri;
}

$n = count($prim);


for($i=0;$i<$n;$i++){
	$hossz = strlen((string)$prim[$i]);
	$j=$i+1;
	
	
	$tomb[]=$prim[$i];
	while($j < $n && strlen((string)$prim[$j])==$hossz){
		if(Compare((string)$prim[$i],(string)$prim[$j],$hasonlitas)){
			$tomb[] = $prim[$j];
		}
		$j++;
	}
	if(sameNum((string)$prim[$i],$hasonlitas,$hol) && count($tomb)>=8){
		echo $prim[$i] ." tartozok: ";
		foreach($tomb as $elem)
			if (sameNumWhere((string)$elem,$hol)) echo $elem ." ";
		echo "<br>";
	}
	unset($tomb);
	
}


?>