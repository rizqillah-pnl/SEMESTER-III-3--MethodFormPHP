<?php
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$color = $_REQUEST['color'];
$date = $_REQUEST['date'];
$dtlocal = $_REQUEST['dtlocal'];
$email = $_REQUEST['email'];
$file = $_REQUEST['file'];
$hidden = $_REQUEST['hidden'];
$month = $_REQUEST['month'];
$range = $_REQUEST['range'];
$search = $_REQUEST['search'];
$tel = $_REQUEST['tel'];
$time = $_REQUEST['time'];
$url = $_REQUEST['url'];
$week = $_REQUEST['week'];


echo "<b>Username adalah = </b>" . $name;
echo "<br/><b>Password adalah = </b>" . $password;

if (isset($_REQUEST['gender'])) {

  $gender = $_REQUEST['gender'];
  echo "<br><b>Jenis Kelamin = </b>" . $gender;
}


if (isset($_REQUEST['jenis'])) {
  $jenis = $_REQUEST['jenis'];
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
echo "<br/><b>Inputan bulan = </b>" . $month;
echo "<br/><b>Range yang dimasukkan = </b>" . $range;
echo "<br/><b>Pencarian anda = </b>" . $search;
echo "<br/><b>Input Tel anda = </b>" . $tel;
echo "<br/><b>Inputan Waktu anda = </b>" . $time;
echo "<br/><b>Link yang anda input = </b>" . $url;
echo "<br/><b>Minggu Inputan anda = </b>" . $week;
