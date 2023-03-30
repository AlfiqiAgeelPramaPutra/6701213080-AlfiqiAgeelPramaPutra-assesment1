<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

if ($operator == '+') {
  $hasil = $angka1 + $angka2;
} else if ($operator == '-') {
  $hasil = $angka1 - $angka2;
} else if ($operator == '*') {
  $hasil = $angka1 * $angka2;
} else if ($operator == '/') {
  if ($angka2 == 0) {
    echo "Error: Angka kedua tidak boleh nol (0) untuk operasi pembagian";
    exit();
  }
  $hasil = $angka1 / $angka2;
} else {
  echo "Error: Operator tidak valid";
  exit();
}

echo "Hasil: $hasil";
?>
