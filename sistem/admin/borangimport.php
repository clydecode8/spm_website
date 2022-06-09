<!--Bahagian Borang upload-->
<h2><b><u>LAMAN KEMUDAHAN IMPORT HOMESTAY</b></u><h2>
<h3><b><u>Fail Jenis CSV Diterima Sahaja..</u></b></h3>
<form action="" method="POST" name="upload_excel" enctype="multipart/form-data">
	<label><u>FAIL CSV</u></label><br><br>
	  <input type="file" name="file" id="file" class="import"><br><br>
	  <input type="submit" name="import" value="IMPORT" class="submitimport">
</form>
<!--Bahagian Pemporsesan Import-->
<?php if(!empty($_POST['import'])){
	//Terima kiriman fail dari Borang Import
	  $faildata=$_FILES['file']['tmp_name'];
	//Semak Jenis Fail 
	  $failext = pathinfo($faildata);
	        $bukafail=fopen($faildata, "r");
	//Pembukaan Data yang Disimpan
	       while(($GETdata = fgetcsv($bukafail,1000,",")) !== FALSE){
	//Sambung ke Pangkalan Data
	       include 'config.php';
	//Query masukkan data
	       $SQL = "insert into homestay (kodhomestay,kodstatus,namahomestay,jenishomestay,hargahomestay) 
		           VALUES ('".$GETdata[0]."','".$GETdata[1]."','".$GETdata[2]."','".$GETdata[3]."','".$GETdata[4]."')";
	       $simpan=mysqli_query($connect,$SQL);
	//Dialog Import Berjaya     
		   if($simpan){
			    echo "<script type='text/javascript'> window.alert('Import Berjaya, Sila semak senarai homestay!')
			          window.location = 'import.php'</script>";
           }else{
			    echo "<script type='text/javascript'> window.alert('Import Gagal..!')
			          window.location = 'import.php'</script>";
		        } 
		   
	    }
     fclose($bukafail);
   }
?>