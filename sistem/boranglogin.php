<?php session_start(); ?>
<!--Bahagian Borang Input Pengguna-->
<?php if(empty($_POST['login'])){?>
<div class="form-style">
<h2 id="loginh2"><u>Login Pelanggan</h2></u>
  <form action="" method="POST" autocomplete="off">
      <label><b>Nama</b></label>
	    <input type="text" class="login" name="nama"><br><br>
	  <label><b>Emel</b></label>
	    <input type="email" class="login" name="emel"><br><br>
	  <label><b>Katalaluan</b></label>
	    <input type="password" class="login" name="pswd"><br><br>
	    <input type="submit" class="submitlogin" name="login" value="LOG MASUK">
  </form>
<p>Jika belum mendaftar, Sila klik <a href="daftar.php">DI SINI</a>.</p>
</div>
<?php }else{
	//Bahagian Proses Data
     $emel=$_POST['emel'];
     $pswd=$_POST['pswd'];
     $nama=$_POST['nama']; 
	//Sambung fail ke DATABASE
     include 'config.php';
	 
	//Query
	 $query="select * from pengguna where '$emel'=emel AND '$pswd'=katalaluan AND '$nama'=namapengguna";	
	//Laksanakan Query
	 $run=mysqli_query($connect,$query);		
	//Panggil Data
	 $data=mysqli_fetch_array($run);
	 $namapengguna=$data['namapengguna'];

	//Dialog Login Berjaya
	 if($data>0){
	   echo "<script type='text/javascript'> window.alert('Login Berjaya, selamat datang ".$namapengguna."!')</script>";
	     echo "<script type='text/javascript'> window.location.replace('halamanutama.php')</script>";
		   $_SESSION['namapengguna']=$namapengguna;
	//Dialog Login Gagal
	 }else{
	    echo "<script type='text/javascript'> window.alert('Login tidak berjaya. Sila cuba sekali lagi.')</script>";
		  echo "<script type='text/javascript'> window.location.replace('logmasuk.php')</script>";
	 }
	 mysqli_close($connect);
   } 
 ?>	

	
	 