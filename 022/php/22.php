<title>22. Feladat</title>
<?php
$myfile = fopen("22.txt", "r") or die("Unable to open file!");
$szoveg = fread($myfile,filesize("22.txt"));
fclose($myfile);
$szoveg = explode(",",str_replace('"',"",$szoveg));
/*
for($i=0;$i<count($szoveg)-1;$i++){
	$ker=0;
	for($j=1;$j<count($szoveg)-$i-1;$j++){
		if($szoveg[$ker]<$szoveg[$j]) $ker = $j;
	}
	$seged = $szoveg[count($szoveg)-$i-1];
	$szoveg[count($szoveg)-$i-1] = $szoveg[$ker];
	$szoveg[$ker] = $seged;
}
for($i=0;$i<count($szoveg);$i++){
	echo $szoveg[$i]." ";
}*/

//Feltölti betűvel a tömböt, egyfajta inicializáció
$betu ="A";
$i=1;
while($betu!="AA"){
	$tomb[$betu] = 0;
	$ertek[$betu] = $i;
	$i++;
	$betu++;
}
//a tömbe kigyűjtjük a kezdőbetük darabszámát
foreach($szoveg as $elem){
	$tomb[$elem[0]]++;
}
/*
foreach($tomb as $elem){
	echo $elem." ";
}*/

$szam = $tomb["A"];
for($i="B";$i>"AA";$i++){
	$tomb[$i] += $szam;
	$szam = $tomb[$i];
	//echo $szam." ";
}

foreach($szoveg as $elem){
	$nevek[--$tomb[$elem[0]]]=$elem;
}
$n=0;
for($k='B';$k!='AB';$k++){
	if(!isset($tomb[$k])) $tomb[$k] = count($nevek);
	for($i=$n;$i<$tomb[$k];$i++){
		$ker=$n;
		for($j=$n+1;$j<=$tomb[$k]-$i-1+$n;$j++){
			if($nevek[$ker]<$nevek[$j]) $ker = $j;
		}
		$seged = $nevek[$tomb[$k]-$i-1+$n];
		$nevek[$tomb[$k]-$i-1+$n] = $nevek[$ker];
		$nevek[$ker] = $seged;
	}
	//echo $n." ";
	$n = $tomb[$k];
	//echo $n." <br>";
}

echo "<br>";
/*
$kezdo='A';
for($i=0;$i<count($nevek);$i++){
	if($nevek[$i][0]!=$kezdo){
		echo "<br>"; $kezdo = $nevek[$i][0];
	}
	echo $nevek[$i]." ";
}*/

$ossz="0";
for($i=1;$i!= count($nevek);){
	$resz = "0";
	$elem = $nevek[$i];
	for($j=0;$j<strlen($elem);$j++){
		$resz = bcadd($resz,$ertek[$elem[$j]]);
	}
	$ossz = bcadd($ossz, bcmul($resz,(string)(++$i)));
	if($i==938) echo $nevek[$i-1];
	
}

echo $ossz;

?>