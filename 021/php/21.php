<title>21-es feladat</title>
<?php
for($i=0;$i<10000;$i++){
	$array[$i]=0;
}

for($i=1;$i<10000;$i++){
	for($j=$i*2;$j<10000;$j+=$i){
		$array[$j] +=$i;
	}
}
$n=0;
for($i=0;$i<10000;$i++){
	if($array[$i]<10000){
		if($i == $array[$array[$i]] && $i !=$array[$i]){$n +=$i;
		echo $i.", ". $array[$i]."<br>";
		}
	}
}
echo $n;
?>