<title>30-as Feladat</title>
<?php

function kiiratas($tomb,&$hatvany){
	$eredmeny = "0";
	for($i=0;$i<10;$i++){
		if($tomb[$i]!=0){
			//echo " ".$i.": ".$tomb[$i];
			$eredmeny = bcadd($eredmeny, bcmul($tomb[$i],$hatvany[$i]));
		}
	}
	
	if(strlen($eredmeny)==7){
		$igen = 1;
		for($i=0;$i<strlen($eredmeny);$i++){
			$szam = intval($eredmeny[$i]);
			if((--$tomb[$szam])<0){
				
				$igen = 0;
			}
		}
		if($igen==1) echo " ".$eredmeny." !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br>";
	}
	
}

function ker_sub_max(&$tomb,$k){
	while($k>=0 && $tomb[--$k]==0 ){
		
	}
	return $k;
}

$hatvany[0] = "0";
for($i=1;$i<10;$i++){
	 $hatvany[$i] = bcpow($i,5);
	 $kulonb[$i] = bcsub($hatvany[$i],$hatvany[$i-1]);
	 //echo $hatvany[$i]." ";
}


//inic
for($i=0;$i<10;$i++){
	$szamok[$i] = 0;  
}
$szamok[0] = 7;
$max = 0;


for($i=0;$i<1300;$i++){
	while($max<9){
		kiiratas($szamok,$hatvany);
		$szamok[$max++]--;
		$szamok[$max]++;

	}

	
	
	do{
		kiiratas($szamok,$hatvany);
		$sub_max = ker_sub_max($szamok,$max);	
		$szamok[$sub_max]--;
		$szamok[$sub_max+1] = $szamok[$max]+1;
	} while($sub_max+1 == $max);
	$szamok[$max] = 0;
	$max = $sub_max+1;
	//echo "<br>";
}


?>