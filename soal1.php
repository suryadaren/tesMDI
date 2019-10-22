<?php 

// daftar deret huruf
$input = "ABCDBE";

// memecah string input
$deret_huruf = str_split($input);

for ($i=0; $i<strlen($input); $i++) {

	// menyimpan deret huruf;
    $deret_huruf[$i] = $input[$i];
}

// untuk menampung huruf double
$huruf = "";

for ($i=0; $i < count($deret_huruf); $i++) { 

	// perulangan mencari huruf yang sama
	for ($j=$i+1; $j < count($deret_huruf); $j++) { 
		if ($deret_huruf[$i] == $deret_huruf[$j]) {
			$huruf = $deret_huruf[$i];
			break 2;
		}
	}
}


echo "Deret Huruf : ";
for ($i=0; $i < count($deret_huruf); $i++) { 
	echo $deret_huruf[$i]." ";
}
echo "<br><br> Deret huruf awal yang double : ";
echo $huruf;
?>