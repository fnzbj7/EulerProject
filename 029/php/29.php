<title>29-es Feladas</title>
<?php
$n=0;
$meddig = 100;
$ossz = 0;
for($i=2;$i<=$meddig;$i++){
	for($j=2;$j<=$meddig;$j++){
		$ossz++;
		if($i%$j==0 && $i!=$j){
			$k=2;
			$l=$i/$j;
			while(pow($k,$j)<=$meddig){
				echo $k." ".$i."=>".pow($k,$j)." ".$l."  ".pow($k,$i)."=".pow(pow($k,$j),$l) ."  <br>";
				$k++;
				$n++;
			}
		}
	}
}
echo $ossz."-".$n."=".($ossz-$n);
?>