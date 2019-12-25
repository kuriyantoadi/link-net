<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="../node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>

<!-- menu awal -->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="../img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="../img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>

      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link">Selamat Datang Teknisi Fiber Optik</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="../logout.php">Keluar</a>
        </li>
      </ul>

    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-title">Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="node-tampil.php">
                <i class="nav-icon icon-pencil"></i> Data Node ID</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fo-tampil.php">
                <i class="nav-icon icon-pencil"></i> Data Fiber Optik</a>
            </li>
          </ul>
        </nav>
      </div>


<!-- Breadcrumb -->
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>

            </div>
          </li>
        </ol>

        <!-- akhir fiber optik -->




<!-- daftar node -->
<div class="container-fluid">
  <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">Data Node ID</div>
            <div class="card-body">
          <!--awal -->
          <div class="col-md-12">
            <table class="table table-hover">
            <tr>
            <th>Node ID</th>
            <th>Node Deskription</th>
            <th>Regional</th>
            <th>Hub Name</th>
            <th>Titik Koordinat</th>


            </tr>
            <?php
            include '../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from node");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
              <td><?php echo $d['node_id']; ?></td>
              <td><?php echo $d['node_des']; ?></td>
              <td><?php echo $d['regional']; ?></td>
              <td><?php echo $d['hub_name']; ?></td>
              <td><?php echo $d['titik_ko']; ?></td>

            <?php
            }
            ?>

            </table>
          </div>
          </div>


<!-- awal -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Mengisi Form Registrasi Jaringan Baru</div>
                  <div class="card-body">

          <!--awal -->
          <form action="fo-tambah.php" method="POST" name="input" onSubmit="return validasi()">
          <div class="col-md-5">
            <table class="table table-borderless">
                <tr>
                  <td>Node ID</td>
                  <td>
                      <input class="form-control" type="text"  name="node_id" onkeyup="isi_otomatis()" id="node_id">
                  </td>
                </tr>
                <tr>
                  <td>Node Deskription</td>
                  <td>
                      <input class="form-control" type="text"  name="node_des" id="node_des" >
                  </td>
                </tr>
                <tr>
                  <td>Regional</td>
                  <td>
                      <input class="form-control" type="text"  name="regional" id="regional" >
                  </td>
                </tr>
                <tr>
                  <td>Hub Name</td>
                  <td>
                      <input class="form-control" type="text" name="hub_name" id="hub_name" >
                  </td>
                </tr>
                <tr>
                  <td>Rack ODF</td>
                  <td>
                      <input class="form-control" type="text" name="rack" id="rack">
                  </td>
                </tr>
                <tr>
                  <td>Jarak Normal</td>
                  <td>
                      <input class="form-control" type="text" name="jarak_normal" id="jarak_normal">
                  </td>
                </tr>
                <tr>
                  <td>Upload File</td>
                  <td>
                      <input class="form-control" type="text" name="upload_file" id="upload_file">
                  </td>
                </tr>
                <tr>
                  <td>PIC</td>
                  <td>
                      <input class="form-control" type="text" name="pic" id="pic">
                      <input class="form-control" type="hidden" name="kondisi">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <button class="btn btn-primary px-4" type="submit" value="Daftar">Kirim ke Tekniksi Hub</button>
                  <!--  <input type="submit" name="submit" value="Kirim"></td> -->
                  </td>
                </tr>


              </table>
            </div>
          </div>
          <!-- akhir -->



                    <!-- /.row-->

                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
<!-- akhir -->

          <script>

          function validasi(){
          	var x = document.forms["input"]["node_id"].value;
          	if (x == null || x == "") {
          		alert("Node ID Tidak Boleh Kosong");
          		return false;
          	}
          	var x = document.forms["input"]["node_des"].value;
          	if (x == null || x == "") {
          		alert("Node description Harus Angka");
          		return false;
          	}
          	var x = document.forms["input"]["regional"].value;
          	if (x == null || x == "") {
          		alert("Regional Tidak Boleh Kosong");
          		return false;
          	}
          	var x = document.forms["input"]["hub_name"].value;
          	if (x == null || x == "") {
          		alert("Hub Name Tidak Boleh Kosong");
          		return false;
          	}
            var x = document.forms["input"]["rack"].value;
          	if (x == null || x == "") {
          		alert("Rack Tidak Boleh Kosong");
          		return false;
          	}
            var x = document.forms["input"]["jarak_normal"].value;
          	if (x == null || x == "") {
          		alert("Jarak Normal Tidak Boleh Kosong");
          		return false;
          	}
            var x = document.forms["input"]["upload_file"].value;
          	if (x == null || x == "") {
          		alert("Upload file Tidak Boleh Kosong");
          		return false;
          	}
            var x = document.forms["input"]["pic"].value;
            if (x == null || x == "") {
              alert("PIC Tidak Boleh Kosong");
              return false;
            }
          }
          </script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script type="text/javascript">
              function isi_otomatis(){
                  var node_id = $("#node_id").val();
                  $.ajax({
                      url: 'proses-ajax.php',
                      data:"node_id="+node_id ,
                  }).success(function (data) {
                      var json = data,
                      obj = JSON.parse(json);
                      $('#node_des').val(obj.node_des);
                      $('#regional').val(obj.regional);
                      $('#hub_name').val(obj.hub_name);

                  });
              }
          </script>



    <!-- CoreUI and necessary plugins-->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/pace-progress/pace.min.js"></script>
    <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
