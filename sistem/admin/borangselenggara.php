<h2><b><u>LAMAN SENARAI HOMESTAY</u></b></h2>
<h3><u>SENARAI HOMESTAY</b></u></h3>
<table class="tambahhomestay" border="1">
    <tr align="center"><th>Bil</th><th>Kod Homestay<th>Nama Homestay</th>
	    <th>Jenis Homestay</th><th>Harga Homestay</th><th>Status</th><th>Selenggara</th></tr>
<?php
  //Pembilang
    $i=0;
  //Sambung ke Pangkalan Data
    include 'config.php';
  //Query  
	$SQL = "select * from homestay inner join status on homestay.kodstatus = status.kodstatus order by homestay.kodhomestay";
  //Laksanakan query
    $panggil = mysqli_query($connect,$SQL);
    while($data=mysqli_fetch_array($panggil)){
		$kod=$data['kodhomestay'];
		$nama=$data['namahomestay'];
		$jenis=$data['jenishomestay'];
		$harga=$data['hargahomestay'];		
		$kodstatus=$data['kodstatus'];
		$status=$data['status'];
		$i++;
		echo "<tr>
		           <td>$i</td><td>$kod</td><td>$nama</td><td>$jenis</td><td>RM$harga</td><td>$kodstatus - $status</td>
		           <td><a onclick='return confirmPadam()' href='deletehomestay.php?id=".$kod."'>PADAM</a></td>
		      </tr>";

  }
  ?>
  </table>
 <p><a href="tambahhomestay.php"><b>[+] TAMBAH HOMESTAY</b></a></p><br><br>
 <p style="font-size:25px;"><b><u>Borang Kemaskini Status</u></b></p>
<?php if(empty($_POST['tukar'])){ ?>   
<form action= "" method="POST">
	 <label>Homestay</b></label>
	   <select class="pilih-css" name="homestay">
	   <?php //Pembilang
                $i=0;	 
	         //Sambung ke Pangkalan Data
	            include 'config.php';
	   	   //Query
	   	      $query="select * from homestay";
	   	   //Ambil Data
	   	      $run=mysqli_query($connect,$query);
	   	  //Panggil data
	   	      while($data=mysqli_fetch_array($run)){
	   			  $i++;
	   			  $kodhome=$data['kodhomestay'];
	   			  $namahome=$data['namahomestay'];
	   
	   	  echo "<option value='$kodhome'>$kodhome - $namahome</option>";
	   		  } ?>		
       </select>			  
	 <label>Status</label>
	    <select class="pilih-css" name="status">
	    <?php //Pembilang
                 $i=0;	 
	    	   //Query
	    	      $query="select * from status";
	    	   //Ambil Data
	    	      $run=mysqli_query($connect,$query);
	    	  //Panggil data
	    	      while($data=mysqli_fetch_array($run)){
	    			  $i++;
	    			  $kodstatus=$data['kodstatus'];
	    			  $status=$data['status'];
	    
	    	  echo "<option value='$kodstatus'>$kodstatus - $status</option>";
	    		  } ?>	
       </select><br><br>
	   <input type="submit" name="tukar" value="KEMASKINI" class="submitsemak">
</form>  
<?php  }else{	
	  //Sambung ke Pangkalan Data
        include 'config.php';        
	  //Terima data secara POST	
		$homestay=$_POST['homestay'];
		$status=$_POST['status'];
      //Query
	    $SQL="UPDATE homestay SET kodstatus='$status' where kodhomestay='$homestay'";
	    $update=mysqli_query($connect,$SQL);
	  //Dialog Berjaya
	    if($update){
			echo "<script type='text/javascript'> window.alert('Kemaskini Berjaya!')</script>";
			echo "<script type='text/javascript'> window.location.replace('selenggara.php')</script>";
		}else{	
			echo "<script type='text/javascript'> window.alert('Kemaskini Tidak Berjaya!')</script>";
			echo "<script type='text/javascript'> window.location.replace('selenggara.php')</script>";    
     }
   }  ?>		
<script>
    function confirmPadam(){
        return confirm('Anda pasti untuk padam?')
	}
	
</script>