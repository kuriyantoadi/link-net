<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$node_id = $_POST['node_id'];
$optical_rx = $_POST['optical_rx'];
$optical_ac = $_POST['optical_ac'];
$optical_dc = $_POST['optical_dc'];
$signal_input_low = $_POST['signal_input_low'];
$signal_input_high = $_POST['signal_input_high'];
$signal_output_high = $_POST['signal_output_high'];
$signal_output_low = $_POST['signal_output_low'];
$signal_output_rev = $_POST['signal_output_rev'];
$docsis_dp = $_POST['docsis_dp'];
$docsis_up = $_POST['docsis_up'];
$docsis_ds = $_POST['docsis_ds'];
$quality_mer = $_POST['quality_mer'];
$quality_ber = $_POST['quality_ber'];
$quality_cn = $_POST['quality_cn'];
$pic = $_POST['pic'];

// update data ke database
//mysqli_query($koneksi,"update user set username='$username', password='$password', level='$level' where id='$id'");

mysqli_query($koneksi,"update t_coaxial set
                      optical_rx='$optical_rx',
                      optical_ac='$optical_ac',
                      optical_dc='$optical_dc',
                      signal_input_low='$signal_input_low',
                      signal_input_high='$signal_input_high',
                      signal_output_low='$signal_output_low',
                      signal_output_high='$signal_output_high',
                      signal_output_rev='$signal_output_rev',
                      docsis_dp='$docsis_up',
                      docsis_up='$docsis_up',
                      docsis_ds='$docsis_ds',
                      quality_ber='$quality_ber',
                      quality_mer='$quality_mer',
                      quality_cn='$quality_cn',
                      pic='$pic',
                      kondisi='Menunggu Konfirmasi' 
                      where node_id='$node_id'");


//mysqli_query($koneksi,"update t_coaxial set optical_rx='$optical_rx' where node_id='$node_id'");

// mengalihkan halaman kembali ke index.php
header("location:coa-tampil.php");

?>
