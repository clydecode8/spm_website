<h2 style="font-size:30px;"><b><u>Laman Senarai Status</b></u></h2>
<h3><b><u>Tambah status di sini</u></b></h3>
<div class="status-style">
<form action="" method="POST" autocomplete="off">
     <label>Kod status : &ensp;&ensp;</label>
	    <input type="text" name="kod" class="statusstyle" required><br><br>
	 <label>Status : &emsp;&emsp;&emsp;</label>
	    <input type="text" name="status" class="statusstyle" required><br><br>
	 <input type="submit" name="tambahstatus" value="TAMBAH" class="submitstatus"><br><br>
</form>
</div>
<?php 
  //Sambung ke Pangkalan Data
  include 'config.php';
    
	if(!empty($_POST['tambahstatus'])) {
	//Terima data dari borang secara POST
	$kod=$_POST['kod'];
	$status=$_POST['status'];
	//Query
	$SQL="insert into status(kodstatus,status) values('$kod','$status')";
	//Laksanakan
	$tambah=mysqli_query($connect,$SQL);
	//Dialog tambah Berjaya
	if($tambah){ 
	     echo "<script type='text/javascript'> window.alert('Tambah status berjaya!') window.location.replace('status.php')</script>";
	}else{
    //Dialog tambah gagal
		 echo "<script type='text/javascript'> window.alert('Tambah status gagal') window.location.replace('status.php')</script>";
    } 
  }
?>

<table border="1" class="tablestatus">
   <tr style="background-color:lightgray;"><th >Bil</th><th>Kod status</th><th>Status</th><th>Selenggara</th></tr>
<?php 
   //Query ambil Data
      $SQL="select * from status";
   //Laksanakan
      $panggil=mysqli_query($connect,$SQL);
   //Pembilang
      $i=0;
   //Panggil data
      while($hasil=mysqli_fetch_array($panggil)){
		  $kodstatus=$hasil['kodstatus'];
		  $status=$hasil['status'];
		  $i++;
	  
	  echo "<tr><td>$i</td><td>$kodstatus</td><td>$status</td><td><a onclick='return confirmPadam()' href='deletestatus.php?id=".$kodstatus."'>PADAM</a></td></tr>";
	}
?>
</table>
<script>
    function confirmPadam() {
		return confirm("Anda pasti untuk padam?")
	}
</script>