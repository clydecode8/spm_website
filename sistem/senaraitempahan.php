<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Tempahan Homestay Han</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  .fungsitempahan {
	  background-color: white;
	  padding: 20px 35px;
	  color: black;
	  font-weight: bold;
	  font-size: 16px;
	  margin: 50px;
	  width: 15%;
	  
  }

  .fungsitempahan:hover {
	  background-color: white;
	  text-decoration: underline;
	  color: black;
	  font-weight: bold;
       -webkit-box-shadow: -2px 2px 25px 14px rgba(48,161,97,1);
       -moz-box-shadow: -2px 2px 25px 14px rgba(48,161,97,1);
       box-shadow: -2px 2px 25px 14px rgba(48,161,97,1);
	  -webkit-transition: all 0.3s ease;
  }
  
  .fungsitempahan2 {
	  background-color: white;
	  padding: 20px 35px;
	  color: black;
	  font-weight: bold;
	  font-size: 16px;
	  margin: 50px;
	  width: 15%;
  }

  .fungsitempahan2:hover {
	  background-color: white;
	  text-decoration: underline;
	  color: black;
	  font-weight: bold;
	   -webkit-box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
       -moz-box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
       box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
	  -webkit-transition: all 0.3s ease;
  }
  
   input.listtempahan:focus {
	   background-color: #CACAD0;
	   color: white;
   }
   
   input.listtempahan2:focus {
	   background-color: #CACAD0;
	   color: white;
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
   
	.submitcari {
       padding: 20px 50px;
	   background-color: #EEF453;
	   font-size: 20px;
	   color: white;
	   font-size: 20px;
	   transition: all 1.0s ease 0s;
	   -webkit-box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
       -moz-box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
       box-shadow: inset 2px 2px 20px 7px rgba(230,223,25,1);
	   float: right;
	   margin-right: 100px;
 }
    
	.submitcari:hover {
		color: black;
		font-weight: bold;
		text-decoration: underline;
		background-color: white;
	    text-shadow: 8px 8px 9px rgba(0,0,0,0.21);
       -webkit-transition: all 0.3s ease;
	   -webkit-box-shadow: 2px 2px 20px 7px rgba(230,223,25,1);
       -moz-box-shadow: 2px 2px 20px 7px rgba(230,223,25,1);
        box-shadow: 2px 2px 20px 7px rgba(230,223,25,1);
		padding: 20px 25px;
	}
	
	#style-cari {
		 color: black;
		 background-color: lightgray;
		 padding: 2px 2px;
	}
	
	#style-cari2 {
		color: black;
		padding: 2px 2px;
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
    
