<title>51 nem az</title>
<?php
set_time_limit(0);
function Prim(&$primArray,$szam){
	$gyok = sqrt($szam);
	foreach($primArray as $prim){
		if ($szam%$prim==0 && $gyok>$prim) return 0;
	}
	return 1;
}

function sameNum($szam){
	$n = strlen($szam);
	for($i=0;$i<$n;$i++){
		for($j=$i+1;$j<$n;$j++){
			if($szam[$i]==$szam[$j]){
				return 1;
			}
		}
	}
	return 0;
}

function LinearSearch(&$array,$searched,$arrayNum,$log,$also){
	$k = $also;
	$l = $arrayNum;
	
	for($i=0;$i<$log;$i++){
		$now = ceil(($k+$l)/2);
		if($array[$now]==$searched) return 1;
		else if($array[$now]<$searched) $k = $now;
		else $l = $now;
		//echo "Also: ". $k . " Felso: ". $l ." ". $array[$now] . "<br>";
	}
	return 0;
}

function Kereses($elso,$szo,&$array,$arrayNum,$log,$also){
	$n = 1;
	for($i=(int)$szo[$elso[0]]+1;$i<10;$i++){
		$szo[$elso[0]]=$i;
		$szo[$elso[1]]=$i;
		$szo[$elso[2]]=$i;
		$n += LinearSearch($array,$szo,$arrayNum,$log,$also);
	}
	return $n;
}

$prim2[] = 2;
$prim2[] = 3;
$darab = 0;
$i=6;


while($i-1<1000000){
	
	if(Prim($prim2,$i-1)){
		$prim2[] = $i-1;

	}
	
	if(Prim($prim2,$i+1)){
		$prim2[] = $i+1;

	}
	
	$i +=6;
}

foreach($prim2 as $elem){
	if(sameNum((string)$elem)){
		$prim[]=(string)$elem;
		$darab++;
	}
}
$darab--;
$log = ceil(log($darab,2));
//echo LinearSearch($prim,"9419",$darab-1,ceil(log($darab-1,2)));
//echo ceil(log(17,2));
for($k=1;$k<count($prim);$k++){
	$elem = $prim[$k];
	$n = strlen($elem);
	unset($t);
	for($i=0;$i<$n-1;$i++){
		for($j=$i+1;$j<$n;$j++){
			if($elem[$i]==$elem[$j] && $elem[$i]<"3"){
				if(!isset($t)){
					$t[]=$i; $t[] = $j;
				}else{
					$t[]= $j;
					$m = Kereses($t,$elem,$prim,$darab,$log,$k-1);
					if($m>5){
					echo $elem.": ".$m."<br>";
				}
				}
			}
		}
	}
	
}

?>