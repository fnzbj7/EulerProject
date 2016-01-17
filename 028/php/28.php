<title>28as feladat</title>
<?php

$n=1;

for($i=3;$i<=1001;$i+=2){
	$negyzet = $i*$i;
	$n+=$negyzet;
	$negyzet =  $negyzet-$i+1;
	$n+=  $negyzet;
	$negyzet =  $negyzet-$i+1;
	$n+=  $negyzet;
	$negyzet =  $negyzet-$i+1;
	$n+=  $negyzet;
}
echo $n;
?>