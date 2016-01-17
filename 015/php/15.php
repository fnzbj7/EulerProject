<title>Kocka</title>
<?php

$n = 2;
$array[1]=2;
for($i=2;$i<=20;$i++){
	for($j=1;$j<$i;$j++){
		for($k=1;$k<=$j+1;$k++){
				if(!isset($masik[$k])) $masik[$k]=0;
				$masik[$k] += $array[$j];
		}
	}
	
	echo $masik[1]*2 ." .... ";
	$n=0;
	for($j=1;$j<=$i;$j++){
		if($j == 1){
		$array[$j] = $masik[$j]*2;
		$n += $array[$j];
		}else{
			$array[$j] = $masik[$j];
			$n += $array[$j];
		}
	}
	unset($masik);
	echo $i.": ".$n."<br>";
}
?>