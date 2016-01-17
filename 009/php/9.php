<title>9es feladat</title>
<?php
for($i=1;$i<=500;$i++){
	for($j=1;$j<=500;$j++){
		$n = (1000-$i-$j);
		$n*=$n;
		if((($i*$i) + ($j*$j)) == $n){
			echo $i*$j*(1000-$i-$j);
		}
	}
}



?>