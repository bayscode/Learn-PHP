<?php
/**
 * Pertemuan 2
 * Sintaks dasar php
 */

/**
 * Standar output
 * echo,print,
 * print_r,var_dump
 */

echo "Muhamad Iqbal";
echo "<br>";
print("Muhamad Iqbal");
echo "<br>";
print_r("Muhamad Iqbal");
echo "<br>";
var_dump("Muhamad Iqbal");
echo "<br>";
echo "<hr>";
?>
<!-- 
  Penulisan sintaks php
  1. PHP didalam HTML
  2. HTML didalam PHP
 -->

<?php
/**
 * Variabel dan tipe data
 * Variabel
 */
echo "<h1>Variabel</h1>";
//===================================
$nama = "Muhamad Iqbal Aditya Putra";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penulisan sintaks php</title>
</head>

<body>
  <h1>Selamat Datang <?php echo $nama; ?></h1>
</body>

</html>
<?php
echo "<br>";
/**
 * @Tips 
 * - Kalau menggunakan ("") itu akan lebih powerfull dibandingkan dengan ('')
 * - kenapa? karena ketika ada didalam ("") kita masukkan variabel ($) didalamnya
 * - dia akan menampilkan isi ($) tersebut, konsep ini disebut interpolasi.
 */

$myName = "bayscode";
echo "Halo nama saya $myName salam kenal ya :)"; // konsep interpolasi
echo "<br>";
echo 'Halo nama saya $myName salam kenal ya :)'; // tanpa konsep interpolasi
echo "<hr>";
/**
 * Operator
 * - Aritmatika (- * / + % )
 */
echo "<h1>Operator</h1>";
$x = 10;
$y = 20;
echo $x * $y;
echo "<hr>";

echo "<h1>Penggabung string concatenation/concat(.)</h1>";
// .
$namaDepan = "Muhamad Iqbal";
$namaBelakang = "Aditya Putra";
echo $namaDepan . " " . $namaBelakang;

echo "<hr>";
/**
 * Assignment/Penugasan
 * = , += , -= , /= , %= , .= 
 */
echo "<h1>Assignment/Penugasan";
echo "<br>";
$x = 1;
$x += 5;
echo $x;
echo "<br>";
$nama = "Muhamad Iqbal";
$nama .= " ";
$nama .= "Aditya Putra";
echo $nama;

echo "<hr>";
/**
 * Perbandingan
 * < , > , <= , => , != 
 */
echo "<h1>Perbandingan</h1>";
var_dump(1 == '1'); // akan menghasilkan nilai boolean true/false

echo "<hr>";
/**
 * Identitas
 * === !==
 */
echo "<h1>Identitas/Identity</h1>";
var_dump(1 === "1"); // akan menghasilkan nilai boolean true/false

echo "<hr>";
/**
 * Logika
 * &&, || , !
 */
echo "<h1>Logika</h1>";
$x = 10;
var_dump($x < 20 && $x % 2 == 0); // Kondisi logika && akan berjalan ketika 2 kondisi bernilai sama(true)
echo "<br>";
$x = 20;
var_dump($x > 10 || $x % 2 == 1); // Kondisi logika || akan bernilai (true) walaupun salah satu kondisinya bernilai (false)
?>