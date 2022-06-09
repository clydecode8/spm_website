<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
   input.login {
	  border: 2px ridge #767676;
	  border-radius: 4px;
	  box-sizing: border-box;
	  color: black;
	  background-color: white;
	  padding: 10px;
	  width: 60%;
	  text-align: left;
	  float: right;
      margin-right: 300px;
	  display: inline-block;
	  font-size: 20px;
	  height: 20%;
	  
   }
   
    input.login:focus { 
      background-color: #C4C3D0;
	  color: white;
	  border: 2px solid black;
	  box-sizing: border-box;
	  
   }
   
    input.submitlogin {
	   float: right;
	   background-color: lightgreen;
	   color: white;
	   margin-right: 100px;
	   padding: 20px 20px;
	   width: 10%;
	   height: 10%;
	   margin-top: 20px;
	   font-size: 15px;
	   box-shadow: 0 0 40px 40px #49B676 inset, 0 0 0 0 #49B676;
      -webkit-transition: all 150ms ease-in-out;
       transition: all 150ms ease-in-out;
   }
   
   input.submitlogin:hover {
	   box-shadow: 0 0 10px 0 #49B676 inset, 0 0 10px 4px #49B676 ;
   }
   
</style>
<body class="homelogin">
 <header>
   <?php include 'header.php';?>
 </header>
 <nav>
   <?php include 'sidenav.php';?>
 </nav>
 
 <section>
   <aside>
     <?php include 'navutama.php';?>
   </aside>
   <article>
     <?php include 'boranglogin.php';?>
   </article>
 </section>
</body>
</html> 
    