<?php 

// daftar deret huruf
$input = "ABBA";

// memecah string input
$deret_huruf = str_split($input);

$urutan;
$hitung = 0;
for ($i=0; $i < count($deret_huruf); $i++) { 
	for ($j=$i+1; $j < count($deret_huruf); $j++) { 
		if ($deret_huruf[$i] == $deret_huruf[$j]) {
			$urutan[$hitung] = $j;
			$hitung++;
			break;
		}
	}
}


echo "Deret Huruf : ";
for ($i=0; $i < count($deret_huruf); $i++) { 
	echo $deret_huruf[$i]." ";
}
echo "<br><br> Deret huruf awal yang double : ";
echo $deret_huruf[min($urutan)];
?>