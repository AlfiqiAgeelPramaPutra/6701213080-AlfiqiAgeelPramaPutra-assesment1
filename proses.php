<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

switch ($operator) {
  case '+':
    $hasil = $angka1 + $angka2;
    break;
  case '-':
    $hasil = $angka1 - $angka2;
    break;
  case '*':
    $hasil = $angka1 * $angka2;
    break;
  case '/':
    if ($angka2 == 0) {
      echo "Error: Angka kedua tidak boleh nol (0) untuk operasi pembagian";
      exit();
    }
    $hasil = $angka1 / $angka2;
    break;
  default:
    echo "Error: Operator tidak valid";
    exit();
}

echo "Hasil: $hasil";
?>
