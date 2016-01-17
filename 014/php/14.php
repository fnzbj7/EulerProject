<title>14-es feladat</title>
<?php
$max = 0;

for($i=1;$i<1000000;$i++){
	$n = $i;
	$lepes = 0;
	while($n!=1){
		if($n%2==0){
			$n /= 2;
		}
		else{
			$n= 3*$n+1;
		}
		$lepes++;
	}
	if($lepes>$max){
		$max = $lepes;
		$maxn = $i;
	}
}
echo $max."<br>".$maxn;
?>