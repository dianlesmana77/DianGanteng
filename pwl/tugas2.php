<!DOCTYPE html>
<html>
<head>
	<title>dian Lesmana | 16.11.0546</title>
</head>
<body>
<form action="#" method="POST">
<table>
	<tr>
		<td>
			Nim :
		</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>
			Jumlah kehadiran :
		</td>
		<td><input type="number" name="hadir"></td>
	</tr>
	<tr>
		<td>
			UTS :
		</td>
		<td><input type="text" name="uts"></td>
	</tr>
	<tr>
		<td>
			UAS :
		</td>
		<td><input type="text" name="uas"></td>
	</tr>
	<tr>
		<td>
			Tugas :
		</td>
		<td><input type="text" name="tugas"></td>
	</tr>
	<tr>
		<td>
			Kuis :
		</td>
		<td><input type="text" name="kuis"></td>
	</tr>
</table>
<input type="submit" name="hitung">
</form>
<?php
	if (isset($_POST['hitung'])) {
		$nim = $_POST['nim'];
		$hadir = $_POST['hadir'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];
		$tugas = $_POST['tugas'];
		$kuis = $_POST['kuis'];

		$nilaikehadiran=($hadir/14)*10;
		$nilaiakhir= ($nilaikehadiran) + ($uts*30/100) + ($uas*40/100) + ((($tugas+$kuis)/2)*20/100);

		if($nilaiakhir > 80)
			$grade ="A";
		elseif ($nilaiakhir >= 60 && $nilaiakhir <=80) {
			$grade ="B";}
		elseif ($nilaiakhir >= 40 && $nilaiakhir <=60) {
			$grade ="C";}
		elseif ($nilaiakhir >= 20 && $nilaiakhir <=40) {
			$grade ="D";}
		else{
			$grade="E";
		}

		echo "Nim $nim nilai akhir anda $nilaiakhir dengan $grade";
	}
?>

</body>
</html>