<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:f-admin/index.php");

	// cek jika user login sebagai Teknisi Fiber Optik
	}else if($data['level']=="tek-fo"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tek-fo";
		// alihkan ke halaman dashboard pegawai
		header("location:f-fo/index.php");

	// cek jika user login sebagai Teknisi Coaxial
}else if($data['level']=="tek-coaxial"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tek-fo";
		// alihkan ke halaman dashboard pegawai
		header("location:f-coaxial/index.php");

}else if($data['level']=="tek-hub"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tek-hub";
		// alihkan ke halaman dashboard pegawai
		header("location:f-hub/index.php");

	}else if($data['level']=="pimpinan"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "pimpinan";
			// alihkan ke halaman dashboard pegawai
			header("location:f-pimpinan/index.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}

?>
