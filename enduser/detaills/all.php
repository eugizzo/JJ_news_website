
<?php
include '../../dashmin-1.0.0/db/connection.php';
include '../layout/detailHeader.php';
?>




<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
<nav class="navbar navbar-expand-sm navbar-dark">
    <img src="https://i.imgur.com/CFpa3nK.jpg" width="20" height="20" class="d-inline-block align-top rounded-circle" alt=""> 
    <a class="navbar-brand ml-2 text-primary" href="#" data-abc="true">Recents comments</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"  aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="end">
        <div class="collapse navbar-collapse pr-80">
            <ul class="navbar-nav">
            <a class="nav-item nav-link text-primary"  href="post_comment.php" role="tab"  aria-selected="false">Recent</a>
                <a class="nav-item nav-link text-primary" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">View all</a>
              
                <li class="nav-item active"> <a class="nav-link mt-2 text-primary" href="#" data-abc="true" id="clicked">Contact<span class="sr-only">(current)</span></a> </li>
            </ul>        
        </div>
    </div>    
</nav>
<!-- Main Body -->
<section>
    <div class="container" style="">
        <div class="row">
            <div class="col-sm-7 col-md-6 col-12 pb-4">
                <h1>Comments</h1>




                <?php
                                $query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 15");

                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                    // $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                
                                ?>
                                

                <div class="comment mt-4 text-justify float-left">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4 class="text-primary"><?php echo $row["name"] ?></h4>
                    <span>- <?php echo $row["date"] ?></span>
                    <br>
                    <p><?php echo $row["comment"] ?> ?</p>
                    <!-- <br> -->
                    <span class="label text-info">Pending</span> 

                    <span class="action-icons">
                        <a href="#" data-abc="true"><i class="fa fa-pencil text-danger"></i></a>
                         <a href="#" data-abc="true"><i class="fa fa-rotate-right"></i></a>
                         <a href="#" data-abc="true"><i class="fa fa-heart text-danger"></i></a>
                                                </span>
                </div>
                <?php
                                    }}?>
                
                
            </div>
            




            <div class="col-lg-4 pl-200">
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
</section>

<?php
include '../layout/footerDetail.php';
?>
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