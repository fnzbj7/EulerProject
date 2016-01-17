<?php
$szam = "600851475143";
$gyok =  bcsqrt("600851475143");
$maradek=1;
$gyok =(int)$gyok - bcmod( $gyok, 6);
$prim;
for(;$gyok>6;$gyok-=6){
	$maradek = (int)bcmod($szam,($gyok+1));
	if($maradek ==0){
		$prim=1;
		echo $gyok+$prim."<br>";
	}
	$maradek = (int)bcmod($szam,($gyok-1));
	if($maradek ==0){
		$prim=-1;
		echo $gyok+$prim."<br>";
	}
}


?>