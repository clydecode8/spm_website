<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <header>
   <?php include 'header.php';?>
 </header>
 <nav>
   <?php include 'sidenav2.php';?>
 </nav
 
 <section>
   <aside>
     <?php include 'nav2.php';?>
   </aside>
   <article>
     <?php
	   //Ambil data dari SESSION
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
		 
	   //Sambung ke Pangkalan Data
		 include 'config.php';
	   //Query Arahan Padam
		$SQL = "Delete from tempahan where kodtempahan='$kodtempahan' and bilanganhari='$i' and jumbayaran='$i' and tarikhmasuk='$tarikhmula' and tarikhkeluar='$tarikhakhir'";
		if (mysqli_query($connect,$SQL)){
	       echo "<script type=text/javascript> window.alert('Tempahan telah dibatal!')
		        window.location = 'cari.php'</script>";
	   }else{
		   echo "<script type=text/javascript> window.alert('Masalah telah ditimbul..Sila hubungi ADMIN.')
		        window.location = 'cari.php'</script>";
	  }
	   mysqli_close($connect);
	?>
   </article>
 </section>
</body>
</html>