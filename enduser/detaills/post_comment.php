
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
            <a class="nav-item nav-link text-primary" aria-controls="nav-profile" aria-selected="false">Recent</a>
                <a class="nav-item nav-link text-primary"  href="all.php"  aria-selected="false">View all</a>
              
                <li class="nav-item active"> <a class="nav-link mt-2 text-primary" href="#" data-abc="true" id="clicked">Contact<span class="sr-only">(current)</span></a> </li>
            </ul>        
        </div>
    </div>    
</nav>
<!-- Main Body -->
<section>
    <div class="container" style="">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
               <h1>Comments</h1>




                <?php
                                $query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 8");

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
                    
                    <span class="label text-info">Pending</span> 

                    <span class="action-icons">
                        <a href="#" data-abc="true"><i class="fa fa-pencil text-danger"></i></a>
                         <a href="#" data-abc="true"><i class="fa fa-rotate-right"></i></a>
                         <a href="#" data-abc="true"><i class="fa fa-heart text-danger"></i></a>
                                                </span>
                </div>
                
                <?php
                                    }}?>
                
                <div class="header-right-btn f-right d-none d-lg-block " style="padding-top:30px;">
            <a href="all.php"> <button type="submit" class="btn btn-primary py-4 w-100 mb-4">Read more</button>
                                </a>
        </div>
            </div>
            
            
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
             <form id="algin-form" action="Comment.php" method="POST">
                 <div class="form-group">
                   <h4 class="text-primary">Leave a comment</h4>
                        <label for="name">Subject</label>
                        <input type="text" name="subject" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        
                        <label for="message">Message</label>
                        <textarea name="message" id=""msg cols="30" rows="5" class="form-control text-white" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div> -->
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the Choir news</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" style="padding:15px;" id="post" class="btn">Post Comment</button>
                    </div>
                
                </form>
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