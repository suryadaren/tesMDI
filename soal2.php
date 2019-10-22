<?php 

// daftar deret angka
$deret_angka = [5,4,6,2,1,3];


echo "deret angka : ";

// sebelum di urutkan
for ($i=0; $i < count($deret_angka); $i++) { 
	echo $deret_angka[$i]." ";
}

for ($i=0; $i < count($deret_angka); $i++) { 
	

	for ($j=$i+1; $j < count($deret_angka); $j++) { 
		
		// check apakah angka yang lebih besar
		if ($deret_angka[$i] > $deret_angka[$j]) {
			
			// mengganti angka dengan cara menggunakan logika tambah kurang
			$deret_angka[$i] += $deret_angka[$j];
			$deret_angka[$j] = $deret_angka[$i]-$deret_angka[$j];
			$deret_angka[$i] -= $deret_angka[$j];

		}
	}
}

echo "<br> deret angka setelah di urutkan : ";
for ($i=0; $i < count($deret_angka); $i++) { 
	echo $deret_angka[$i]." ";
}


?>