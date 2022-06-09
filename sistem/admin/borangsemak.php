<!--Bahagian Pertama : Borang-->
<?php if(empty($_POST['semak'])) { ?>
<div class="semakan">
<h2><u>LAMAN SEMAKAN TEMPAHAN</u></h2>
<h3><b><u>Sila Masukkan tarikh..</b></u></h3>
<form action="" method="POST">
      <label><b><u>Masuk Tarikh Mula</b></u></label><br><br>
        <input type="date" name="tmula" class="semak"><br><br>
	  <label><b><u>Masuk Tarikh Akhir</b></u></label><br><br>
	    <input type="date" name="takhir" class="semak"><br><br>
	    <input type="submit" name="semak" value="SEMAK" class="submitsemak">
</form>
</div>
<!--Bahagian Kedua: Pemprosesan Data-->
<?php }else{
	//Pindahkan DATA secara POST ke sini
	  $tmula=$_POST['tmula'];
	  $takhir=$_POST['takhir'];
	//Sambung ke Pangkalan Data
	  include 'config.php';
	//Papar Jadual Tempahan
      echo "<table border='1' class='style-semak'><tr><th>Bil</th><th>Kod Tempahan</th><th>Kod Homestay</th><th>Emel Pengguna</th><th>Pengguna</th>
	                          <th>Tarikh Masuk</th><th>Tarikh keluar</th><th>Bil Hari</th><th>Jum. Bayaran</th><th>Selenggara</th></tr>";
	//Query
	 $SQL = "select * ,DAY(tempahan.tarikhmasuk), DAY(tempahan.tarikhkeluar) from pengguna inner join tempahan on pengguna.emel = tempahan.emel inner join homestay on homestay.kodhomestay = tempahan.kodhomestay where tarikhmasuk BETWEEN '$tmula' AND '$takhir' OR tarikhkeluar BETWEEN '$tmula' AND '$takhir' order by tempahan.tarikhmasuk";
    //Pembilang
	  $i=0;
	//Query Semak
  	  $semak=mysqli_query($connect,$SQL);
	  echo "<h3><u>Jadual Tempahan - Dari $tmula hingga $takhir</u></h3>";
      while($hasil=mysqli_fetch_array($semak)){
		    $kodtempahan=$hasil['kodtempahan'];
	        $mula=$hasil['tarikhmasuk'];
	        $akhir=$hasil['tarikhkeluar'];
		    $nama=$hasil['namapengguna'];
		    $emel=$hasil['emel'];
		    $kodhomestay=$hasil['kodhomestay'];
		    $harga=$hasil['hargahomestay'];
	//Tambah Jumlah Hari
      $jumhari=($hasil['DAY(tempahan.tarikhkeluar)']-$hasil['DAY(tempahan.tarikhmasuk)']);
	//Tambah Jumlah Harga
      $jumharga=$harga*$jumhari;
	  $i++;
	  echo "<tr><td>$i</td><td>$kodtempahan</td><td>$kodhomestay</td><td>$emel</td><td>$nama</td><td>$mula</td><td>$akhir</td><td>$jumhari</td>
	        <td>RM$jumharga</td><td><a href='deletetempahan.php?id=".$kodtempahan."'>PADAM</a></td></tr>";
	  } 
	  mysqli_close($connect);
  } 
?>	
</table>			 
