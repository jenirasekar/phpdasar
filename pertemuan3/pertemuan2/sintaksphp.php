<?php
// Belajar PHP Dasar 2
// Sintaks dalam PHP

// standar output
// echo, print
// print_r
// var_dump

// variabel dan tipe data
// variabel

// $nama = "jenira sekar";
// echo "$nama"

// operator
// aritmatika
// + - * / %
// $x = 7
// $y = 8
// echo $x * $y;

// penggabungan string / concatenation
// .
// $nama_depan = "jenira"
// $nama_belakang = "sekar"
// echo $nama_depan . "" . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
$x = 5;
$x += 4;
echo $x;
$nama = "jenira";
$nama .= " ";
$nama .= "sekar";
echo "$nama";

// perbandingan 
// <, >, =, <=, >=, !=, ==
var_dump(1 < "5");

// identitas
// ===, !==
var_dump(1 === "5");

// logika
// &&, ||, !
$x = 20;
var_dump($x < 10 && $x % 2 == 0);
var_dump($x < 10 || $x % 2 == 0);
?>