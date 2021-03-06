<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128906505-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-128906505-1');
	</script>
  	<title>Home</title>
	<meta name="description" content="Moosh Digital is a technology company that provides software as a service to Business and Consumers. Research, Design and Development.">
  	<meta name="keywords" content="Moosh, Moosh digital, Moosh Digital Uk, Moosh digital london, HTML,CSS,JavaScript,PHP,ASP.NET,RUBY,BOOTSTRAP">
  	<meta name="author" content="Muhammad Usama Malik and Abid Karim">
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />   
 <!-- fonts  -->
 <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-inverse home">
  <div class="container-fluid">
    <div class="navbar-header">
		<p id="menu_tag" style="color: white;position: absolute;top: 57px;right: 21px;font-size: 13px;z-index: 0;">MENU</p>
		<style>
			@media only screen and (min-width:768px){
				#menu_tag{
					display:none;
				}
			}
		</style>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:0px; background-color:transparent; margin-right:-36px;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">
            <div class="curveTop"></div>
            <img  src="assets//images/png/moosh-logo.svg" alt="" width="101" height="38">
      </a>

    </div>
    <div class="collapse navbar-collapse navigatThough" id="myNavbar">
      <ul  id="menuResponsive" class="nav navbar-nav navbar-right">
        <li id = "indexClicked"><a id = "indexBtn" href="index.php">Home</a></li>
        <li id = "portfolioClicked"><a id = "portfolioBtn" href = "portfolio.php">Portfolio</a></li>
        <li id = "ourMethodClicked"><a id = "ourMethodBtn" href="our-method.php">What We Do</a></li>
        <li id = "mediaClicked"><a id = "mediaBtn" href="media.php">Media</a></li>
        <li id = "blogClicked"><a id = "blogBtn" href="blog.php">Blog</a></li>
        <li id = "contactClicked"><a id = "contactUsBtn" href="contactus.php" class="btnBorder" style="border: 2px solid #FFFFFF; border-radius:20px;">Contact Us</a></li>
      </ul>
     
    </div>
  </div>

<!-- Landin Stuff goes here -->


 <div id="go_top">
    <button onclick="topFunction()" id="go_top_Btn" title="Go to top"><img class="img-responsive" src="img/SCROLL-UP-WHITE.svg" width="60" height="60"></button>
</div>