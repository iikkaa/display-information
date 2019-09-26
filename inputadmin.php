<?php
include 'koneksi.php'

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <?php echo $_GET['kode'] ?>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">&nbsp;Learning Centre</a>
                </div>
               

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <img src="assets/img/logo.png" class="img-responsive" />
                     
                    </li>
                    <li class="active">
                        <a href="inputadmin.php?kode=<?= $_GET['kode'] ?>"><i class="fa fa-table "></i>Peserta </a>

                    </li>
                    <li>
                        <a href="adminrundown.php?kode=<?= $_GET['kode'] ?>"><i class="fa fa-table "></i>Rundown </a>
                        
                    </li>
                    <li>
                        <a href="adminfoto.php?kode=<?= $_GET['kode'] ?>"><i class="fa fa-table "></i>Foto Kegiatan </a>
                    </li>
                    <li>
                        <a href="admin.php"><i class="fa "></i>Back</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Pelatihan</h2>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div>
                        <h5 align="Centre">Daftar Peserta</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th>NPK</th>
                                    <th>Nama</th>
                                    <th>Unit Kerja</th>
                                    <th>Jam Absen</th>
                                </tr>
                            </thead>
                            <tbody>

                                 <?php
                                $query = mysqli_query ($conn, "SELECT peserta.npk, peserta.nama, peserta.unit_kerja FROM pelatihan JOIN peserta ON pelatihan.kd_pelatihan=peserta.kd_pelatihan AND pelatihan.kd_pelatihan=".$_GET['kode']."");
                                 while($data = mysqli_fetch_array ($query)) {
                                    
                                 ?>

                                <tr>
                                    <td><?php echo $data['npk']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['unit_kerja']; ?></td>
                                    <td><?php echo $data['jam_absen']; ?></td>
                                </tr>
                                
                            </tbody>
                            <?php } ?>
                        </table>

                    </div>


                     <div>
                    


                    <!--tombol-->
                
                <!-- /. ROW  -->
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
