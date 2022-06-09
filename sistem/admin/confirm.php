<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
     td.confirmtempahan {
	  background-color: #ECF7FD;
	  padding: 10px;
      border: 2px solid black;
  }
  
  td.confirmtempahan2 {
	  background-color: lightgray;
	  padding: 10px;
	  border: 2px solid black;
  }
  
    .tempah {
	  background-color: #A9D171;
	  padding: 20px 35px;
	  color: black;
	  font-size: 16px;
	  margin: 50px;
  }
  
  .cancel {
	  padding: 20px 35px;
	  background-color: #FF3E4B;
	  color: black;
	  font-size: 16px;	
      margin: 50px;	  
  }
  
  .tempah:hover {
	  background-color: #90B759;
  }
  
  .cancel:hover {
	  background-color: #E71837;
  }
</style>
<body onbeforeunload="return amaranKembali()">
 <header>
   <?php include 'header.php';?>
 </header>
 <nav>
   <?php include 'sidenav2.php';?>
 </nav>
 
 <section>
   <aside>
     <?php include 'nav2.php';?>
   </aside>
   <article>
     <h2><u><b>Sila Semak Tempahan Tersebut..</u></b></h2>
	 <?php   

	   //Ambil data dari Borang Tempahan
	      $harga=$_SESSION['hargasehari'];
		  $jumharga=$_SESSION['hargatempah'];
	      $jumhari=$_SESSION['bilharitempah'];
	      $tarikhmula=$_SESSION['tmasuktempah'];
	      $tarikhakhir=$_SESSION['tkeluartempah'];
		  $kodtempahan=$_SESSION['kodtempah'];
		  $kodhome=$_SESSION['kodhome'];
		  $namahome=$_SESSION['namahome'];
		  $emel=$_SESSION['emel'];
		  $nama=$_SESSION['nama'];
	 
       //Papar Jadual Tempahan Pengguna   
	     echo "<table class='confirm border='3'>";
	     echo "<tr><td class='confirmtempahan2'>Kod Tempahan:</td><td class='confirmtempahan'>$kodtempahan</td></tr>
		       <tr><td class='confirmtempahan2'>Homestay :</td><td class='confirmtempahan'>$kodhome - $namahome</td></tr>
		       <tr><td class='confirmtempahan2'>Nama :</td><td class='confirmtempahan'>$nama ($emel)</td></tr>
		       <tr><td class='confirmtempahan2'>Tarikh masuk - Tarikh keluar :</td><td class='confirmtempahan'>$tarikhmula - $tarikhakhir</td></tr>
		       <tr><td class='confirmtempahan2'>Harga sehari :</td><td class='confirmtempahan'>RM$harga</td></tr>
		       <tr><td class='confirmtempahan2'>Jumlah hari :</td><td class='confirmtempahan'>$jumhari</td></tr>
		       <tr><td class='confirmtempahan2'>Jumlah harga :</td><td class='confirmtempahan'>RM$jumharga</td></tr>";               			   
	     echo "</table>";	 
	 ?>
		
	<!--Butang-->	
		<button class="tempah" onclick="window.location ='confirmtempahan.php';">CONFIRM</button>
        <button class="cancel" onclick="window.location ='canceltempahan.php';">CANCEL</button>	 
       
<script>
     function amaranKembali() {
	     return "..";
	 }
</script>	 
   </article>
 </section>
</body>
</html> 
    