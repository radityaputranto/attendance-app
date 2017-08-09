<?php 

//session_start();
require_once "config.php";
require_once "pages/header.php";

 ?>

 	<!-- cek login -->
 	<?php //if (isset($_SESSION['is_logged'])): ?>
 	



 	<!-- akhir cek login -->
 	<?php //endif ?>

 	<!-- menampilkan halaman -->
    <?php //include_once "pages/data_pegawai.php"; ?>
    <?php include_once "pages/" . $page . ".php"; ?>
        
 <?php 

 	require_once "pages/footer.php";
  ?>