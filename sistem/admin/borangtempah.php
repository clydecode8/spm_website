<!--Bahagian Borang-->
<div class="pilih-tempahan">
<h2><u><b>LAMAN TEMPAHAN</b></u></h2>
<form action= "" method="POST" autocomplete="off">
     <label><b><u>Sila pilih homestay..</u></b></label><br><br>
	 <select class="pilih-css" name="kodhomestay">	     
<?php  	 //Sambung ke PANGKALAN DATA
	     include 'config.php';
         $SQL = "select * from homestay where kodstatus='S001'";
	     $query=mysqli_query($connect,$SQL);
	     while($cari=mysqli_fetch_array($query)){
 	     $kodhomestay=$cari['kodhomestay'];
	     $harga=$cari['hargahomestay'];
	     $nama=$cari['namahomestay'];
		 echo "<option value='$kodhomestay'>$kodhomestay - $nama (RM$harga)</option>"; 
     } 
?>
     </select><br><br>
	  <label><b><u>Masukkan tarikh mula dan tarikh akhir..</u></b></label><br><br>
	    Tarikh masuk  &ensp; <input type="date" name="tmula" class="tempahan2"><br><br>
	    Tarikh akhir  &emsp; <input type="date" name="takhir" class="tempahan2"><br><br>
	  <label><b><u>Masukkan emel dan nama pengguna serta notelefon anda..</u></b></label><br><br>
	    Nama  &emsp; &emsp;  <input type="text" name="nama" class="tempahan"><br><br>
	    Emel  &emsp; &emsp; &nbsp;<input type="email" name="emel" class="tempahan"><br><br>
	    Notelefon  &ensp; <input type="text" name="notel" placeholder="0123456789" class="tempahan"><br><br>
	  <input type="submit" name="tempah" class="submittempahan" value="TEMPAH">
</form>
 </div>
<!--Bahagian Pemprosesan Data-->
<?php if(!empty($_POST['tempah'])){ 
	 $i=1;
	 //Pindahkan data secara POST
	    $tmula=$_POST['tmula'];
	    $takhir=$_POST['takhir'];
	    $nama=$_POST['nama'];
	    $emel=$_POST['emel'];
	    $notel=$_POST['notel'];
		$kod=$_POST['kodhomestay'];
     
 //Query yang ambil Kod / buat Kod     
		 //Query Kodhomestay
	       $query = "select * from homestay where kodhomestay='$kod'";
		   $carihomestay=mysqli_query($connect,$query);
		   $datahomestay=mysqli_fetch_array($carihomestay);
		   $kodhome=$datahomestay['kodhomestay'];
		   $harga=$datahomestay['hargahomestay'];
		   $namahome=$datahomestay['namahomestay'];
	    
	     //Query buat KodTempahan	
	     	$query2 = "SELECT kodtempahan FROM tempahan ORDER BY kodtempahan DESC LIMIT 1";
	     	$carikod=mysqli_query($connect,$query2);
	     	$datakod=mysqli_fetch_array($carikod);
	     	$ktempah=$datakod['kodtempahan'];
	     	
	     //Pisah Nombor KodTempahan (K002 - 2)
            $kodnombor=preg_replace('/[^0-9]/', '', $ktempah);
	     	$kodnomborbaru=$kodnombor+1;
	     	$ktempahofficial= "K00$kodnomborbaru";
		 
		 //Query Semak Tempahan
		    $semak="select * from tempahan where tarikhmasuk = '$tmula' and kodhomestay = '$kod'";
			$semaktarikh=mysqli_query($connect,$semak);
			$datatarikh=mysqli_fetch_array($semaktarikh);
			$semakmula=$datatarikh['tarikhmasuk'];
			if ($semakmula == $tmula){
				$error=1;
				echo "<script type='text/javascript'> window.alert('Maaf, tarikh telah ditempah.')</script>";
			}else{
				
	  //Query Insert
		$SQL = "Insert into tempahan(kodtempahan,kodhomestay,emel,tarikhmasuk,tarikhkeluar,bilanganhari,jumbayaran) 
		        values('$ktempahofficial','$kodhome','$emel','$tmula','$takhir','$i','$i')";
	    $hasil=mysqli_query($connect,$SQL);
        if($hasil){ 
		     $error=0; 
		}else{ 
		     $error=1; 
		}

       //Query jika ERROR=0
 	    if($error===0){
	       $SQL2 = "select * ,DAY(tempahan.tarikhmasuk), DAY(tempahan.tarikhkeluar) from tempahan where tarikhmasuk between '$tmula' and '$takhir' or tarikhkeluar 
		            between '$tmula' and '$takhir'";
	       $hasil2=mysqli_query($connect,$SQL2);
	       $data=mysqli_fetch_array($hasil2);		  
		   $tarikhmula=$data['tarikhmasuk'];
	       $tarikhakhir=$data['tarikhkeluar'];
	       $jumhari=($data['DAY(tempahan.tarikhkeluar)']-$data['DAY(tempahan.tarikhmasuk)']);
	       $jumharga=$jumhari*$harga;
           $kodtempahan=$data['kodtempahan'];	
		 //Dialog Berjaya  
			  echo "<script type='text/javascript'> window.alert('Sila semak tempahan anda.')</script>";
  		      echo "<script type='text/javascript'> window.location.replace('confirm.php')</script>";
		 
		 //Pengisytiharan SESSION untuk Halaman seterusnya
	      $_SESSION['hargasehari']=$harga;
		  $_SESSION['hargatempah']=$jumharga;
	      $_SESSION['bilharitempah']=$jumhari;
	      $_SESSION['tmasuktempah']=$tarikhmula;
	      $_SESSION['tkeluartempah']=$tarikhakhir;
		  $_SESSION['kodtempah']=$kodtempahan;
		  $_SESSION['kodhome']=$kodhome;
		  $_SESSION['namahome']=$namahome;
		  $_SESSION['emel']=$emel;
		  $_SESSION['nama']=$nama;
		  $_SESSION['pembilang']=$i;

		}else{
		  //Dialog Gagal
		    echo "<script type='text/javascript'> window.alert('Tempahan tidak berjaya')</script>";
		    echo "<script type='text/javascript'> window.location.replace('tempahan.php')</script>";
		}
	   
	  }
     }
?>	