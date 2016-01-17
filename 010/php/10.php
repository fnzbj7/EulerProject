<title>10-es feladat</title>
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

while($i<2000000){
	
	if(Prim($prim2,$i-1)){
		$prim2[] = $i-1;
		$n = bcadd($n,$i-1);
	}
	
	if(Prim($prim2,$i+1)){
		$prim2[] = $i+1;
		$n  = bcadd($n,$i+1);

	}
	
	$i +=6;
}
echo $n;
?>