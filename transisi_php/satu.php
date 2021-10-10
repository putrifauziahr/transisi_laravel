<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jawaban No 1 PHP</title>
</head>
<body>

<?php

$nilai = [72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86];
$max = max($nilai);
$min = min($nilai);


for ($i=0; $i <count($nilai) ; $i++) { 
	echo $nilai[$i] . ' ';
}

echo '<br>';
echo 'Nilai Terbesar : ' . $max;
echo '<br>';
echo 'Nilai Terkecil : ' . $min;
echo '<br>';


for ($x=0; $x<count($nilai); $x++)
{
$bilangan[$x] = $nilai[$x];
$jumlah=$jumlah + $bilangan[$x];
}
echo 'Nilai  Rata-Rata '.' : '. $jumlah/count($nilai);


?>
 

</body>
</html>
