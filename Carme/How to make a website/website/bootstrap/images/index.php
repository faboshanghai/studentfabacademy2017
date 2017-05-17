<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link 
	rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script 
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>   /* content inside containers, first there is the font */
body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}

.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
.bg-4 { 
      background-color: #2f2f2f;
      color: #fff;
  }
  .container-fluid {		/* Add space to the page */
      padding-top: 70px;
      padding-bottom: 70px;
}
.navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
}
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
}
</style>
</head>

<body>

<!-- Navbar -->
   <nav class="navbar navbar-default">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
       	    <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="#">Me</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-right">
            <li><a href="#">WHO</a></li>
            <li><a href="#">WHAT</a></li>
            <li><a href="#">WHERE</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- First Container -->
  <div class="bg-1">
  <div class="container-fluid text-center">
	<h3>Who Am I?</h3>
	<img src="https://static.artfire.com/uploads/product/3/723/6723/9006723/9006723/large/100_large_red_origami_cranes_6cc76787.jpg" 
		class="img-circle"  
		alt="Bird"
		width="350" height="350">
	<h3>I'm an adventurer</h3>

<!-- Second Container -->
  <div class="container-fluid bg-2 text-center">
  	<h3>What Am I?</h3>
  	<p>I'm Surgical Nurse and Biomedical Engineer</p>
        <a href="#" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-search"></span> 
      Search</a>  						
  </div>

<!-- Third Container (Grid) --> 
 <div class="container-fluid bg-3 text-center">
  	<h3>Where To Find Me?</h3>
	<h4>There I went!</h4>
	<div class="row">
   	 <div class="col-sm-3">
      		<img src="http://tinyurl.com/lynedhm" 
		class="img-circle"
                width="200" height="200"
		alt="Image">
		<h5>Vall Hebron Hospital</h5>
         </div>
         <div class="col-sm-3">
      		<img src="http://tinyurl.com/n22tmlc" 
		class="img-circle"
		width="200" height="200"
		alt="Image">
         	<h5>Polytechnic University from Catalonia</h5>
         </div>
         <div class="col-sm-3"> 
                <img src="http://tinyurl.com/kxkqjo2" 
		class="img-circle"
		width="200" height="200"
		alt="Image">
		<h5>Stryker</h5>
         </div>
	 <div class="col-sm-3"> 
                <img src="http://tinyurl.com/km8rfmt" 
		class="img-circle"
		width="200" height="200"
		alt="Image">
		<h5>Fablab</h5>
         </div>
       <div class="col-sm-3"> 
                <img src="http://www.bestourism.com/img/items/big/526/Baltimore_Aerial-view_2090.jpg" 
		class="img-circle"
		width="200" height="200"
		alt="Image">
		<h5>Sterilmed</h5>
         </div>
         <div class="col-sm-3"> 
                <img src="https://images.tandf.co.uk/common/jackets/amazon/978113802/9781138027848.jpg" 
		class="img-circle"
		width="200" height="200"
		alt="Image">
		<h5>Conference</h5>
         </div>
         
       </div>
  	   
  </div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Contact: cmarnalot@hotmail.com and <a 
	href="https://www.linkedin.com/in/bioedric/">Linkdin</a></p> 
</footer>


</body>
</html>
