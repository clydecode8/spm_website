<?php session_start(); ?>
<!--Bahagian Borang Input Pengguna-->
<div class="form-style">
<h2 id="daftarh2"><u>Sila melengkapkan informasi sebelum didaftarkan..</u></h2>
<form action= "" method="POST" autocomplete="off">
     <label><b>Nama <span class="wajib">*</span></label></b>
	   <input type="text" class="daftar" name="nama" required><br><br>
	 <label><b>Emel <span class="wajib">*</span></label></b>
	   <input type="email" class="daftar" name="emel" required ><br><br>
	 <label><b>Kata laluan <span class="wajib">*</span></label></b>
	   <input type="password" class="daftar" name="katalaluan" required ><br><br>
	 <label><b>No. Telefon <span class="wajib">*</span></label></b>
	   <input type="tel" class="daftar" name="notel" pattern="[0-9]{3}-[0-9]{7}" title="000-0000000 dan Nombor Telefon Malaysia sahaja"><br><br>
	   <input type="submit" class="submitdaftar" name="daftar" value="DAFTAR">
</form>
</div>
<?php if(!empty($_POST['daftar'])) {
	//Pengisytiharan ERROR
	  $error=0;
	//Bahagian Proses Data
	  $namapengguna=$_POST['nama'];
      $pswd=$_POST['katalaluan'];
	  $emel=$_POST['emel'];
	  $notel=$_POST['notel'];	
	//Sambung ke Pangkalan Data
	  include 'config.php';	
	//Dapatkan Data Pengguna 
	  $semak = "select * from pengguna where emel='$emel' or namapengguna='$namapengguna'";
	  $cari = mysqli_query($connect,$semak);
	  $hasil=mysqli_fetch_array($cari);
	  $namasah=$hasil['namapengguna'];
	  $emelsah=$hasil['emel'];
    //Semakan Nama atau Emel yang digguna  
	  if($namapengguna === $namasah || $emel === $emelsah){
		    echo "<script type='text/javascript'> window.alert('Emel atau Nama telah digunapakai!')</script>";
            $error=1;			
    //Query jika ERROR = 0  
	  }else if($error===0){			
	       $query = "INSERT INTO pengguna(emel,namapengguna,katalaluan,notel) VALUES ('$emel','$namapengguna','$pswd','$notel')";
	       $run = mysqli_query($connect,$query); 	 
	 //Dialog Daftar Berjaya
	  if($run){
		 echo "<script type='text/javascript'> window.alert('Pendaftaran Berjaya')</script>";
		 echo "<script type='text/javascript'> window.location.replace('halamanutama.php')</script>";
		 $_SESSION['namapengguna']=$namapengguna;
	 //Dialog Daftar Gagal
	  }}else{
		 echo "<script type='text/javascript'> window.alert('Pendaftaran Gagal, Sila daftar semula')</script>";
	  }  		   
   }   
?>