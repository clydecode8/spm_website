<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
     <h2><u><b>LAMAN ADMIN</u></b></h2>
	 <h3><u>JADUAL MENU ADMIN</u></h3> 
       <table border="2" class="pilihan">
	   <tr>
	      <th colspan="2" class="special">MENU ADMIN</th>
       </tr>
	   <tr align="center">
	   	  <th class="pilihanth"><button class="btnsemak" onclick="window.location.href='semak.php'"><i class='fas fa-search'></i> SEMAKAN TEMPAHAN</button></th>
		  <th class="pilihanth"><button class="btnstatus" onclick="window.location.href='status.php'"><i class='fas fa-info'></i> SELENGGARA STATUS</button></th>		
       </tr>
	    <tr align="center"> 
          <td><button class="btnhomestay" onclick="window.location.href='selenggara.php'"><i class='fas fa-house-user'></i> SELENGGARA HOMESTAY</button></td>
          <td><button class="btnimport" onclick="window.location.href='import.php'"><i class='fas fa-file-import'></i> IMPORT HOMESTAY</button></td>		  
		</tr>
		<tr align="center">
          <td colspan="2"><button class="btnadmin" onclick="window.location.href='admin.php'"><i class='fas fa-user'></i> SENARAI ADMIN</button></td>
		</tr>
	   </table>
   </article>
 </section>
</body>
</html> 
    

    