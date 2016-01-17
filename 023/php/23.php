<title>23. Feladat</title>
<?php
$n=28124; //28124
$ossz = 0;
for($i=0;$i<$n;$i++){
	$array[$i]=0;
	$ossz += $i;
}

for($i=1;$i<$n;$i++){
	for($j=$i*2;$j<$n;$j+=$i){
		$array[$j] +=$i;
	}
}

for($i=0;$i<$n;$i++){
	if($i<$array[$i]){
		$abundant[]=$i;
		//if($i%12!=0 && $i%18!=0 && $i%20!=0 && $i%30!=0)
		//echo $i." ".$array[$i]."<br>";
	}
}

for($i=1;$i<$n;$i++){
	$tomb[$i]=0;
}

for($i=0;$i<count($abundant);$i++){
	$k=$abundant[$i];
	if($tomb[$k]==0){
		$k *=2;
	while($k<$n){
		$tomb[$k] = 1;
		$k += $abundant[$i];
	}}
}

$mink=0;

for($i=1;$i<$n;$i++){
	if($tomb[$i]==0){
		
		while($mink<count($abundant) && $abundant[0]+$abundant[$mink]<=$i){
			$mink++;
		}
		$k=$mink;
		$l=0;
		echo $i." ";
		while(($abundant[$l]+$abundant[$k])!=$i && $k!=$l){
			if(($abundant[$l]+$abundant[$k])>$i){ $k--; }
			else {$l++;}
		}
		if(($abundant[$l]+$abundant[$k])==$i){ $tomb[$i]=1; echo "Osszeg <br>";}
		
	}
}

echo "<br>----------------<br>";
$m=0;
for($i=1;$i<$n;$i++){
	if($tomb[$i]==0) {$m+=$i; echo $i."<br>";}
}
echo $m;
/*
$j = count($abundant)-1;
for($i=0;$i<count($abundant);$i++){
	
		while($j>0 && $abundant[$i]+$abundant[$j]>$n) $j--;
		if($j>=0)
		$ossz -=$abundant[$i]*$j;

}

for($i=0;$i<count($abundant);$i++){
	for($j=$i;$j<count($abundant);$j++){
		if(!isset($tomb[$abundant[$i]+$abundant[$j]])){
			$tomb[$abundant[$i]+$abundant[$j]]=0;
		} else{
			echo "Cica<br>";
			return 0;
		}
	}
}
*/
echo "<br>".$ossz;


?>