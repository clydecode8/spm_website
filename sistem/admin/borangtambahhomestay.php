<h2><u><b>LAMAN TAMBAH HOMESTAY</b></u></h2>
<h3><b><u>Sila Masukkan Data Homestay..</b></u></h3>
<form action="tambahhomestay.php" method="POST" autocomplete="off">
    <label>Kod Homestay</label><br>
	  <input type="text" name="kod" class="tambah" required><br><br>
	<label>Nama Homestay</label><br>
	  <input type="text" name="nama" class="tambah" required><br><br>
    <label>Jenis Homestay</label><br><br>
	  <select name="jenis" class="pilih-css">
	  <option>Homestay Persendirian</option>
	  <option>Homestay Pelancongan</option>
	  </select><br><br>
	<label>Harga per Hari</label><br>
	  <input type="number" name="harga" max="1000" min="1" class="tambah"><br><br>
    <label>Status</label><br>
	<select name="kodstatus" class="pilih-css">
<?php     
	 //Sambung ke PANGKALAN DATA
	 include 'config.php';
	 //Query
	 $query="select * from status";
	 $run=mysqli_query($connect,$query);
	 while($data=mysqli_fetch_array($run)){
	 $kstatus=$data['kodstatus'];
	 $status=$data['status'];
	 echo "<option value=$kstatus>$kstatus - $status</option>";
	 } ?>
      <input type="submit" name="tambah" value="TAMBAH" class="submittambah">
   </form>
<?php if(!empty($_POST['tambah'])){
   //Terima data dari borang
     $khome=$_POST['kod'];
     $namahome=$_POST['nama'];
     $jenishome=$_POST['jenis'];
	 $status=$_POST['kodstatus'];
     $hargahome=$_POST['harga'];
        $SQL = "INSERT INTO homestay(kodhomestay,kodstatus,namahomestay,hargahomestay,jenishomestay) VALUES ('$khome','$status','$namahome','$hargahome','$jenishome')";
   //Laksanakan
        $tambah=mysqli_query($connect,$SQL);
   if($tambah) {
	   echo "<script type='text/javascript'> window.alert('Tambahan Berjaya')
	         window.location = 'selenggara.php'</script>";
   }else{
	   echo "<script type='text/javascript'> window.alert('Tambahan tidak Berjaya')
	         window.location = 'selenggara.php'</script>";
	
 }
}
 ?>