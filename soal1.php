<?php 

// daftar deret huruf
$input = "ABBA";

// memecah string input
$deret_huruf = str_split($input);

// menghitung jumlah masing2 huruf
$jumlahHuruf = array_count_values($deret_huruf);

$huruf = "";
foreach ($jumlahHuruf as $key => $value) {
	if ($value == 2) {
		$huruf = $key;
	}
}


echo "Deret Huruf : ";
for ($i=0; $i < count($deret_huruf); $i++) { 
	echo $deret_huruf[$i]." ";
}
echo "<br><br> Deret huruf awal yang double : ";
echo $huruf;
?>