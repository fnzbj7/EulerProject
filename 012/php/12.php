<title>12-es feladat</title>
<?php
set_time_limit(0);
function Prim(&$primArray,$szam){
	$gyok = sqrt($szam);
	foreach($primArray as $prim){
		if($gyok<$prim) break;
		if ($szam%$prim==0) return 0;
	}
	return 1;
}
$prim2[] = 2;
$prim2[] = 3;

$i=6;
$n = "5";

while($i<1000000){
	
	if(Prim($prim2,$i-1)){
		$prim2[] = $i-1;
	}
	
	if(Prim($prim2,$i+1)){
		$prim2[] = $i+1;

	}
	
	$i +=6;
}

$n=0;
for($i=1;$i<20000;$i++){
	
	$n+=$i;
	$l=true;
	$oszto = 1;
	foreach($prim2 as $prim){
		if($prim>($n/8)) break;
		$eredeti =$prim;
		if($n % $eredeti == 0){
			$m=1;
			$eredeti = $prim;
			while($n % $eredeti==0){
				$eredeti *=$prim;
				$m++;
			}
			$oszto *=$m;
		}
	}
	if($oszto > 300){
		echo $n." ".$oszto."<br>";
	}
}



8

?>


