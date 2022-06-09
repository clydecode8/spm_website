<?php session_start(); ?>
<!--Bahagian Pertama : Borang-->
<?php if(empty($_POST['loginadmin'])) { ?>
<div class="form-style">
<h2>HALAMAN ADMIN</h2>
<h3><u>Login Admin</u></h3>
<form action="" method="POST" autocomplete="off">
    <label><b>Nama</b></label>
	   <input type="text" class="login2" name="nama"><br><br> 
    <label><b>Emel</b></label>
	  <input type="email" class="login2" name="emel"><br><br>
	<label><b>Katalaluan</b></label>
	  <input type="password" class="login2" name="pswd"><br><br>
      <input type="submit" name="loginadmin" class="submitlogin2" value="LOG MASUK">
</form>
<p> ⚠ Hanya admin dibenarkan akses dihalaman ini ⚠ </p>
</div>
<?php }else{	
   //Pindahkan data secara POST ke sini
     $emel=$_POST['emel'];
	 $nama=$_POST['nama'];
     $pswd=$_POST['pswd'];
	 
   //Sambung ke Pangkalan Data
     include 'config.php';
   //Query
     $SQL="select * from admin where '$emel'=emel AND '$pswd'=katalaluan AND '$nama'=namaadmin";
   //Semakan
     $run=mysqli_query($connect,$SQL);
   //Panggil  
	 $data=mysqli_fetch_array($run);
	 $namaadmin=$data['namaadmin'];
   //Dialog hasil login        
    if($data>0){
	   echo "<script type='text/javascript'> window.alert('Selamat Datang Admin ".$namaadmin."')</script>";  
		   echo "<script type='text/javascript'> window.location.replace('halamanutamaadmin.php') </script>";
		      $_SESSION['admin']=$namaadmin;
	 }else{
	   echo "<script type='text/javascript'> window.alert('Login tidak Berjaya')</script>";  
		   echo "<script type='text/javascript'> window.location.replace('loginadmin.php') </script>";
		   
   }
	   mysqli_close($connect);
} 
?>