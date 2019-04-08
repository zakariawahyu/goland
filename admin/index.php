    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>GO-LAUNDRY</title>

        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="dist/css/summernote.css">
        <script src="dist/js/summernote.js"></script>
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><b>G-</b>LN</span>
                    <span class="logo-lg"><b>GO-LAUNDRY</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="fas fa-user-circle"></span>
                        <?php
                        session_start();
                        if ($_SESSION['username']) {
                          ?>
                        <span>Selamat datang admin <?php echo $_SESSION['username']; ?> </span>

                          <?php
                        }
                         ?>
                    </a>
                    <?php
                    include "../login/koneksi.php";
                    $nama_laundry = $_SESSION['username'];
                    $query2 = "SELECT latitude, longitude  FROM laundry WHERE username_laundry='$nama_laundry'";
                    $hasil2 = mysqli_query($koneksi, $query2);
                    $row = mysqli_fetch_array($hasil2);
                    if (empty($row['latitude'])) {
                      ?>
                      <a href="index.php?page=lihat_akun" class="sidebar-toggle"><span><marquee>Silahkan update data latitude dan longitude terlebih dahulu</marquee></span></a>
                      <?php
                    }
                     ?>
                    <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                    <a href="index.php?page=lihat_pemesanan" class="dropdown-toggle" data-toggle="dropdown">
                    <span>Notifikasi </span>
                    <?php
                    include "../login/koneksi.php";
                    $nama_laundry = $_SESSION['username'];
                    $query = "SELECT * FROM laundry WHERE username_laundry='$nama_laundry'";
                    $hasil = mysqli_query($koneksi, $query);
                    $row = mysqli_fetch_array($hasil);
                    $kode = $row['kode_laundry'];

                    $query1 = "select count(kode_pesanan) as jumlah_masuk from pesanan where kode_laundry='$kode' and status_pesanan='Belum Diproses'";
                    $hasil1 = mysqli_query($koneksi, $query1);
                    $result1 = mysqli_fetch_array($hasil1);
                    ?>
                    <i class="fa fa-envelope"></i>
                    <span class="label label-success"><?php echo $result1['jumlah_masuk']; ?></span>
                    </a>
                    <ul class="dropdown-menu"></ul>
                    </li>
                    </ul>
                  </div>
                </nav>
            </header>

            <?php include'menu.php'; ?>
                <div class="content-wrapper">
                    <section class="content">
                        <?php
                if(isset($_GET['page']))
                {
                 switch($_GET['page'])
                {
                    case 'lihat_akun': include'lihat_akun.php'; break;
                    case 'tambah_barang': include'tambah_barang.php'; break;
                    case 'lihat_barang': include'lihat_barang.php'; break;
                    case 'lihat_member': include'lihat_member.php'; break;
                    case 'lihat_pemesanan': include'lihat_pemesanan.php'; break;
                    case 'pesanan_proses': include'pesanan_proses.php'; break;
                    case 'pesanan_selesai': include'pesanan_selesai.php'; break;
                }
                }
            ?>
                    </section>
                </div>
                  <div class="control-sidebar-bg"></div>
        </div>
        <script src="dist/js/app.min.js"></script>
    </body>
    </html>
