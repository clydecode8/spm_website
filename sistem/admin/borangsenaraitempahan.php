<!--Bahagian Borang-->
<?php if(empty($_POST['carian'])){ ?>
<h3><b><u>LAMAN SEMAK TEMPAHAN</b></u></h3>
<div class="style-senaraitempahan">
<form action="" method="POST" autocomplete="off">
	  <label><b><u>Masukkan emel anda..</u></label><br><br>
	    <input type="email" name="emel" class="listtempahan"><br><br>
      <label><b><u>Masukkan tarikh tempahan..</u></b></label><br><br>
	  <label><b>Tarikh Masuk &ensp;</b></label>
	  	<input type="date" name="tmula" class="listtempahan2"><br><br>
      <label><b>Tarikh Keluar &nbsp;</b></label>
		<input type="date" name="takhir" class="listtempahan2"><br>
	    <input type="submit" name="carian" value="SEMAK" class="submitcari"><br>
</form>
</div>
<!--Bahagian Pemprosesan data CARIAN-->
<?php }else{
    //Pembilang
	  $i=0;
	//Pindahkan DATA secara POST ke sini
	  $emel=$_POST['emel'];
	  $mula=$_POST['tmula'];
	  $akhir=$_POST['takhir'];
	//Sambung ke PANGKALAN DATA
	  include 'config.php';
	//Query untuk <h3>
	$query = "select namapengguna from pengguna where emel='$emel'";
	$cari=mysqli_query($connect,$query);
	$hasil=mysqli_fetch_array($cari);
	$namauser=$hasil['namapengguna'];
	//Echo <h3>
	echo "<h3><u><b>Senarai tempahan $namauser</b></u></h3>";
	//Query
	  $SQL = "SELECT * ,DAY(tempahan.tarikhmasuk), DAY(tempahan.tarikhkeluar) from pengguna inner join tempahan on pengguna.emel = tempahan.emel inner join homestay on homestay.kodhomestay = tempahan.kodhomestay where tarikhmasuk BETWEEN '$mula' AND '$akhir' OR tarikhkeluar BETWEEN '$mula' AND '$akhir'";
	  $panggil=mysqli_query($connect,$SQL);
	//Panggil Data PENGGUNA
      while($data=mysqli_fetch_array($panggil)){
	    $nama=$data['namapengguna'];
	    $notel=$data['notel'];
	    $kodhomestay=$data['kodhomestay'];
	    $namahomestay=$data['namahomestay'];
	    $jenis=$data['jenishomestay'];
	    $harga=$data['hargahomestay'];
		$kodtempahan=$data['kodtempahan'];
	    $tmasuk=$data['tarikhmasuk'];
		$tkeluar=$data['tarikhkeluar'];
		$jumhari=($data['DAY(tempahan.tarikhkeluar)'])-($data['DAY(tempahan.tarikhmasuk)']);
		$jumbayaran=$jumhari*$harga;
		$i++;
		echo "<table border='2'><br>";
		echo "<tr><td id='style-cari'>Tempahan :</td><td id='style-cari2'>$i</td></tr>
		      <tr><td id='style-cari'>Kod Tempahan :</td><td id='style-cari2'>$kodtempahan</td></tr>
		      <tr><td id='style-cari'>Nama :</td><td id='style-cari2'>$nama - ($notel)</td></tr>
			  <tr><td id='style-cari'>Kod Homestay :</td><td id='style-cari2'>$kodhomestay</td></tr>
			  <tr><td id='style-cari'>Nama dan Jenis :</td><td id='style-cari2'>$namahomestay - ($jenis)</td></tr>
			  <tr><td id='style-cari'>Tarikh Masuk dan Keluar :</td><td id='style-cari2'>$tmasuk - $tkeluar</td></tr>
			  <tr><td id='style-cari'>Bilangan Hari Ditempah :</td><td id='style-cari2'>$jumhari</td></tr>
			  <tr><td id='style-cari'>Harga per Hari :</td><td id='style-cari2'>$harga</td></tr>
			  <tr><td id='style-cari'>Jumlah bayaran :</td><td id='style-cari2'>$jumbayaran</td></tr>";
	    echo "</table>";
	  }
	mysqli_close($connect);
			echo "<button class='fungsitempahan' onclick='fungsiCetak()'>CETAK</button>";
		echo "<button class='fungsitempahan2' onclick='fungsiKembali()'>KEMBALI</button>";
  }
?>	
<!-- Fungsi Cetak dan Halaman Sebelum-->	
<script type="text/javascript">	
	  function fungsiCetak() {
		  window.print();
	  }
	  
	  function fungsiKembali() {
		  window.location = "senaraitempahan.php";
	  }
</script>	