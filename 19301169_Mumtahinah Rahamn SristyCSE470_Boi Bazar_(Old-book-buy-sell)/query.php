<!Doctype html>
<html>
<head>
      <title> showing flat</title>
	  <link rel = "stylesheet" href ="css/style.css" />
	  
	  <style>
	  .col-md-3{
                 display : inline-block;
				 background : yellow;
				 width : 16%
				 
	  }
	  </style>
	  
	  <style>
	  .col-md-2{
		  display : inline-block;
				 background : white;
				 width : 16%
				 
	  }
	  </style>
	  
	  
	  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Boi Bazar</title>
   
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="assets/css/slick.css" rel="stylesheet">
  
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
   
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 
		  

</head>
<body>
  


      <h1> Boi Bazar </h1>
	  <a href = "index.html"> Home </a>
	 
	  <a href = "search.php"style = "margin-left: 20px;"> Search by Name </a>
	  
	  <hr/>
	  <h2 style = "text-align: center;" >Available Books</h2>
	   
	  
	  <section id = "section1">
	     
		 
		 <div class = "row" style = "padding:20px;">
		
	     <div class = "col-md-3"> Name </div> 
	     <div class = "col-md-3"> Email </div>

		  <div class = "col-md-3"> Query </div>
		 
						 
						 
	  
	  </div>
	  <?php
	  require_once("connect.php");
	  
	  $sql = "select * from contact";
	  $result = mysqli_query($conn , $sql);
	  
	  if(mysqli_num_rows($result) != 0){
		  while ($rows = mysqli_fetch_array($result)) {
		  
			  ?>
			  <div class = "row" style = "padding:20px;">
		  <div class = "col-md-2"><?php echo $rows[0];?> </div>
		  <div class = "col-md-2"><?php echo $rows[1];?> </div>
		  <div class = "col-md-2"><?php echo $rows[2];?> </div>
		
		  
	     
			 </div>

            <?php
		  }

	  }
     ?>
 </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  </section>
	  
	  
	  
	  
	  </body>
	  </html>
