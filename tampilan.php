<?php
include 'koneksi.php';
$tgl    =date("Y-m-d");

// Konversi tanggal ke bahasa indonesia
function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
    return($result);
}
    // while($c=mysqli_fetch_array($res)){
    //     echo format_indo($c['tanngal']).'<br>';
    // }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Information</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="assets/css/custom.css" rel="stylesheet" />
	 <meta http-equiv="refresh" content="8">
</head>
<body>

	<!-- star-home-heading-lembaga -->
	<div class="home-heading-lembaga">

    <?php

	$sql = "SELECT * FROM pelatihan WHERE (pelatihan.tgl_mulai <= '$tgl' and pelatihan.tgl_selesai >= '$tgl') and pelatihan.kd_ruangan='a2' ";
	$query = mysqli_query ($conn, $sql);
 	while($data = mysqli_fetch_array ($query)) {
 	?>

	<tr>
        <td>
        	<p align="center"><?php echo $data['nama_lembaga']; ?></p></td>                         
        </tr>
	</div>
	<!-- end-home-heading-lembaga -->


	<!-- star-home-heading -->
	<div class="home-heading">
		<table border="0" width="100%">
			<tr>
				<td width="10%">
					<div class="logo">
						<img src="img/logo2.png">
					</div>
				</td>
				<td width="10%">
					<div class="logo">
						<img src="img/logo.png">
					</div>
				</td>
				<td align="center" width="53%" >
					<!-- <img src="img/jam.png" width=30px align="center"> -->
					<h2> Aula A2</h2>
				</td>
				<td>
					<script type="text/javascript">
	 					window.onload = function() { jam(); }

	 					function jam() {
	  					var e = document.getElementById('jam'),
	  					d = new Date(), h, m, s;
	  					h = d.getHours();
	  					m = set(d.getMinutes());
	  					s = set(d.getSeconds());

	  					e.innerHTML = h +':'+ m +':'+ s;

	  					setTimeout('jam()', 1000);
	 					}

	 					function set(e) {
	  					e = e < 10 ? '0'+ e : e;
	  					return e;
	 					}
					</script>
					<h1 style="font-size: 20px; font-family: verdana;" id="jam" align="right"></h1>
				</td>
			</tr>
		</table>
	</div>
	<!-- end-home-heading -->
	
	
	<!-- star-home-body -->
	<div class="home-body">
		<div class="home-box">
			<div class="date-person">
				<div class="home-room">
					<div>
						<?php echo $data['judul']; ?></td>
					</div>
				</div>
				
				<!-- star-home-date -->
				<div class="home-date">
					<div class="home-tanggal shadow">
						<table border="0">
							<tr>
								<td>
									<img src="img/tgl.png" width="20px">
								</td>
								<td>
									<?php
									echo format_indo($data['tgl_mulai']).'<br>';
									?>
								</td>
								<td>
									<b> s.d
								</td>
								<td>
									<?php 
									echo format_indo($data['tgl_selesai']).'<br>';
									?>
								</td>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- end-home-date -->
			</div>
			<div class="home-person shadow">
				<table border="0" width="100%">
					<tr>
						<td>
							<div class="home-person-description">
								<h3><img src="img/user.png" width="20px">
								<?php echo $data['instruktur']; ?></h3>
								<p>Instruktur</p>
							</div>
						</td>
						<td>
							<div class="home-person-description">
								<h4><?php echo $data['fasilitator']; ?></h4>
								<h4><?php echo $data['nohp_fasilitator']; ?></h4>
								<p>Fasilitor</p>
							</div>
						</td>
					</tr>
				</table>
			</div>

		<div class="home-date">
			<div class="home-desc shadow start">
				<p align="center">Desc Pelatihan</p>
				<?php echo $data['desc_judul']; ?>
			</div>
		</div>

		<div class="home-slideshow">
			<table border="1">
				<tr>
					<td>
						<div class="container shadow">
							<div class="slideshow_wrapper">
								<div class="slideshow">
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
							    	<div class="slide slide">
							        	<img src="foto/contoh.png" />
							    	</div>
	    						</div>
	    					</div>
	    				</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<!-- end-home-body -->

			
		<div class="home-rundown">
			<div class="card">
				<div class="card-title"><span>Rundown</span></div>
				<div class="card-body">
					<div class="rundown">
						<?php
								$sql = "SELECT * FROM rundown WHERE rundown.tanggal='$tgl' and rundown.kd_pelatihan=" . $data['kd_pelatihan'] . " ORDER BY jam_mulai";
                                $query = mysqli_query ($conn, $sql );

                                // $query = mysqli_query($conn,)  
                                
                                 while($data1 = mysqli_fetch_array ($query)) {

                                 ?>

						<div class="rundown-time">
							<table border="0">
								<tr>
									<td>
										<?php echo $data1['jam_mulai'] ; ?>
									</td>
									<td>
										<b><font color="#FF963E">s.d</font></b>
									</td>
									<td>
										<?php echo $data1['jam_selesai'] ; ?>
									</td>
									<td> : </td>
									<td>
										<div class="rundown-title">
										<?php echo $data1 ['materi'] ; ?>
										</div>
									</td>
								</tr>
							</table>		
						</div>
						<hr>
						<?php } ?>
					</div>
				</div>
			</div>
			
		</div>

		<div class="home-box">
			<div class="card">
				<div class="card-title"><span>Peserta</span></div>
				<table class="table table-striped table-bordered table-hover" align="Centre" width="100%" >
                            <thead>
                                <tr bgcolor="#FFE4B5">

                                    <th>NPK</th>
                                    <th>Nama</th>
                                    <th>Unit Kerja</th>
                                    <th>Jam Absen</th>
                                </tr>
                            </thead>
                            <tbody>

                                

                                <?php
                                $sql = "SELECT peserta.npk, peserta.nama, peserta.unit_kerja, memiliki.jam_absen FROM peserta JOIN memiliki ON peserta.kd_pelatihan=memiliki.kd_pelatihan AND peserta.npk=memiliki.npk AND memiliki.tgl_pelatihan='$tgl' AND peserta.kd_pelatihan=" .$data['kd_pelatihan'] . " ORDER BY jam_absen DESC" ;
                                $query = mysqli_query($conn,$sql );
                                    // $num = 0;
                                 while($data2 = mysqli_fetch_array ($query)) {
                                    // $num++;    
                                 ?>
                                 
                                <tr bgcolor="#FFE4B5">
                                    
                                    <td><?php echo $data2['npk']; ?></td>
                                    <td><?php echo $data2['nama']; ?></td>
                                    <td><?php echo $data2['unit_kerja']; ?></td>
                                    <td><?php echo $data2['jam_absen']; ?></td>

                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <?php } ?>

                           
				<!-- <div class="card-body">
					<div class="participant">
						<div class="participant-single">
							<div>
								<h4>nama</h4>
								<p>jabatan ku</p>
							</div>
						</div>
						
					</div>
				</div> -->
			</div>
		</div>

	</div>
	<!-- <div class="container">
  <div class="slideshow_wrapper">
    <div class="slideshow">
      <div class="slide_one slide">
        <img src="gambar/gambar1.jpg" />
      </div>
      
      <div class="slide_two slide">
        <img src="gambar/gambar1.jpg" />
      </div>
      
       <div class="slide_three slide">
        <img src="gambar/gambar1.jpg" />
      </div>
    </div></div></div></div>
 -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function clock() {
          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("watch").innerHTML = Time;
          requestAnimationFrame(clock);
        }

        requestAnimationFrame(clock);
    });
</script>

</body>
</html>