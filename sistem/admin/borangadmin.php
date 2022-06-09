<h2><b><u>LAMAN SENARAI ADMIN</b></u><h2>
<h3><b><u>Senarai Pengesahan Admin</u></b></h3>
<table border="3"><tr><th class="adminth">Nama</th><th class="adminth">Emel</th><th class="adminth">No.tel</th><th class="adminth">Kelayakan</th></tr>
<?php
   //Sambung ke Pangkalan Data
     include 'config.php';
   //Query
     $SQL="select * from pengesahanadmin";
   //Semakan
     $run=mysqli_query($connect,$SQL);
   //Panggil  
	 while($data=mysqli_fetch_array($run)){
	 $namaadmin=$data['namaadmin'];
	 $emeladmin=$data['emel'];
	 $notel=$data['notel']; 
   //Jadual     
     echo "<tr><td class='admintd'>$namaadmin</td><td class='admintd'>$emeladmin</td><td class='admintd'>$notel</td>
	       <td class='admintd'><a href='confirmlayak.php?id=".$emeladmin."'>LAYAK</a> // <a href='deletelayak.php?id=".$emeladmin."'>TIDAK LAYAK</a></td></tr>";
	 }
?>
</table><br><br>
<p><b><u>Senarai Admin</u></b></p>
<table border="2"><tr><th class="adminth">Nama</th><th class="adminth">Emel</th><th class="adminth">No.tel</th></tr>
<?php
   //Sambung ke Pangkalan Data
     include 'config.php';
   //Query
     $SQL="select * from admin";
   //Semakan
     $run=mysqli_query($connect,$SQL);
   //Panggil  
	 while($data=mysqli_fetch_array($run)){
	 $namaadmin=$data['namaadmin'];
	 $emeladmin=$data['emel'];
	 $notel=$data['notel']; 
   //Jadual     
	 echo "<tr class='admintd'><td class='admintd'>$namaadmin</td><td class='admintd'>$emeladmin</td><td class='admintd'>$notel</td></tr>";
	 }
?>
</table>