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
                    <div>
                         <table  align="center">
                            
                                <tr>
                                     <td colspan="2"><b>INPUT FOTO</td>
                                </tr>
                                <tr>
                                    <td> </td>
                                </tr>
                                <hr/>
                                <tr>
                                <form action="uploadgambar.php" method="POST" enctype="multipart/form-data">
                                    <td>Desc:</td>
                                    <td><input type="text" name="desc_gambar"/>
                                    </td>

                                    <tr>
                                    <td>Foto :</td>
                                    <td><input type="file" name="file"></td>
                                    </tr>

                                    </tr>
                                    <tr align="center">
                                        <td colspan="2">
                                        <input type="submit" name="upload" value="Upload"/>
                                    </td>
                                    </tr>

                                </form>


                            </table>
                            <hr/>
                            <table class="table table-striped table-bordered table-hover" align="Centre">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Desc</th>
                                    <th>Foto</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>

                                

                                <?php
                                $query = mysqli_query ($conn, "SELECT * FROM foto" );
                                    $num = 0;
                                
                                 while($data = mysqli_fetch_array ($query)) {
                             
                                    $num++;
       
                                 ?>

                                <tr>
                                    <td><?php echo "$num" ; ?></td>
                                    <td><?php echo $data['deskripsi']; ?></td>
                                    <td><?php echo $data['file']; ?></td>
                                    <td>
                                        <a href="hapusfoto.php?id_gambar=<?php echo $data['id_gambar'] ?>">Hapus</a><br>
                                        
                                    </td>
                                    
                                    
                                    
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                            
                        
                        
                    </div>
                </div>


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
