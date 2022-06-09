<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>   
   input.statusstyle {
      border: 2px ridge #767676;
	  border-radius: 4px;
	  box-sizing: border-box;
	  color: black;
	  background-color: white;
	  padding: 10px;
	  width: 40%;
	  text-align: left;
	  display: inline-block;
	  font-size: 20px;
	  height: 20%;
   }
   
   input.statusstyle:focus {
	  border: 2px ridge #767676;
	  border-radius: 4px;
	  box-sizing: border-box;
	  color: black;
	  background-color: white;
	  padding: 10px;
	  width: 20%;
	  text-align: left;
	  display: inline-block;
	  font-size: 20px;
	  height: 20%;
   }
     input.submitstatus {
	   float: right;
	   background-color: #FFEB7A;
	   color: black;
	   margin-right: 100px;
	   padding: 20px 20px;
	   width: 10%;
	   height: 10%;
	   margin-top: 20px;
	   font-size: 15px;
	   box-shadow: 0 0 40px 40px #FFE02F inset, 0 0 0 0 #FFE02F;
      -webkit-transition: all 150ms ease-in-out;
       transition: all 150ms ease-in-out;
   }
   
   input.submitstatus:hover {
	   box-shadow: 0 0 10px 0 #FFE02F inset, 0 0 10px 4px #FFE02F ;
	   padding: 20px 45px;
	   color: white;
	   text-decoration: underline;
  
   }
   
   .tablestatus th, td {
	   padding: 10px 15px;
   }
   
</style>
<body>
 <header>
   <?php include 'header.php';?>
 </header>
 <nav>
   <?php include 'sidenav2.php';?>
 </nav>
 
 <section>
   <aside>
     <?php include 'navhalaman.php';?>
   </aside>
   <article>
     <?php include 'borangtambahstatus.php';?>
   </article>
 </section>
</body>
</html> 
    
