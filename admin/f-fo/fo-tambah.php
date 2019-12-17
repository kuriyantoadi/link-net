<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
$node_des = $_POST['node_des'];
$regional = $_POST['regional'];
$hub_name = $_POST['hub_name'];
$rack = $_POST['rack'];
$link_1 = $_POST['link_1'];
$link_2 = $_POST['link_2'];
$pic = $_POST['pic'];
$kondisi = $_POST['kondisi'];

// menginput data ke database
//mysqli_query($koneksi,"insert into user values('','$username','$password','$level')");
mysqli_query($koneksi,"insert into t_fo values(
              '$node_id',
              '$node_des',
              '$regional',
              '$hub_name',
              '$rack',
              '$link_1',
              '$link_2',
              '$pic',
              '$kondisi')");


// mengalihkan halaman kembali ke index.php
header("location:fo-tampil.php");

?>
