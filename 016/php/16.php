<title></title>
<?php
$n="1";
for($i=0;$i<1000;$i++){
	$n=bcmul($n,"2");
}
$m=0;
for($i=0;$i<strlen($n);$i++){
	$m += (int)($n[$i]);
}
echo $n;
?>