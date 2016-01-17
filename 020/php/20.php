<title>20-as feladat</title>
<?php
$n="1";
for($i=1;$i<=100;$i++){
	$n = bcmul($n,(string)$i);
}

$m = "0";
for($i=0;$i<strlen($n);$i++){
	$m = bcadd($m,$n[$i]);
}
echo $m;

?>