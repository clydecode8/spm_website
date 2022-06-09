<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
   input.submittempahan {
	   float: right;
	   background-color: lightgreen;
	   color: white;
	   margin-right: 100px;
	   padding: 20px 20px;
	   width: 10%;
	   height: 10%;
	   margin-top: 20px;
	   font-size: 15px;
	   margin-bottom: 20px;
   }
   
   input.submittempahan:hover {
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
	  -webkit-box-shadow: 5px 5px 0 #666;
      -moz-box-shadow: 5px 5px 0 #666;
  
   }
   
   
   input.tempahan {
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
   
    input.tempahan2 {
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
     <?php include 'borangtempah.php';?>
   </article>
 </section>
</body>
</html> 
    
