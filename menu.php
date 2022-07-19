<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	 <title>PDAM Tirtanadi Cabang Cemara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
<script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<body onload="startTime()">

		<div id="contentWrapper">
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/menara.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/kyy.jpg);"></div>
	  			<center><a style="font-size: 20px; color:white">Halo, <?php echo $_SESSION['nama']?></a></center>
 <br>

	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          
          <li class="active">
           
           <li class="clickable">
                <a href="#"><i class="fa fa-desktop leftNavIcon"></i> Dashboard</a>
            </li>

             <?php
             $level = $_SESSION['level'] == 'pegawai';
              $level = $_SESSION['level'] == 'user';

                         
                       
                        
                        if($level){
?>

           <li class="clickable">
                <a href="beranda1.php"><i class="fa fa-home leftNavIcon"></i> Beranda</a>
            </li>

          <li>
                <a href="#pageprofil" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university leftNavIcon"></span> Profil</a>
                <ul class="collapse list-unstyled" id="pageprofil">
                <li>
                      <a href="sejarah.php"><span class="fa fa-angle-right leftNavIcon"></span> Sejarah Perusahaan</a>
                </li>
                <li>
                     <a href="Visi.php"><span class="fa fa-angle-right leftNavIcon"></span> Visi Dan Misi </a>
                </li>
            
              </ul>
            </li>

 <li>
                <a href="#pageSubpel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="far fa-clipboard leftNavIcon"></span> Pelanggan</a>
                <ul class="collapse list-unstyled" id="pageSubpel">
                <li>
                          <a href="tampil_data_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Penanganan</a>
                </li>

                <li>
                     <a href="input_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Keluhan Pengaduan</a>
                </li>
            </ul>
            
            <?php
        }else{
          ?>

<li class="clickable">
                <a href="beranda.php"><i class="fa fa-home leftNavIcon"></i> Beranda</a>
            </li>


              <li>
                <a href="#pageprofil" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-university leftNavIcon"></span> Profil</a>
                <ul class="collapse list-unstyled" id="pageprofil">
                <li>
                      <a href="sejarah1.php"><span class="fa fa-angle-right leftNavIcon"></span> Sejarah Perusahaan</a>
                </li>
                <li>
                     <a href="visi1.php"><span class="fa fa-angle-right leftNavIcon"></span> Visi Dan Misi </a>
                </li>
            
              </ul>
            </li>

<li>
                <a href="#pagepeg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-pencil-square-o leftNavIcon"></span> Pegawai</a>
                <ul class="collapse list-unstyled" id="pagepeg">
                <li>
                      <a href="input_data_pegawai.php"><i class="fa fa-angle-right leftNavIcon"></i> Tambah Data</a>
                </li>
                <li>
                      <a href="tampil_data_pegawai.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Pegawai</a>
                </li>
            
              </ul>
            </li>

<li>
                <a href="#pagepel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="far fa-clipboard leftNavIcon"></span> Pelanggan</a>
                <ul class="collapse list-unstyled" id="pagepel">
                <li>
                        <a href="input_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Tambah Penanganan</a>
                </li>
                <li>
                         <a href="tampil_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Penanganan</a>
                </li>
            <li>
                      
                        <a href="tampil_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Data Pengaduan</a>
                </li>

              </ul>
            </li>


<li>
                <a href="#pagelap" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-book leftNavIcon"></span> Laporan</a>
                <ul class="collapse list-unstyled" id="pagelap">
                
                <li>
                             <a href="cetak_pengaduan.php"><i class="fa fa-angle-right leftNavIcon"></i> Keluhan Pelanggan</a>
                </li>
            <li>
                      
                        <a href="cetak_penanganan.php"><i class="fa fa-angle-right leftNavIcon"></i> Penanganan</a>
                </li>
            
              </ul>
            </li>

 <?php
        }
        ?>
      
            </li>
            <li class="clickable">
                <a href="logout.php"><i class="fa fa-power-off leftNavIcon"></i> Logout</a>
            </li>
        </li>

        <br>
                  <center>
                  
<div style ="color: white; font-family:Zapf-Chancery; font-size: 22px;
                    <h4 class="profile-desc-title">Informasi Waktu</h4><br>
                        <span class="profile-desc-text"> <?php echo date('l, d-m-Y');?></span>
                        <div id="txt" class="profile-desc-title"></div>
                                                    </li>
        </ul>

    	</nav>
 <div id="content" class="p-4 p-md-5 pt-5">
   <marquee bgcolor="white" style=" font-family:Zapf-Chancery; color: blue; font-size:x-large;transform: translate(-6.34%, 525%)"; width=735px; title="Ini Muncul Saat Hover" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right" >Selamat Datang, Di Sistem  Pengaduan Pelanggan Pdam Tirtanadi Cabang Cemara</a></marquee>



</div>

            <br>
       

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>