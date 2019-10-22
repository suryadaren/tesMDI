<?php  

$deret_huruf = "ABCDBE";

$pisahHuruf = str_split($deret_huruf);
for ($i=0; $i<strlen($deret_huruf); $i++) {
    $pisahHuruf[$i] = $deret_huruf[$i];
    echo $pisahHuruf[$i]."-";

}

var_dump($pisahHuruf);
?>