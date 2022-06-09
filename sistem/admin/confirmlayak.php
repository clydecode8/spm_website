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
 </nav>
 
 <section>
   <aside>
     <?php include 'nav2.php';?>
   </aside>
   <article>
     <?php		  
	  //Sambung ke Pangkalan Data
		include 'config.php';
	   //Ambil data dari URL
		 $id=$_GET['id'];	    
	  //Query
		$SQL = "select * from pengesahanadmin where emel='$id'";
	    $run=mysqli_query($connect,$SQL);
		$data=mysqli_fetch_array($run);
		$emeladmin=$data['emel'];
		$namaadmin=$data['namaadmin'];
		$pswdadmin=$data['katalaluan'];
	    $notel=$data['notel'];
	    if($data){
		   $INSERT="Insert into admin(emel,namaadmin,katalaluan,notel) VALUES('$emeladmin','$namaadmin','$pswdadmin','$notel')";
           $run2=mysqli_query($connect,$INSERT);
           if($run2){
              $PADAM="Delete from pengesahanadmin where emel='$id'";
			  if(mysqli_query($connect,$PADAM)){		 
			     echo "<script type='text/javascript'> window.alert('Rekod Berjaya Ditambah!')
			            window.location = 'admin.php' </script>";
		      }}}else{
			     echo "<script type='text/javascript'> window.alert('Rekod Tidak Berjaya Ditambah.')
			           window.location = 'admin.php' </script>";
		  	  }
		  mysqli_close($connect);
	  ?>	  
   </article>
 </section>
</body>
</html> 
    