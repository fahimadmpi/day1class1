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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">বাংলাদেশ সম্পর্কিত</a>
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
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="con">
        <div class="row hero">
            <div class="col-lg-8 hero_main ps-0">
                <div class="banner"></div>
                <div class="slider"></div>
                <div class="tab"></div>
                <div class="list"></div>
                <div class="others"></div>
                <?php wp_footer(); ?>
                <a href="#"><img src="/assets/images/slider/slider/padmabanner.jpg" alt=""></a>
            </div>
            <div class="col-lg-8 hero_side"></div>
        </div>
    </section>
    <!-- hero part end -->
    
</body>
</html>