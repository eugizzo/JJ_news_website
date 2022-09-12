<?php
include '../dashmin-1.0.0/db/connection.php';
include './layout/header.php';
    $query = $connect->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 5");
?>







	<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img style="width:130px;" src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>


	
	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->


			<div class="section-top-border" style="margin: 15px;">
				<h3 style="color: red;">Image Gallery</h3>
				<div class="row gallery-item">

				<?php
				while($row = $query->fetch_assoc()){
					$imageURL = '../dashmin-1.0.0/img/gallery/'.$row["image"];
					if($query->num_rows > 0){
					?>
					
					<div class="col-md-4" style="padding-bottom:20px;">
						<a href="<?php echo $imageURL; ?>" class="img-pop-up">
							<div class="single-gallery-image"><img style="width:100%; height:130%; padding-bottom:30px;" src="<?php echo $imageURL; ?>" alt=""></div>
							
						</a><h6 class="text-white" style="padding-left:20px;"><a href="#"><?php echo $row["title"] ?></a></h6>
					</div>
					<?php 
}
}
?> 
					
				</div>
			</div>
			
	<!-- End Align Area -->

	<?php
   include './layout/footer.php'
   
   ?>

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
		<script src="./assets/js/slick.min.js"></script>
		
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		<script src="./assets/js/jquery.magnific-popup.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</body>
</html>