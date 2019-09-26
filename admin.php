<?php

include 'koneksi.php';
?>



<html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></i>&nbsp;Learning Centre</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/logo.png" class="img-responsive" />
                     
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Pelatihan</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Agenda Pelatihan</h2>
                    </div>
                </div>
                
                <!-- /. ROW  -->
                
                <div class="row">
                        <h5></h5>
                        <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Pelatihan</th>
                                    <th>Desc. Pelatihan</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Selesai</th>
                                    <th>Instruktur</th>
                                    <th>Fasilitator</th>
                                    <th>No Hp Fasilitator</th>
                                    <th>Nama Lembaga</th>
                                    <th>Ruangan</th>
                                </tr>
                            
                            <tbody>
                            	

                            	<?php
                                $query = mysqli_query ($conn, "SELECT * FROM pelatihan");
                                 while($data = mysqli_fetch_array ($query)) {
                                	
                                 ?>

                                <tr>
                                    <td><?php echo $data['kd_pelatihan']; ?> </td>
                                    <td> <a href="inputadmin.php?kode=<?= $data['kd_pelatihan']; ?>"> <?php echo $data['judul']; ?> </a></td>
                                    <td><?php echo $data['desc_judul']; ?></td>
                                    <td><?php echo $data['tgl_mulai']; ?></td>
                                    <td><?php echo $data['tgl_selesai']; ?></td>
                                    <td><?php echo $data['instruktur']; ?></td>
                                    <td><?php echo $data['fasilitator']; ?></td>
                                    <td><?php echo $data['nohp_fasilitator']; ?></td>
                                    <td><?php echo $data['nama_lembaga']; ?></td>
                                    <td><?php echo $data['kd_ruangan']; ?></td>
                                </tr>
                           <?php } ?>
                        </table>

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