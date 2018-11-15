
<?php 
	include 'includes/headers/homeHeader.php';
session_start();
?>
<style>
	#meet h4{
		color:white;
	}
	#meet a{
		text-decoration:none;
	}
	#meet h4:hover{
		color:#999996;
	}
</style>
</nav>
<div class="container" id = "contactForm">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="color: white; font-size: 64px; margin-top: 15%;">Got a project in mind ?</h1>
		</div>
	</div><br/><br/>
		<div class="row form-group">
			<form  action="contact_process.php" method="POST">
				<div class="col-sm-7" id="form">
					<div id="msg">
					<?php 
							if (isset($_SESSION['message']))
							{ ?>
							<div class="row">
								<div class="col-sm-12">
										<div id="cont-msg" class="alert alert-success"><?php echo $_SESSION['message']; ?></div><?php
										unset($_SESSION['message']);
										?>
								</div>
							</div>
						<?php }
						?>
					</div>
					<div class="row">
						<div class="col-sm-6">
							&nbsp;&nbsp;<label style="font-size: 20px; color: #797979; font-weight: normal; margin-bottom: 2%;" for="name">Full Name</label>
							<input style=" border: 1px solid #3A3A3A; color: #797979;" type="text" name="name" class="form-control" required="required" placeholder="Type your full name here....">
						</div>
						<div class="col-sm-5">
							&nbsp;&nbsp;<label style="font-size: 20px; color: #797979; font-weight: normal; margin-bottom: 2%;" for="email">Email</label>
							<input style=" border: 1px solid #3A3A3A; color: #797979;" type="email" name="email" class="form-control" required="required" placeholder="Type your email address...">
						</div>
						<div class="col-sm-1"></div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-sm-11">
							&nbsp;&nbsp;<label style="font-size: 20px; color: #797979; font-weight: normal; margin-bottom: 2%;" for="message">Message</label>
							<textarea style=" border: 1px solid #3A3A3A; color: #797979;" name="message" class="form-control" rows="7" required="required" placeholder="Type your message here......"></textarea>
						</div>
						<div class="col-sm-1"></div>
					</div><br/><br/><br/>
					<div class="row">
						<div id="con_send_btn" class="col-sm-12 text-left">
							<input style="padding: 10px 60px 10px 60px; border-color: white;" type="submit" name="send" class="btn btn-primary" value="Send">
						</div>
					</div>
				</div>
			</form>
			<div class="col-sm-1"></div>
			<div class="col-sm-4" id="contact-right">
				<div class="row" id="meet">
					<img alt="message icon" style="float: left; margin-top: 1%;" src="img/message.svg" width="24" height="19">
					<p style="color: #797979; font-size: 20px; font-family: Source Sans Pro; font-weight: bold;">SAY HI</p>
					<a href="mailto: info@mooshdigital.com">
					<h4 style="font-family: Source Sans Pro; font-size: 20px;">info@mooshdigital.com</h4></a>
				</div>
				<div class="row" id="meet" style="margin-top: 10%;">
					<img alt="job-inquiry icon" style="float: left; margin-top: 1%;" src="img/job-inquiry.svg" width="25" height="22">
					<p style="color: #797979; font-size: 20px; 10%; font-family: Source Sans Pro; font-weight: bold;">JOB INQUIRY</p>
					<a href="mailto: jobs@mooshdigital.com"> 
					<h4 style="font-family: Source Sans Pro; font-size: 20px;">jobs@mooshdigital.com</h4></a>
				</div>
				<div id="meet" class="row" style="margin-top: 10%;">
					<img alt="location icon" style="float: left; margin-top: 1%;" src="img/location.svg" width="20" height="25">
					<p style="color: #797979; font-size: 20px; font-family: Source Sans Pro; font-weight: bold;">LET'S MEET</p>
					<a target="_blank" href="https://www.google.fr/maps/place/409+North+End+Rd,+Fulham,+London+SW6+1NY,+UK">
					<h4 style="font-family: Source Sans Pro; font-size: 20px;">409 North End Road, Fulham, London, SW1 6NS</h4>
					</a>
				</div>
			</div>
		</div>
</div>


 <?php 
	include 'includes/footers/home-footer.php';
?>
    <script>
	document.title = 'Contact Us | Moosh Digital';
	$(document).ready(function(){
			 $('#contactUsBtn').addClass('isActiveContact');
			});
		setTimeout(function(){
	  if ($('#msg').length > 0) {
		$('#msg').fadeOut();
	  }
	}, 5000)
</script>
</body>