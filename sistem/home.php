<div class="homeutama">
   <h2>Selamat Datang! Pengguna atau Admin.</h2>
   <h3>Sila daftar atau login untuk menggunakan sistem ini.</h3>
   <h3>&#128591 Terima kasih atas kerjasama anda!</h3>
   
<!--Butang Ubah Warna-->   

   <button class="btn rawakhead" onclick="warnaRawakHead()">TUKAR WARNA HEADER</button><br>
   <button class="btn rawaksidenav" onclick="warnaRawakSideNav()">TUKAR WARNA SIDENAV</button>
   <button class="btn rawaknav" onclick="warnaRawakNav()">TUKAR WARNA NOTIF</button>
   <button class="btn rawak" onclick="warnaRawak()">TUKAR WARNA</button>
   <p><u>⚠ Warna tersebut tidak akan<br>disimpan di halaman sebelum ⚠</u></p>
</div>

<!--Proses Ubah Warna-->
<script>
  var koleksi = ['#F8F8FF','#A99EBE','#06C7E5','#B1B3B4','#FFFACD','#88B04B','#F7CAC9','#DD4124','#F0E130','#6A5ACD','#E1AD01','#717171',
                 '#CBA117','#DE5285','#7FFFD4','#FDE3B5','#D9D9D9','#CEB994','#84755A','#6E88A8','#A27484','#8B8B8B','#FF3855','#F8EFDF',
                 '#6B5B95','#92A8DA','#DFCFBE','#00CED1','#00BFFF','#FFD700','#9932CC','#FF1493','#FFFACD','#E6E6FA','#B8B8C3','#CCFF38'];
  
  function warnaRawak() {
	  var warna = koleksi;
      var rawak = warna[Math.floor(Math.random() * warna.length)];
      document.body.style.backgroundColor = rawak;
}

  function warnaRawakHead() {
	  var warnahead = koleksi;
      var rawakhead = warnahead[Math.floor(Math.random() * warnahead.length)];
	  document.getElementById("heading").style.backgroundColor = rawakhead;
}

  function warnaRawakSideNav() {
	  var warnasidenav = koleksi;
	  var rawaksidenav = warnasidenav[Math.floor(Math.random() * warnasidenav.length)];
	  document.getElementById("navLink").style.backgroundColor = rawaksidenav;
}

  function warnaRawakNav() {
	  var warnanav = koleksi;
      var rawaknav = warnanav[Math.floor(Math.random() * warnanav.length)];
	  document.getElementById("topNav").style.backgroundColor = rawaknav;
}
</script>
 