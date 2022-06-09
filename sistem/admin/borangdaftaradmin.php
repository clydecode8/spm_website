<!--Bahagian Borang Input Admin-->
<div class="form-style">
<h2 id="daftaradmin">HALAMAN ADMIN</h2>
<h3><u>Sila melengkapkan informasi sebelum didaftarkan..</u></h3>
<form action= "" method="POST" autocomplete="off">
     <label><b>Nama Admin <span class="wajib">*</span></b></label>
	     <input type="text" name="nama" class="daftar2" required><br><br>
	 <label><b>Emel <span class="wajib">*</span></b></label>
	     <input type="email" name="emel" class="daftar2" required><br><br>
	 <label>Kata laluan <span class="wajib">*</span></b></label>
	     <input type="password" name="pswd" class="daftar2" required><br><br>
	 <label>No. Telefon <span class="wajib">*</span></b></label>
	     <input type="tel" name="notel" class="daftar2" pattern="[0-9]{3}-[0-9]{7}"><br><br>
	     <input type="submit" name="daftar" class="submitdaftar2" value="DAFTAR">
</form>
<p><b>⚠ Pendaftaran Admin sebenar akan dilalui pengesahan sebelum didaftarkan ⚠</b></p>
</div>
<?php  if(!empty($_POST['daftar'])) {      
	  //Pengisytiharan Error
	   $error=0;	   	  
	  //Sambung ke Pangkalan Data ADMIN
       include 'config.php';	  	  
	  //Bahagian Proses Data
	    $nama=$_POST['nama'];
        $emel=$_POST['emel'];
        $pswd=$_POST['pswd'];
        $notel=$_POST['notel']; 
	  //Dapatkan Data Pengesahan ADMIN
	    $SQL="select * from pengesahanadmin where namaadmin='$nama' or emel='$emel'";
		$panggil=mysqli_query($connect,$SQL);
		$data=mysqli_fetch_array($panggil);
		$namasah=$data['namaadmin'];
		$emelsah=$data['emel'];	 		
	  //Query Semak
	    if($namasah === $nama || $emelsah === $emel){
			echo "<script type='text/javascript'> window.alert('Sila tunggu semakan ".$nama."')</script>";
			$error=1;
		}else if($error===0){
	  //Query jika ERROR = 0
		    $query = "INSERT INTO pengesahanadmin(emel,namaadmin,katalaluan,notel) VALUES ('$emel','$nama','$pswd','$notel')";
	        $run = mysqli_query($connect,$query);  
	  //Dialog Daftar Berjaya
	    if($run){
		    echo "<script type='text/javascript'> window.alert('Pendaftaran telah dihantar. Sila menunggu semakan admin.')</script>";
		    echo "<script type='text/javascript'> window.location.replace('daftaradmin.php')</script>";
	    }}else{
	  //Dialog Daftar Gagal  
		    echo "<script type='text/javascript'> window.alert('Pendaftaran Gagal, Sila cuba sekali')</script>";
	  }
   } 
?>    	 