<!DOCTYPE html>
<html>
<head>
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <header>
   <?php include 'header.php';?>
 </header>
 <nav>
   <?php include 'sidenav2.php';?>
 </nav>
 
 <section>
   <aside>
     <?php include 'navadmin.php';?>
   </aside>
   <article>
     <?php
	    //Ambil data dari URL
		  $id=$_GET['id'];
		//Sambung ke Pangkalan Data
		  include 'config.php';
		//Query Arahan Padam
		  $SQL = "DELETE FROM status where kodstatus='$id'";
		     if (mysqli_query($connect,$SQL)){
		         echo "<script type='text/javascript'> window.alert('Rekod Berjaya Dipadam!')
				       window.location = 'status.php'</script>";
		     }else{
			     echo "<script type='text/javascript'> window.alert('Rekod Gagal Dipadam!')
				       window.location = 'status.php'</script>";
			 }
		  mysqli_close($connect);
		  ?>
   </article>
 </section>
</body>
</html> 