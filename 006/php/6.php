<title></title>
<?php

function Prim($primArray,$szam){
	foreach($primArray as $prim){
		if ($szam%$prim==0) return 0;
	}
	return 1;
	
}

$prim[] = 2;
$prim[] = 3;
$darab = 2;
$i=6;
$mod = 0;

while($darab<10001){
	
	if(Prim($prim,$i-1)){
		$prim[] = $i-1;
		$darab++;
		$mod = -1;
	}
	if($darab>10000) break;
	
	if(Prim($prim,$i+1)){
		$prim[] = $i+1;
		$darab++;
		$mod = 1;
	}
	if($darab>10000) break;
	
	$i +=6;
}

echo $i+$mod;


?>