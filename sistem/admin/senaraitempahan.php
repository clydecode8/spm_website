<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  .fungsitempahan {
	  background-color: #A9D171;
	  padding: 20px 35px;
	  color: black;
	  font-size: 16px;
	  margin: 50px;
	  width: 15%;
	  
  }

  .fungsitempahan:hover {
	  background-color: black;
  }
  
  .fungsitempahan2 {
	  background-color: #A9D171;
	  padding: 20px 35px;
	  color: black;
	  font-size: 16px;
	  margin: 50px;
  }

  .fungsitempahan2:hover {
	  background-color: black;
  }
  
   input.listtempahan:focus {
	   background-color: #CACAD0;
   }
   
   input.listtempahan2:focus {
	   background-color: #CACAD0;
   }
   
   input.listtempahan {
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
   
   input.listtempahan2 {
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
     <?php include 'borangsenaraitempahan.php';?>
   </article>
 </section>
</body>
</html> 
    
