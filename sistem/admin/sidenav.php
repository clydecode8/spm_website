<ul id="topNav">
  <li>Selamat datang ! :)</li>
  <li><div id="tarikhmasa" onload="masa()"></div></li>
</ul>
<script>
   function masa(){
	    var t = new Date();
	    var date = t.getDate();	
		
		var tahun = t.getFullYear();
		
		var bulan = t.getMonth();
		var bulanArr = ['Januari','Februari','Mac','April','Mei','June','Julai','Ogos','September','Oktober','Disember'];
		bulan = bulanArr[bulan];
		
		var hari = t.getDay();
		var hariArr = ['Ahad','Isnin','Selasa','Rabu','Khamis','Jumaat','Sabtu'];
		hari = hariArr[hari];
		
		var jam = t.getHours();
		var minit = t.getMinutes();
		var saat = t.getSeconds();
		
		jam = updateMasa(jam);
		minit = updateMasa(minit);
		saat = updateMasa(saat);
	
		document.getElementById('tarikhmasa').innerHTML = hari + ',' + date + '-' + bulan + '-' + tahun + '   ' + jam + ':' + minit + ':' + saat;
        setTimeout(masa,1000);
   
    function updateMasa(i){
		if (i<10){
			return "0" + i;
		}else{
			return i;
		} 
   }
}
         masa();
</script>