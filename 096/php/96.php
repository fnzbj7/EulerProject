<title>96-os feladat</title>
<pre>
<?php
//--------------------Függvények----------------------------
function tabla_kiiratas(&$palya,$honnan){
	echo (($honnan-1)%9)+1 .". Tabla<br>";
	for($i=$honnan;$i<9+$honnan;$i++){
			echo $palya[$i]."<br>";
	}
	echo "<br>";
}

function viz_fugg_init(&$palya,&$tabla,$holi,$holj,$honnan){
	
	$ert = intval($palya[$holi][$holj-1]);
	$helyi =$holi-$honnan;
	$helyi++;
	//vizszintes
	for($j=1;$j<10;$j++){
		if($tabla[$helyi][$j][10]!=0){
			if($tabla[$helyi][$j][$ert]==0){
				$tabla[$helyi][$j][$ert]=1;
				$tabla[$helyi][$j][10]--;
			}
		}
	}
	//fuggoleges
	for($i=1;$i<10;$i++){
		if($tabla[$i][$holj][10]!=0){
			if($tabla[$i][$holj][$ert]==0){
				$tabla[$i][$holj][$ert]=1;
				$tabla[$i][$holj][10]--;
			}
		}
	}
}

function kis_kocka_init(&$palya,&$tabla,$holi,$holj,$honnan){
	$ert = intval($palya[$holi][$holj]);
	$holi -=$honnan;
	$holi = intval($holi/3);
	$holj = intval($holj/3);
	
	for($i=(3*$holi)+1;$i<(3*$holi)+4;$i++){
		for($j=(3*$holj)+1;$j<(3*$holj)+4;$j++){
			if($tabla[$i][$j][10]!=0){
			if($tabla[$i][$j][$ert]==0){
				$tabla[$i][$j][$ert]=1;
				$tabla[$i][$j][10]--;
				}
			}	
		}
	}
}

function utolso_beiras(&$palya,&$tabla,$holi,$holj,$honnan){
	$k=1;
	$i = $holi-$honnan+1;
	$tabla[$holi][$holj][10]--;
	
	
	while($tabla[$holi][$holj][$k]!=0) $k++;
	$tabla[$holi][$holj][$k]=1;
	$palya[$holi-1+$honnan][$holj-1] = strval($k);
	viz_fugg_init($palya,$tabla,$holi-1+$honnan,$holj,$honnan);
	kis_kocka_init($palya,$tabla,$holi-1+$honnan,$holj-1,$honnan);
}

//-------------------------Fájl beolvasás----------------------------------
$myfile = fopen("96.txt", "r") or die("Unable to open file!");
$palya = fread($myfile,filesize("96.txt"));
fclose($myfile);

$palya = explode("\n",$palya);



//---------------------------Init---------------------------------------
$honnan=1;
$n=81;

for($honnan=1;$honnan<21;$honnan+=10){
	$n=81;
	for($i=1;$i<10;$i++){
		for($j=1;$j<10;$j++){
			for($k=1;$k<10;$k++){
				$tabla[$i][$j][$k]=0;
			}
			if($palya[$i-1+$honnan][$j-1]!="0"){
				$tabla[$i][$j][10]=0;
				$n--;
			}
			else $tabla[$i][$j][10]=9;
		}
	}

	for($i=0+$honnan;$i<9+$honnan;$i++){
		for($j=0;$j<9;$j++){
			if($palya[$i][$j]!=0){
				viz_fugg_init($palya,$tabla,$i,$j+1,$honnan);
				kis_kocka_init($palya,$tabla,$i,$j,$honnan);
			}
			
		}
	}


	for($k=0;$k<10;$k++){
		for($i=1;$i<10;$i++){
			for($j=1;$j<10;$j++){
				if($tabla[$i][$j][10]==1){
					utolso_beiras($palya,$tabla,$i,$j,$honnan);
					$n--;
				}
			}
		}
	}
}


for($i=1;$i<10;$i++){
	for($j=1;$j<10;$j++){
		echo $tabla[$i][$j][10]." ";
	}
	echo "<br>";
}





tabla_kiiratas($palya,$honnan-10);
tabla_kiiratas($palya,$honnan+10);
?>
</pre>