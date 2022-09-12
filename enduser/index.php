
<?php
// Include the database configuration file
include '../dashmin-1.0.0/db/connection.php';
include './layout/header.php';
   ?>
  <style>
    {
      .follow-us  a:hover{
  color: #076e8d;
}
    }
  </style> 


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
     
<div style="">
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
                       
                    
                <!-- Trending Top -->

                        <div class="trending-top mb-90">
                            <div class="trend-top-img">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to={0} class="active" >
                                  <li data-target="#carouselExampleIndicators" data-slide-to={1} >
                                  <li data-target="#carouselExampleIndicators" data-slide-to={2} >
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                  <?php
                                    $query = $connect->query("SELECT * FROM file ORDER BY id DESC LIMIT 1");
                                    if($query->num_rows > 0){
                                    while($row = $query->fetch_assoc()){
                                    $imageURL = '../dashmin-1.0.0/img/news/'.$row["file_name"];
                                    
                                ?>
                                    <img src="<?php echo $imageURL; ?>" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5 style="color: white;"><?php echo $row["description"] ?></h5>
                                      <!-- <p>.KDFEKFKDKLACIE</p> -->
                                    </div>
                                  </div>
                                  <?php 
                                    }
                                    }


                                        $query = $connect->query("SELECT * FROM file ORDER BY id DESC LIMIT 15");

                                        if($query->num_rows > 0){
                                        while($row = $query->fetch_assoc()){
                                        $imageURL = '../dashmin-1.0.0/img/news/'.$row["file_name"];
                                        
                                        ?>
                                        <div class="carousel-item ">
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color:#0275d8"><?php echo $row["title"] ?></h5>
                                        
                                        <p style="color:#ffff"><?php echo $row["description"] ?></p>
                                        </div>
                                        <img src="<?php echo $imageURL; ?>" alt />
                                        </div>
                                    <?php 
                                    }
                                    }
                                    ?> 


                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true" >
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true" >
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                          </div>




                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                            <?php
                                $query = $connect->query("SELECT * FROM file ORDER BY id ASC LIMIT 3");

                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                $imageURL = '../dashmin-1.0.0/img/news/'.$row["file_name"];
                                
                            ?>
                                                        
                               <div class="col-lg-4 ">
                               <a href="./detaills/details.php?id=<?=$row["id"]; ?>">
                                 <div style="padding: 4px; height:380px" class="bg-light header-bottom"> <div class="single-bottom mb-35 ">
                                        
                                        <div class="trend-bottom-img mb-30 ">
                                            <img src="<?php echo $imageURL; ?>" alt="">
                                            
                                        </div>
                                        
                                        <div class="trend-bottom-cap">
                                            <span class="color1" ><?php echo $row["title"] ?></span>
                                            <h6 style="color:#0275d8"><i class="fa fa-calender"></i><?php echo $row["date"] ?></h6>
                                            <a><p><?php echo $row["description"] ?></p></a>
                                            
                                        </div>
                                    </div></div>
                                    </a>
                                </div>
                        <?php }
                        }
                        ?>                              

                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div><h3 style="color: red;">Recent News</h3>
                          <hr style="color: blue;" />
                        </div>

                        <?php
                        $query = $connect->query("SELECT * FROM file ORDER BY id DESC LIMIT 5");

                        if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = '../dashmin-1.0.0/img/news/'.$row["file_name"];
                        
                        ?>
                        <a href="./detaills/details.php?id=<?=$row["id"]; ?>">
                        <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                          <span class="color3" style="color:#0275d8;padding-bottom:20px;"><?php echo $row["title"] ?></span>
                            <img src="<?php echo $imageURL; ?>" alt />
                          </div>
                          <div class="trand-right-cap">
                            
                            <h6 style="padding-top:20px;"><a href="details.html" style='a:hover:#0275d8'><?php echo $row["description"] ?></a></h6>
                          </div>
                        </div>
                        </a>
                        <?php }
            }
            ?>


                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3 style="color: red;">EVENTS</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                             
                        <?php
                                $query = $connect->query("SELECT * FROM event ORDER BY id DESC LIMIT 10");

                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                
                                ?>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                        <img src="<?php echo $imageURL; ?>" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $row["title"] ?></span>
                                    <h6><a href="#"><?php echo $row["description"] ?></a></h6>
                                    <h6 class="text-primary">date: <?php echo $row["date"] ?></h6>
                                    <h6 class="text-success">Location:  <?php echo $row["location"] ?></h6>
                                </div>
                            </div>

                            <?php }
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
   <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>What News</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Advatising</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">album</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">video</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">news</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-event" role="tab" aria-controls="nav-contact" aria-selected="false">event</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Gallery</a>
                                   
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">

                                    <?php
                                                $query = $connect->query("SELECT * FROM advatising ORDER BY id DESC LIMIT 6");

                                                if($query->num_rows > 0){
                                                while($row = $query->fetch_assoc()){
                                                    $imageURL = '../dashmin-1.0.0/img/advitise/'.$row["image"];
                                                
                                                ?>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?php echo $imageURL; ?>" alt="">
                                                </div>
                                                <div class="what-cap ml-10 pl-2 pt-8">
                                                    <span class="color1"><?php echo $row["title"] ?></span>
                                                   <h6> <a href="#"><?php echo $row["description"] ?></a></h6>
                                                   <h6>name: <span style="color:blue;"><?php echo $row["name"] ?> </span>Tel:<a href="#"><?php echo $row["phone"] ?></a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }
                                                }
                                                ?>     
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Card two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            
                        
                        
                            <div style="display:flex">        
         <div class="col-lg-6 col-md-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Album 1</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box bg-dark" style="padding:5px;">


                    <?php
                     $query = $connect->query("SELECT * FROM songs WHERE album=1 ");

                      if($query->num_rows > 0){
                      while($row = $query->fetch_assoc()){
                    //    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                                
                                                ?>


                        <div class="follow-us d-flex align-items-center bg-white">

                           <a href="<?php echo $row["links"] ?>"> <div class="follow-count">  
                                <span class=""><?php echo $row["name"] ?></span>
                                <!-- <p>Fans</p> -->
                            </div></a>
                        </div> 
                        
                        <?php }
                                                }
                                                ?>  
                        
                        
                    </div>
                </div>
                <!-- New Poster -->
                
            </div>

            <div class="col-lg-6 col-md-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Album 2</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box bg-dark "style="padding:5px;">


                    <?php
                     $query = $connect->query("SELECT * FROM songs WHERE album=2 ");

                      if($query->num_rows > 0){
                      while($row = $query->fetch_assoc()){
                    //    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                                
                                                ?>
                         <div class="follow-us d-flex align-items-center bg-white">
                            
                         <a href="<?php echo $row["links"] ?>"> <div class="follow-count">  
                                <span class=""><?php echo $row["name"] ?></span>
                                <!-- <p>Fans</p> -->
                            </div></a>
                        </div> 
                        <?php }
                                                }
                                                ?>  
                        
                    </div>
                </div>
                <!-- New Poster -->
                
            </div>
            

              </div > 
              
              <div style="display:flex">
               
              <div class="col-lg-6 col-md-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Album 3</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box bg-dark "style="padding:5px;">


                    <?php
                     $query = $connect->query("SELECT * FROM songs WHERE album=3 ");

                      if($query->num_rows > 0){
                      while($row = $query->fetch_assoc()){
                    //    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                                
                                                ?>
                         <div class="follow-us d-flex align-items-center bg-white">
                            
                         <a href="<?php echo $row["links"] ?>"> <div class="follow-count">  
                                <span class=""><?php echo $row["name"] ?></span>
                                <!-- <p>Fans</p> -->
                            </div></a>
                        </div> 
                        <?php }
                                                }
                                                ?>  
                        
                    </div>
                </div>
                <!-- New Poster -->
                
            </div>


            <div class="col-lg-6 col-md-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Album 4</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box bg-dark "style="padding:5px;">


                    <?php
                     $query = $connect->query("SELECT * FROM songs WHERE album=4 ");

                      if($query->num_rows > 0){
                      while($row = $query->fetch_assoc()){
                    //    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                                
                                                ?>
                         <div class="follow-us d-flex align-items-center bg-white">
                            
                         <a href="<?php echo $row["links"] ?>"> <div class="follow-count">  
                                <span class=""><?php echo $row["name"] ?></span>
                                <!-- <p>Fans</p> -->
                            </div></a>
                        </div> 
                        <?php }
                                                }
                                                ?>  
                        
                    </div>
                </div>
                <!-- New Poster -->
                
            </div>







              </div>
 
                            </div>
                            <!-- Card three -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card fure -->

                           
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                                $query = $connect->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 6");

                                                if($query->num_rows > 0){
                                                while($row = $query->fetch_assoc()){
                                                    $imageURL = '../dashmin-1.0.0/img/gallery/'.$row["image"];
                                                
                                                ?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img style="width:100%; height:100%;" src="<?php echo $imageURL; ?>" alt="">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <?php }
                                                }
                                                ?> 
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- card Five -->
                            <div class="tab-pane fade" id="nav-event" role="tabpanel" aria-labelledby="nav-Sports">
                                <div class="whats-news-caption">
                                    <div class="row">
                                    <?php
                                                $query = $connect->query("SELECT * FROM event ORDER BY id DESC LIMIT 6");

                                                if($query->num_rows > 0){
                                                while($row = $query->fetch_assoc()){
                                                    $imageURL = '../dashmin-1.0.0/img/event/'.$row["file_name"];
                                                
                                                ?>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="<?php echo $imageURL; ?>" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1"><?php echo $row["title"]; ?></span>
                                                     <h4 class="text-primary"><a href="#"><?php echo $row["location"]; ?>,<span class="text-success" style="font-size:15px;"><?php echo $row["date"]; ?></span> </a></h4>
                                                    <!-- <h4 class="text-success"><a href="#"><?php echo $row["location"]; ?></a></h4>  -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php }
                                                }
                                                ?> 
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- card Six -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews1.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews2.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews3.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="assets/img/news/whatNews4.jpg" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
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
                                <!-- <p>Fans</p> -->
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>twitter</span>
                                <!-- <p>Fans</p> -->
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>instagram</span>
                                <!-- <p>Fans</p> -->
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>youtube</span>
                                <!-- <p>Fans</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg" id="Latest">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3 class="text-danger">Weekly Top News</h3>
                            <hr style="color:red;">
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">


                        <?php
                        $query = $connect->query("SELECT * FROM file ORDER BY id DESC LIMIT 15");

                        if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = '../dashmin-1.0.0/img/news/'.$row["file_name"];
                        
                        ?>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?php echo $imageURL; ?>" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1"><?php echo $row["title"] ?></span>
                                    <p><?php echo $row["date"] ?></p>
                                    <h4><a href="#"><?php echo $row["description"] ?></a></h4>
                                </div>
                            </div> 
                            <?php }
                                }
                                ?>    
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!-- Start Youtube -->
    
   
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
    </main>
                           
                                <div class="col-lg-8 pl-200  "style="posit">
                                <div class="form-group" >
                       <a href="detaills/post_comment.php"> <button type="submit" name="submit" style="padding:30px;" id="post" class="btn"><i>Comment here !</i></button></a>
                    </div>
                                </div>
                            </div>
                       
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
</div>
    </body>
</html>

