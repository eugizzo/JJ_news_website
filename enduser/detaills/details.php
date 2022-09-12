
<?php
// Include the database configuration file
include '../../dashmin-1.0.0/db/connection.php';
include '../layout/detailHeader.php';
include 'select.php';


   ?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/slicknav.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/css/themify-icons.css">
  <link rel="stylesheet" href="../assets/css/slick.css">
  <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/responsive.css">
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                <?php
                                $query = $connect->query("SELECT * FROM file ORDER BY id DESC LIMIT 4");
                                    if($query->num_rows > 0){
                                    while($row = $query->fetch_assoc()){
                                    
                                ?>
                                                                    <li class="news-item"><?php echo $row["description"] ?> ...</li>
                                <?php                                
                                }
                                }
                                ?>                            
                               
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <?php
                                $id=$_GET['id'];

                            $query="SELECT * FROM `file` WHERE  id=$id";
                            $detail= $connect->query($query);
                            
                                while($row = $detail->fetch_assoc()){
                                    $imageURL = '../../dashmin-1.0.0/img/news/'.$row["file_name"];
                                ?>  
    
                                      
     
                             <img style="width:100%;" src="<?php echo $imageURL; ?>" alt="..." />
                                                                
                                        <?php                                
                                        }
                                    ?>
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>Here come the moms in space</h3>
                                </div>

                                <?php
                                $id=$_GET['id'];

                            $query="SELECT * FROM `file` WHERE  id=$id";
                            $detail= $connect->query($query);
                            
                                while($row = $detail->fetch_assoc()){
                                    $imageURL = '../../dashmin-1.0.0/img/news/'.$row["file_name"];
                                ?>  

<li class="news-item"><?php echo $row["description"] ?> ...</li>
<?php
                                }?>
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="../assets/img/news/icon-ins.png" alt=""></a></li>
                                            <li><a href="#"><img src="../assets/img/news/icon-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="../assets/img/news/icon-tw.png" alt=""></a></li>
                                            <li><a href="#"><img src="../assets/img/news/icon-yo.png" alt=""></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-google-plus " style="color:#076e8d;"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin " style="color:#076e8d;"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"style="color:#076e8d;"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                           
                                <div class="col-lg-8 ">
                                <div class="form-group">
                       <a href="post_comment.php"> <button type="submit" name="submit" style="padding:20px;" id="post" class="btn">Comment here !</button></a>
                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                                <div class="single-box" style="display:flex">
                                    <div class="follow-us d-flex align-items-center" style="padding-right:20px;">
                                        <div class="follow-social">
                                            <a href="#"><img src="../assets/img/news/icon-fb.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">  
                                            <!-- <span>facebook</span> -->
                                            <!-- <p>Fans</p> -->
                                        </div>
                                    </div> 
                                    <div class="follow-us d-flex align-items-center" style="padding-right:20px;">
                                        <div class="follow-social">
                                            <a href="#"><img src="../assets/img/news/icon-tw.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <!-- <span>twitter</span> -->
                                            <!-- <p>Fans</p> -->
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center" style="padding-right:20px;">
                                        <div class="follow-social">
                                            <a href="#"><img src="../assets/img/news/icon-ins.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <!-- <span>instagram</span> -->
                                            <!-- <p>Fans</p> -->
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center" style="padding-right:20px;">
                                        <div class="follow-social">
                                            <a href="#"><img src="../assets/img/news/icon-yo.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <!-- <span>youtube</span> -->
                                            <!-- <p>Fans</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="../assets/img/news/news_card1.jpg" alt="">
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>
<?php 
include '../layout/footer.php'
?>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="../assets/js/jquery.ticker.js"></script>
        <script src="../assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>