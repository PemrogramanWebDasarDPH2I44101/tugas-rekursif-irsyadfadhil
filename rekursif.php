<?php

error_reporting(0);
$angka = 5;

//jawaban untuk soal 1 
function soal1($a, $b){
	if ($a > 0) {
		if ($b > 0) {
			echo "*";
			$b--;
			soal1($a, $b);
		}
		else{
			echo "<br>";
			$a--;
			soal1($a, $a);
		}
	}
}
soal1 ($angka, $angka);

echo "==========================================";
echo "<br>";

//jawaban untuk soal 2 
function soal2($a, $b, $angka){
	if ($a <= $angka) {
		if ($b <= $a) {
			echo "$b";
			$b++;
			soal2($a, $b, $angka);
		}
		else{
			echo "<br>";
			$a++;
			soal2($a, 1, $angka);
		}
	}
}
soal2 (1, 1, $angka);

?>
