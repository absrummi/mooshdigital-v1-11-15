<style>
	@media only screen and (max-width:767px){
	.descriptionB{
			width:260px;
	}
		#drop_button{
			display:none;
		}
	}
	html{
		scroll-behavior: smooth;
	}
</style>
<?php include 'includes/headers/homeHeader.php';
?>
</nav>
    <div class="container-fluid homeLanding">
        <div class="row">
            <div class="col-lg-7 col-md-7 ">
                
                    <div class="item-inner">
                       	<img  src="assets/images/png/E-commerce-project-koday/side-patterns.svg" alt="">                        
                    </div>
                     <div class="item-inner" id = "headDesc" style = "margin-left: -2em; margin-top : 2em;">
                                <p class="heading">Creating Digital Business</p>
                                <p class="descp">Our media house is full of projects we are genuinely proud of.</p>                     
                     </div>
                    
                 
            </div>
            <div class="col-lg-5 col-md-5 text-right" >
                    <div class="item-inner" >
							
                            <img  src="assets/images/png/pattern_imgs.png" alt="">                        
                        </div>
            </div>
        </div>
    </div>
							<br/><br/><div class="row text-center" id="drop_button">
								<!--<button style="background-color:transparent; border:0px;"><img src="img/drop.svg" width="41" height="41"></button>-->
								<a href="#drop_target"><img src="img/drop.svg" width="41" height="41"></a>
							</div><br/><br/>   

   <div class="container-fluid bannerBackG" id="drop_target">
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <img class="img-responsive" src="img/London-fashionweekB.png" alt="" width="675" height="720">
        </div>
        
        <div class="col-lg-6 col-sm-6">
        	<h1 id="h1">London Fashion<br/>Week 2018</h1>
            <h3>News updates in fashion week 2018</h3>
            <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte</p>
        </div>
            
    </div>
    
    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-sm-push-6">
            <img id="media-left-img" class="img-responsive" src="img/chillingham-castle1.png" alt="" width="675" height="720">
        </div>
        <div class="col-lg-6 col-sm-6 col-sm-pull-6">
        	<h1 id="h2">Chillingham<br/>Castle</h1>
            <h3>Updates from Chillingham Castle</h3>
            <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte</p>
        </div>
        
                
    </div>
    
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <img class="img-responsive" src="img/Balham-house.png" alt="" width="675" height="720">
        </div>
        <div class="col-lg-6 col-sm-6">
        	<h1 id="h3">Balham House<br/>2018</h1>
           	<h3>See what's new in Balham House</h3>
            <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte</p>
        </div>
                    
    </div>
</div>
<style>
	@media only screen and (max-width:767px){
		#footer_media{
			margin-top:1920px;;
		}
	}
	@media only screen and (min-width:768px){
		#footer_media{
			    margin-top: 33em;
		}
	}
	@media only screen and (min-width:900px and max-width:1025px){
		#footer_media{
			margin-top:2570px;;
		}
	}
	@media only screen and (min-width:1026px){
		#footer_media{
			margin-top:140%;
		}
	}
	@media only screen and (min-width:1200px){
		#footer_media{
			margin-top:140%;
		}
	}
	@media only screen and (min-width:1300px){
		#footer_media{
			margin-top:140%;
		}
	}
	@media only screen and (min-width:1400px){
		#footer_media{
			margin-top:120%;
		}
	}
</style>
 

<div id="footer_media">
	<?php 
	include 'includes/extra/startPro.php';
            ?>
 <?php 
	include 'includes/footers/home-footer.php';
?>
</div>
</div>
<script>
	document.title = 'Media | Moosh Digital';
$(document).ready(function(){
		 $('#mediaBtn').addClass('isActiveYes');
		});
</script>
</body>
</html>
