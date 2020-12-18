<?php
$name = $_POST['name'];
$password = $_POST['password'];
$color = $_POST['color'];
$date = $_POST['date'];
$dtlocal = $_POST['dtlocal'];
$email = $_POST['email'];
$file = $_POST['file'];
$hidden = $_POST['hidden'];
$month = $_POST['month'];
$range = $_POST['range'];
$search = $_POST['search'];
$tel = $_POST['tel'];
$time = $_POST['time'];
$url = $_POST['url'];
$week = $_POST['week'];


echo "<b>Username adalah = </b>" . $name;
echo "<br/><b>Password adalah = </b>" . $password;

if (isset($_POST['gender'])) {

  $gender = $_POST['gender'];
  echo "<br><b>Jenis Kelamin = </b>" . $gender;
}


if (isset($_POST['jenis'])) {
  $jenis = $_POST['jenis'];
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
