<h3><u>Senarai Homestay untuk Ditempah</u></h3>
<table class="tempahan" border="1">
     <tr><th>Bil</th><th>Kod Homestay</th><th>Nama Homestay</th><th>Jenis Homestay</th><th>Harga per hari</th><th>Status</th></tr>
	 
<?php
     //Sambung ke PANGKALAN DATA
	   include 'config.php';
	 //Query
	   $SQL = "select * from homestay inner join status on homestay.kodstatus=status.kodstatus";
	   $panggil = mysqli_query($connect,$SQL);
	 //Pembilang
	   $i=0;	 
	 //Query
	   while($hasil = mysqli_fetch_array($panggil)){
	         $kod=$hasil['kodhomestay'];
	         $nama=$hasil['namahomestay'];
	         $jenis=$hasil['jenishomestay'];
	         $harga=$hasil['hargahomestay'];
			 $kodstatus=$hasil['kodstatus'];
			 $status=$hasil['status'];
	         $i++;
		   
		   echo "<tr><td>$i</td><td>$kod</td><td>$nama</td><td>$jenis</td><td>RM$harga</td><td>$kodstatus - $status</td></tr>";
	 }
?>
	 <p><a href="tempahdisini.php">[+] TEMPAH DI SINI</p>