<title>Alma</title>
<?php
function NumberComp($szam){
	$length = strlen($szam);
	for($i = 0;$i<$length/2;$i++){
		if($szam[$i]!=$szam[$length-1-$i])
			return 0;
	}
	return 1;
}


$max = '0';
$is;
$js;
$szam = 12345;
$szoveg = (string)($szam *2);

for($i=999;$i>=100;$i--){
	for($j=999;$j>=100;$j--){
		$szoveg = (string)($i*$j);
		if(NumberComp($szoveg)){
			if($szoveg > $max){
				$max = $szoveg;
				$is = $i;
				$js = $j;
			}
		}
	}
}

echo $max;

?>