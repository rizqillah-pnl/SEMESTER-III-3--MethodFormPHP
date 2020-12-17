<?php


$name = $_GET['name'];
$password = $_GET['password'];
$color = $_GET['color'];
$date = $_GET['date'];
$dtlocal = $_GET['dtlocal'];
$email = $_GET['email'];
$file = $_GET['file'];
$hidden = $_GET['hidden'];
$month = $_GET['month'];
$range = $_GET['range'];
$search = $_GET['search'];
$tel = $_GET['tel'];
$time = $_GET['time'];
$url = $_GET['url'];
$week = $_GET['week'];









echo "<b>Username adalah = </b>" . $name;
echo "<br/><b>Password adalah = </b>" . $password;

if (isset($_GET['gender'])) {

  $gender = $_GET['gender'];
  echo "<br>" . $gender;
}


if (isset($_GET['jenis'])) {
  $jenis = $_GET['jenis'];
  echo "<br>";
  echo "<b>Pilihan Checkbox anda adalah :</b> <br>";

  for ($i = 0; $i < count($jenis); $i++) {
    echo $jenis[$i] . "<br>";
  }
}



echo "<br/><b>Warna inputan anda = </b>" . $color;
echo "<br/><b>Tanggal = </b>" . $date;
echo "<br/><b>Tanggal Local = </b>" . $dtlocal;
echo "<br/><b>Email anda adalah = </b>" . $email;
echo "<br/><b>File anda = </b>" . $file;
echo "<br/><b>Teks dalam hidden adalah = </b>" . $hidden;

//gambar disini

echo "<br/><b>Inputan bulan = </b>" . $month;
echo "<br/><b>Range yang dimasukkan = </b>" . $range;
echo "<br/><b>Pencarian anda = </b>" . $search;
echo "<br/><b>Input Tel anda = </b>" . $tel;
echo "<br/><b>Inputan Waktu anda = </b>" . $time;
echo "<br/><b>Link yang anda input = </b>" . $url;
echo "<br/><b>Minggu Inputan anda = </b>" . $week;
