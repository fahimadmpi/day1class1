<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="">
    <?php wp_head(); ?>
    

</head>
<body>
    <!-- header part start -->
    <header class="cont">
        <div class="row topber">
            <div class="col-lg-6 header_left">
                <p> বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 header_right text-end">
                <p>২৩ কার্তিক, ১৪২৯</p>
                <a href="">English</a>
            </div>
            
        </div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="cont">
        <div class="row logo">
            <div class="col-lg-5 logo_left">
                <a href="#">
                  <?php the_custom_logo(); ?>
            <img src="./assets/images/slider/header/logo_bn.png" alt="">
                </a>
                   
            </div>
            <div class="col-lg-5 logo_search">
                <form action="">
                    <input type="text"placeholder="খুঁজুন ">
                    <button>অনুসন্ধান </button>
                    
                </form>

            </div>
            <div class="col-lg-2 logo_right">
                <div class="logo1">
                    <a href="#"></a>
                    <img src="./assets/images/hearder/a2i-logo-footer.png" alt="">
                </div>
                <div class="logo2">
                    <h6><b>সাথে থাকুন:</b></h6>
                    <a href="#"></a>
                    <img src="./assets/images/hearder/facebook-icon.png" alt="">
                    <img src="./assets/images/hearder/twitter-blue-icon.png" alt="">
                    <img src="./assets/images/hearder/youtube-icon.png" alt="">
                    <img src="./assets/images/hearder/gplus-icon.png" alt="">
                </div>
         </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
    <section class="cont">
        <div class="row main_menu">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(array(
                      'menu_location'=>'Top_menu',
                      'menu_class'=>'navbar-nav top_menu'

                    )); ?>
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><a href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">আইন-বিধি</a>
    
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
                      </li>
                     
                      </li>
                    </ul> -->
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- menu part end -->
   <!-- hero part start -->
   <section class="cont">
        <div class="row hero">
            <div class="col-lg-8 hero_main">
                <div class="banner">
                    <!-- banner star -->
                    <?php dynamic_sidebar('banner') ?>
                    <img src="./image/slider/padmabanner.jpg" class="d-block w-100" alt="">
                    <!-- banner end -->
                </div>
                <div class="slider">
                    <!-- slider part -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./image/slider/333_gov.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./image/slider/banner-renew-your-passport.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./image/slider/our_pride.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    <!-- slider end -->
                </div>
                <!-- tab start -->
                <div class="tab">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>দপ্তর ভিত্তিক সেবা</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>সকল ই-সেবা</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                          <div class="row text-center">
                              <div class="col-lg-2">
                                  <a href="#"><img src="./image/tab/agriculture.png" alt="">
                                      <br><p>home</p>
                                  </a>
              
                              </div>
                              <div class="col-lg-2">
                                  <a href="#"><img src="./image/tab/agriculture.png" alt="">
                                      <br><p>home</p>
                                  </a>
              
                              </div>
                              <div class="col-lg-2">
                                  <a href="#"><img src="./image/tab/agriculture.png" alt="">
                                      <br><p>home</p>
                                  </a>
              
                              </div>
                              <div class="col-lg-2">
                                  <a href="#"><img src="./image/tab/agriculture.png" alt="">
                                      <br><p>home</p>
                                  </a>
              
                              </div>
                              <div class="col-lg-2">
                                  <a href="#"><img src="./image/tab/agriculture.png" alt="">
                                      <br><p>home</p>
                                  </a>
              
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                    </div>
              </div>
                <!-- tab end -->
                <div class="list">
                  <div class="list">
                    <h5>উদ্যোগ</h5>
                    <ul>
                        <li><a href="">
                          <?php dynamic_sidebar('list'); ?>
                           <!-- বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০</a></li>
                        <li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a></li>
                        <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। </a></li>
                        <li><a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a></li>
                        <li><a href="">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a></li> -->
                    </ul>
                </div>
                </div>
                <div class="others">

                </div>
                
            </div>
          
            <div class="col-lg-4 hero_side">
              <div class="side_img">
                <a href="#">
                  <?php dynamic_sidebar('sideimg');?>
              <!-- <img src="./image/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 pb-2" alt=""></a> -->

                </a>
               
               
            </div>
            <h5>সকল বাতায়ন</h5>
            <form action="">
              <select name="" id="">
                <option value="">ওয়েবসাইট বাছাই করুন</option>
                <option value="">মন্ত্রণালয়</option>
                <option value="">অধিদপ্তর </option>
                <option value="">ঢাকা বিভাগ</option>
                <option value="">চট্টগ্রাম বিভাগ</option>
                <option value="">রাজশাহী বিভাগ</option>
              </select>
              <button btn>search</button>
            </form>
            <div class="side_video">
                <h5>মুজিব১০০ আ্যাপ</h5>
                <?php dynamic_sidebar('sidevideo'); ?>
                <!-- <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              <h5>মাস্ক পরুন সেবা নিন
              </h5>
                <!-- <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

                <!-- <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
            </div>
          </div>
    </section>
    <!-- hero part end -->

<!-- footer part start -->
<footer class="cont">
  <div class="row footer_top mt-5">
    <?php dynamic_sidebar('footertop'); ?>
    <img src="./image/footer/footer_top_bg.png" alt="">
  </div>
  <div class="row footer_bottom">
  <div class="col-lg-7 fb_left">
    <div class="row main-menu">
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="#">সাইট ম্যাপ</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                
                 
              
               
               
              </ul>
             
            </div>
          </div>
        </nav>
        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
  </div>
  </div>
  <div class="col-lg-5 fb_right text-end">
    <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসি</p>
    <span>  কারিগরি সহায়তায়:</span>
    <img src="./image/footer/np-logo-set.png" alt="">
  </div>
  </div>
 </footer>
 <!-- footer part end -->

 <?php wp_footer(); ?>
 
    <script src="./js/bootstrap.bundle.min.js"></script>
    <section class="cont">

<?php 
$x=30;
while($x<=100){
   ($x%5==0)? print $x.'<br>':'';
    $x=$x+5;
}

?>

    </section>  
    
</body>
</html>