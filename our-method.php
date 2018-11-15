<?php 
include 'includes/headers/homeHeader.php';
?>
</nav>
  <style>
	  @media only screen and (max-width:767px;){
		  #the_right{
		  	align-content:center;
		  }
	  }
</style>
<!-- // here new file  -->
<div class="container-fluid" style="" id="our-methbody">
	<div class="row" style="MARGIN-TOP: 0EM;">
		<div class="col-sm-7 col-sm-push-5 text-right">
			<img class="img-responsive" src="img/uiux.png" width="750" height="545">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4 col-sm-pull-7" id="new">
			<img src="img/img1.svg" alt="" width="60" height="52">
			<p class="heading">UI/UX Design</p>
            <p class="desc">If the users don’t enjoy using it; they simply won’t! We have our design boffins hard at work making sure your application provides the most engaging and pleasant UX/UI possible.</p>
			<!-- <button type="submit" class="btn btn-default btnBorder ">Explore </button> -->
			<a href="UIUX-Design.php"><button type="submit" class="btn btn-default btnBorder ">Explore </button></a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-7">
			<img class="img-responsive" src="img/Front-end.png" width="750" height="545">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4 text-right" style="margin-left: 5%;" id="the_right">
			<img src="img/tilted-triangle.svg" alt="" width="60" height="52">
			<p class="heading">Front-End Web Development</p>
            <p class="desc">Creating websites from scratch is a gratifying task for us! We can take care of your project from start to finish, including the graphic design.</p>
		    <a href="fore-end-explore-1.2.php"><button type="submit" class="btn btn-default btnBorder ">Explore </button></a>
			<!-- <button type="submit" class="btn btn-default btnBorder ">Explore </button> -->
		</div>
	</div>

	<div class="row">
		<div class="col-sm-7 col-sm-push-5 text-right">
			<img class="img-responsive" src="img/back-end.png" width="750" height="545">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4 col-sm-pull-7">
			<img src="img/img3.svg" alt="" width="60" height="52">
			<p class="heading">Back-End Web Development</p>
            <p class="desc">Creating websites from scratch is a gratifying task for us! We can take care of your project from start to finish, including the graphic design.</p>
			<a href="backend-development.php"><button type="submit" class="btn btn-default btnBorder ">Explore </button></a>
			<!-- <button type="submit" class="btn btn-default btnBorder ">Explore </button> -->
		</div>
	</div>

	<div class="row">
		<div class="col-sm-7">
			<img class="img-responsive" src="img/ios-img@2x.png" width="750" height="545">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4 text-right" style="margin-left: 5%;" id="the_right">
			<img src="img/square.svg" alt="" width="60" height="52">
			<p class="heading">iOS Development</p>
            <p class="desc">We love making iOS apps, and we love making the process as easy as possible for you. That's why we only hire senior developers; this means that your mobile apps are left in the most skilled hands and minds, no one has time or money to waste because of mistakes caused by inexperienced developers! </p>
		    <a href="ios-android.php"><button type="submit" class="btn btn-default btnBorder ">Explore </button></a>
			<!-- <button type="submit" class="btn btn-default btnBorder ">Explore </button> -->
		</div>
	</div>

	<div class="row">
		<div class="col-sm-7 col-sm-push-5 text-right">
			<img class="img-responsive" src="img/uiux.png" width="750" height="545">
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4 col-sm-pull-7">
			<img src="img/ts3 (2).svg" alt="" width="60" height="52">
			<p class="heading">Android Development</p>
            <p class="desc">Android Development requires a slightly different approach. But don't worry, we always stick to the same proven method that we use for our iOS development!</p>
			<a href="ios-android.php"><button type="submit" class="btn btn-default btnBorder ">Explore </button></a>
			<!-- <button type="submit" class="btn btn-default btnBorder ">Explore </button> -->
		</div>
	</div>
</div>


	<?php 
	include 'includes/extra/startPro.php';
    include 'includes/footers/home-footer.php';
  ?>
<script>
	document.title = 'What We Do | Moosh Digital';
$(document).ready(function(){
		 $('#ourMethodBtn').addClass('isActiveYes');
		});
</script>
</body>
</html>
