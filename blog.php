<style type="text/css">
    #blog a{
        text-decoration: none;
    }
	@media only screen and (max-width:767px){
		#drop_button{
			display:none;
		}
	}
	html{
		scroll-behavior: smooth;
	}
</style>
<?php 
include 'includes/headers/homeHeader.php';
?>

</nav>

	    <div class="container-fluid homeLanding">
        <div class="row">
            <div class="col-lg-7 col-md-7 ">
                
                    <div class="item-inner">
                            <img  src="assets/images/png/E-commerce-project-koday/side-patterns.svg" alt="">                        
                    </div>
                     <div class="item-inner" id = "headDesc" style = "margin-left: -2em; margin-top : 2em;">
                                <p class="heading">Our Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p class="descp">The latest trends, advancements and ideas.</p>                     
                     </div>
                    
                 
            </div>
            <div class="col-lg-5 col-md-5 text-right" >
                    <div class="item-inner" >
							
                            <img  src="assets/images/png/pattern_imgs.png" alt="">                        
                        </div>
            </div>
        </div>
    </div>
							<br/><br/><br/><div class="row text-center" id="drop_button">
								<!--<button style="background-color:transparent; border:0px;"><img src="img/drop.svg" width="41" height="41"></button>-->
								<a href="#blog_drop"><img src="img/drop.svg" width="41" height="41"></a>
							</div><br/><br/>
		
        <div class="container blogThumbnail" style="margin-top: 0%;" id="blog_drop">
            <div class="row">
                <div class="col-sm-6 col-md-4" id="blog">
                    <a href="blog-1.php">
                    <div class="thumbnail">
                        <img src="assets/images/png/blog/blog-1.png" alt="...">
                        <div class="tagEvent" style="background-color: #00ACEB; color: white;">Event</div>
                        <div class="caption">
                            <p class="titl">Steps to Increase Mobile App Downloads & Better User Retention</p>
                            <p class="para1">Moosh Digital - 6 November 2018</p> 
                        </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-sm-6 col-md-4" id="blog">
                <a href="blog-2.php">
                    <div class="thumbnail">
                        <img src="assets/images/png/blog/blog-2.png" alt="...">
                            <div class="tagEvent" style="background-color: #FF4B43; color: white;">Event</div>
                            <div class="caption">
                                <p class="titl">Businesses Need to Start Developing their own Mobile Apps</p>
                                <p class="para1">Moosh Digital - 1 November 2018</p>  
                            </div>
                    </div>
                </a>
                </div>
                
                <div class="col-sm-6 col-md-4" id="blog">
                <a href="blog-3.php">
                    <div class="thumbnail">
	                    <img src="assets/images/png/blog/blog-3.png" alt="...">
	                    <div class="tagEvent" style="background-color: #8F00B8; color: white;">Event</div>
	                    <div class="caption">
	                        <p class="titl">Excellent CRM Systems = Excellent Business Development</p>
	                        <p class="para1">Moosh Digital - 24 October 2018</p>   
	                    </div>
                	</div>
                </a>
                </div>
            
                <div class="col-sm-6 col-md-4" id="blog">
                    <a href="blog-4.php">
                    <div class="thumbnail">
                        <img src="assets/images/png/blog/blog-4.png" alt="...">
                            <div class="tagEvent" style="background-color: #FF4B43; color: white;">Event</div>
                            <div class="caption">
                              <p class="titl">Should You Outsource Your Mobile App Development?</p>
                              <p class="para1">Moosh Digital - 17 October 2018</p>
                              
                            </div>
                          </div>
                      </a>
                        </div>
                        
                        <div class="col-sm-6 col-md-4" id="blog">
                            <a href="blog-5.php">
                            <div class="thumbnail">
                                <img src="assets/images/png/blog/blog-5.png" alt="...">
                                <div class="tagEvent" style="background-color: #00ACEB; color: white;">Event</div>
                                <div class="caption">
                                    <p class="titl">5 Reasons to Develop a Web Application with Ruby on Rails.</p>
                                    <p class="para1">Moosh Digital - 12 October 2018</p> 
                                </div>
                            </div>
                        </a>
                        </div>
                        
                        <div class="col-sm-6 col-md-4" id="blog">
                            <a href="blog-6.php">
                            <div class="thumbnail">
                                <img src="assets/images/png/blog/blog-2.png" alt="...">
                                <div class="tagEvent" style="background-color: #FFFFFF; color: black;">Event</div>
                                <div class="caption">
                                    <p class="titl">Reasons Why Your Website Must Be Mobile Friendly</p>
                                    <p class="para1">Moosh Digital - 6 October 2018</p>     
                                </div>
                            </div>
                        </a>
                        </div>
            </div>
                
        
    </div>
<div style="margin-top:-70px;">
<?php 
	include 'includes/extra/startPro.php';
?></div>
    <?php 
    include 'includes/footers/home-footer.php';
  ?>
  
<script>
	document.title = 'Blog | Moosh Digital';
$(document).ready(function(){
		 $('#blogBtn').addClass('isActiveYes');
		});
</script>
        	</body>
        	</html>
