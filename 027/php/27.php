<title>27es Feladat</title>
<?php
function Prim(&$primArray,$szam){
	$gyok = sqrt($szam);
	foreach($primArray as $prim){
		if ($szam%$prim==0) return 0;
		if($gyok<$prim) return 1;
	}
}

function LinearSearch(&$array,$searched,$l,$log,$k){

	if($array[$k]==$searched) return 1;
	for($i=0;$i<$log;$i++){
		$now = ceil(($k+$l)/2);
		if($array[$now]==$searched) return 1;
		else if($array[$now]<$searched) $k = $now;
		else $l = $now;
	}
	return 0;
}

//-----------------------------------------------------------------------------
$prim2[] = 2;
$prim2[] = 3;
$darab = 2;
$i=6;


while($i-1<100000){
	
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
$log = ceil(log($darab,2));


$b=0;
$max_darab = 0;
while($prim2[$b]<1000){
$n=0;
	while(LinearSearch($prim2,$n*$n+(-777)*$n+$prim2[$b],$darab,$log,0)){
		$n++;
	}
	if($n>$max_darab){
		$max_darab = $n;
		$max_ert = $prim2[$b];
	}
$b++;
}
echo $max_darab." ".$max_ert;

?>