<!DOCTYPE html>
<html>
<body>
	<title>Nama Anggota Keluarga</title>

<?php foreach ($anggota_keluarga = ["Bapak", "Ibu", "Makhmum Qalbi", "Yumna Nafisah", "Ilyasa Abdurrakhim", "Zunaizah Zulfikar"] as $ang){ ?>
<br>Nama: <?= $ang; ?>
<br>Jumlah Kata: <?= str_word_count($ang) ?>
<br>Jumlah Huruf: <?= strlen($ang) ?>
<br>Kebalikan Nama: <?= strrev($ang) ?> <br>

<?php
$teks_awal = trim($ang);
$teks_modif = strtolower($teks_awal);
$teks=str_replace(' ', '', $teks_modif);
$jumlah = strlen($teks);

$a = substr_count($teks, "a");
$i = substr_count($teks, "i");
$u = substr_count($teks, "u");
$e = substr_count($teks, "e");
$o = substr_count($teks, "o");

$vokal = $a+$i+$u+$e+$o;
$konsonan = $jumlah-$vokal;

echo "Jumlah Karakter = $jumlah"."<br>";

echo "Jumlah Huruf Vokal = $vokal"."<br>";

echo "Jumlah Huruf Konsonan = $konsonan"."<br>";

?>

<br>
<?php }

?>

</body>
</html>



