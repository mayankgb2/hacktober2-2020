# Here added a matrix addition program using PHP

<?php

$n1=Array("0"=>Array("0"=>1,"1"=>2),"1"=>Array("0"=>3,"1"=>4));

$n2=Array("0"=>Array("0"=>5,"1"=>6),"1"=>Array("0"=>7,"1"=>8));
for($i=0;$i<=1;$i++){
	for($j=0;$j<=1;$j++){
		echo $n1[$i][$j]." ";
	}
	echo "<br>";
}
for($i=0;$i<=1;$i++){
	for($j=0;$j<=1;$j++){
		echo $n2[$i][$j]." ";
	}
	echo "<br>";
}
$res=Array();
echo "<br>The addition result is: <br>";
for($i=0;$i<=1;$i++){
	for($j=0;$j<=1;$j++){
		$res[$i][$j]=$n1[$i][$j]+$n2[$i][$j];
		echo $res[$i][$j]." ";
	}
	echo "<br>";
}
?>
