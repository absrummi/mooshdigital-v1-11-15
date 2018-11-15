<?php 
	include 'includes/headers/homeHeader.php';
	require_once 'connection.php';
?>
</nav>
   <div class="container-fluid homeLanding">
        <div class="row">
            <div class="col-lg-7 col-md-7 ">
                
                    <div class="item-inner">
                            <img  src="assets/images/png/E-commerce-project-koday/side-patterns.svg" alt="">                        
                    </div>
                     <div class="item-inner" id = "headDesc" style = "margin-left: -2em;margin-top : 2em;">
                                <p class="heading">We Design & Develop Solutions That Work.</p>
                                <p class="descp">Our portfolio is full of projects we are truly proud of. </p>                     
                     </div>
                    
                 
            </div>
            <div class="col-lg-5 col-md-5 text-right" >
                    <div class="item-inner" >
							
                            <img  src="assets/images/png/pattern_imgs.png" alt="">                        
                        </div>
            </div>
        </div>
    </div>
		<div class="container">
			<div class="row" style="margin-left:0.4%;">
				<div class="col-sm-12 btn-group" id="filter-btn-grp" style="">
					<button onclick="btn_clicked(this.id)" class="btn" type="button" id="filter-btn1">All</button>
					<button onclick="btn_clicked(this.id)" class="btn" type="button" id="filter-btn2">UI/UX</button>
					<button onclick="btn_clicked(this.id)" class="btn" type="button" id="filter-btn3">Wireframes</button>
					<button onclick="btn_clicked(this.id)" class="btn" type="button" id="filter-btn4">iOS</button>
					<button onclick="btn_clicked(this.id)" class="btn" type="button" id="filter-btn5">Android</button>
				</div>
			</div>
		</div><br/><br/><br/><br/>
		<div class="container">
			<div class="row" id="all" style="display: block;">
				<?php 
					$sql = "SELECT * FROM portfolio";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							?>
							<a href="<?php echo($row['link']); ?>">
							<div class="col-sm-4" id="portfolio_box">
								<img id="port_img" alt="project image" class="img-responsive" src="<?php echo $row['image']; ?>" width="349" height="323"><br/>
								<?php 
									$tags = explode(" ", $row['tag']);
									$tagcount= count($tags);
									if ($tagcount > 0) {
										for ($i=0; $i < $tagcount ; $i++) { 
											if($tags[$i] == 'ios'){
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1">iOS</button><?php
											}
											else{
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1"><?php echo strtoupper($tags[$i]); ?></button><?php	
											}
										}
									}
									else{
										?><br/><br/><?php
									}
								?>
								<p id="title"><?php echo $row['title']; ?>
								<?php 
									if ($row['icon']!= '') {
										?><img alt="icon-image" style="float: right; margin-right:15px;" class="img-responsive" src="<?php echo($row['icon']); ?>" width="30" height="30"></p><?php 
									}
								?>
								<p id="banner"><?php echo $row['banner']; ?></p>
								<br/><br/>
							</div>
						</a>
							<?php
						} 
					}
				?>
			</div>

		<div class="row" id="ui/ux" style="display: none;">
				<?php 
					$sql = "SELECT * FROM portfolio";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$tags = explode(' ', $row['tag']);
							$tagcount= count($tags);
								if(strpos(strtolower($row['tag']), 'ui/ux')!== false){
							?>
							<a href="<?php echo($row['link']); ?>">
							<div class="col-sm-4" id="portfolio_box">
								<img alt="project image" class="img-responsive" src="<?php echo $row['image']; ?>" width="349" height="323"><br/>
								<?php 
									if ($tagcount > 0) {
										for ($i=0; $i < $tagcount ; $i++) { 
											if($tags[$i] == 'ios'){
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1">iOS</button><?php
											}
											else{
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1"><?php echo strtoupper($tags[$i]); ?></button><?php	
											}
										}
									}
									else{
										?><br/><br/><?php
									}
								?>
								<p id="title"><?php echo $row['title']; ?>
								<?php 
									if ($row['icon']!= '') {
										?><img alt="icon-image" style="float: right; margin-right:15px;" class="img-responsive" src="<?php echo($row['icon']); ?>" width="30" height="30"></p><?php 
									}
								?>	
								<p id="banner"><?php echo $row['banner']; ?></p>
								<br/><br/>
							</div>
						</a>
							<?php
								}}
							}
				?>
			</div>
			
			<div class="row" id="wireframes" style="display: none;">
				<?php 
					$sql = "SELECT * FROM portfolio";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$tags = explode(' ', $row['tag']);
							$tagcount= count($tags);
								if(strpos(strtolower($row['tag']), 'wireframes')!== false){
							?>
							<a href="<?php echo($row['link']); ?>">
							<div class="col-sm-4" id="portfolio_box">
								<img alt="project image" class="img-responsive" src="<?php echo $row['image']; ?>" width="349" height="323"><br/>
								<?php 
									if ($tagcount > 0) {
										for ($i=0; $i < $tagcount ; $i++) { 
											if($tags[$i] == 'ios'){
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1">iOS</button><?php
											}
											else{
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1"><?php echo strtoupper($tags[$i]); ?></button><?php	
											}
										}
									}
									else{
										?><br/><br/><?php
									}
								?>
								<p id="title"><?php echo $row['title']; ?>
								<?php 
									if ($row['icon']!= '') {
										?><img alt="icon-image" style="float: right; margin-right:15px;" class="img-responsive" src="<?php echo($row['icon']); ?>" width="30" height="30"></p><?php 
									}
								?>	
								<p id="banner"><?php echo $row['banner']; ?></p>
								<br/><br/>
							</div>
						</a>
							<?php
								}}
							}
				?>
			</div>
		

				<div class="row" id="ios" style="display: none;">
				<?php 
					$sql = "SELECT * FROM portfolio";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								if(strpos(strtolower($row['tag']), 'ios')!== false){
							?>
							<a href="<?php echo($row['link']); ?>">
							<div class="col-sm-4" id="portfolio_box">
								<img alt="project image" class="img-responsive" src="<?php echo $row['image']; ?>" width="349" height="323"><br/>
								<?php 
									$tags = explode(' ', $row['tag']);
									$tagcount= count($tags);
									if ($tagcount > 0) {
										for ($i=0; $i < $tagcount ; $i++) {
											if($tags[$i] == 'ios'){
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1">iOS</button><?php
											}
											else{
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1"><?php echo strtoupper($tags[$i]); ?></button><?php	
											}
										}
									}
									else{
										?><br/><br/><?php
									}
								?>
								<p id="title"><?php echo $row['title']; ?>
								<?php 
									if ($row['icon']!= '') {
										?><img alt="icon-image" style="float: right; margin-right:15px;" class="img-responsive" src="<?php echo($row['icon']); ?>" width="30" height="30"></p><?php 
									}
								?>
								<p id="banner"><?php echo $row['banner']; ?></p>
								<br/><br/>
							</div>
						</a>
							<?php
								}}
							}
				?>
			</div>

			<div class="row" id="andriod" style="display: none;">
				<?php 
					$sql = "SELECT * FROM portfolio";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$tags = explode(' ', $row['tag']);
							$tagcount= count($tags);
								if(strpos(strtolower($row['tag']), 'andriod')!== false){
							?>
							<a href="<?php echo($row['link']); ?>">
							<div class="col-sm-4" id="portfolio_box">
								<img alt="project image" class="img-responsive" src="<?php echo $row['image']; ?>" width="349" height="323"><br/>
								<?php 
									if ($tagcount > 0) {
										for ($i=0; $i < $tagcount ; $i++) { 
											if($tags[$i] == 'ios'){
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1">iOS</button><?php
											}
											else{
											?><button style="margin-left: 10px;" class="btn" type="button" id="filter-btn1"><?php echo strtoupper($tags[$i]); ?></button><?php	
											}
										}
									}
									else{
										?><br/><br/><?php
									}
								?>
								<p id="title"><?php echo $row['title']; ?>
								<?php 
									if ($row['icon']!= '') {
										?><img alt="icon-image" style="float: right; margin-right:15px;" class="img-responsive" src="<?php echo($row['icon']); ?>" width="30" height="30"></p><?php 
									}
								?>	
								<p id="banner"><?php echo $row['banner']; ?></p>
								<br/><br/>
							</div>
						</a>
							<?php
								}}
							}
				?>
			</div>

			
			</div>
		</div>
<?php 
	include 'includes/extra/startPro.php';
            ?>
	 <?php 
	include 'includes/footers/home-footer.php';
?>

<script>
	document.title = 'Portfolio | Moosh Digital';
	$(document).ready(function(){
		 $('#portfolioBtn').addClass('isActiveYes');
		});
</script>

</body>
</html>