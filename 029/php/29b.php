<title></title>
<?php
$n = 0;
for($i=2;$i<=100;$i++){
	for($j=2;$j<=100;$j++){
		$szoveg = bcpow($i,$j);
		if(!isset($tomb[$szoveg])){
			$tomb[$szoveg] = 0;
			$n++;
		}
	}
}
echo $n;
?>