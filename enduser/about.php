<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>contact us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/ticker-style.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
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
    <!-- Preloader Start -->

    
<?php
// Include the database configuration file
include '../dashmin-1.0.0/db/connection.php';
include './layout/header.php';
   ?>
    
    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                <?php
                                $query = $connect->query("SELECT * FROM file ORDER BY id ASC LIMIT 10");
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
                                    <?php

                            $query="SELECT * FROM `gallery` ORDER BY id DESC LIMIT 1 ";
                            $detail= $connect->query($query);
                            
                                while($row = $detail->fetch_assoc()){
                                    $imageURL = '../dashmin-1.0.0/img/gallery/'.$row["image"];
                                ?>  
    
                                      
     
                             <img style="width:100%;" src="<?php echo $imageURL; ?>" alt="..." />
                                                                
                                        <?php                                
                                        }
                                    ?>
                                
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>About Us</h3>
                                        </div>
                                        <div class="about-prea">
                                            <!-- <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                            <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p> -->
                                            <p class="about-pera1 mb-25">
                                            Jehovah-Jireh Choir started the service of worship at Kigali Independent University (ULK),  at Saint Paul where the University started its mission in 1998.

Few number of Born again students at that time who where enrolled at ULK gathered just as a kind of every break-time prayer in a Congregation of Pentecostal University student named “CEP”(Communaute des etudiants pentecotistes), their number was 15 students, who met regularly to pray and praise God in Break time.

Even if there were few, they did not give up but the number increased week by week, God also inspired them and speak to them and give them promises of being strong and famous choir in the time to come .They were led by  Magnifique UMUTONI(Songs leader)  and Jacques NTAKIRA who was the Head of Worship team and Prayer leader and Herman BUGIGIRI who was Head of the worship team and promoted to be Head of the congregation of Pentecostal students CEP at ULK in the year of 2003 who is currently a Pastor in ADEPR.

<!-- On 25th June 2005,CEP-ULK was chaired KAMPAYANA Jean De Dieu, on the same date, worship team was changed to be a Choir on the Name we have today  *JEHOVAH-JIREH CHOIR. -->
<br><br>Album 1: INGOMA YA KRISTO NTIZAHANGUKA Means that “THE THRONE OF JESUS WILL NEVER END” 10 Songs Audio and Video Launched in 2010.

<br>Album 2: UWITEKA NIWE MANA” HE IS THE ONLY GOD”12 Songs Audio and Video Launched in 2014.

<br>Album 3: UMUKWE ARAJE Means that “THE BRIDEGROOM IS COMING ” 14 songs Audio and Video Launched in 2016)

<br>Album 4: URUGAMBA NI YESU URUYOBOYE” Means that” THE BATTLE IS LED BY JESUS” with 10 Songs Audio and Video Launched on the last Sunday of 2019

Currently 98% of Jehovah Jireh Members finished their Bachelor’s Studies at ULK, we started 2% of members were married but now 2% of members are single. God changed our status.

Jehovah -Jireh has a Group of His Friends or Partners who formed together to follow and support daily activities of the Choir, where we count now 126 registered members, to join is simple, just contact us. We are very thankful to that group It has the name” INKORAMUTIMA” The touched our hearts.</p>
                                        </div>
                                        <div class="header-right-btn f-right d-none d-lg-block">
            <a href="./detaills/post_comment.php"> <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Comment here !</button>
                                </a>
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
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">  
                                            <span>facebook</span>
                                            
                                        </div>
                                    </div> 
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>twitter</span>
                                            
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>instagram</span>
                                            
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>youtube</span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="assets/img/news/news_card.jpg" alt="">
                            </div>
                        </div>
                   </div>
            </div>
            
        </div>
        <!-- About US End -->
        
    </main>

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
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="./assets/js/jquery.ticker.js"></script>
        <script src="./assets/js/site.js"></script>

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