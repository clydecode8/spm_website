<?php
  $namaHOST = 'localhost';
  $namaUSER = 'root';
  $katalaluan = '';
  $namaDB = 'dbase_tempahan';

  $connect = mysqli_connect(
    $namaHOST,
    $namaUSER,
    $katalaluan,
    $namaDB );
  
  
  if(!$connect){
          echo "Capaian ke Pangkalan Data Gagal";
  } ?>