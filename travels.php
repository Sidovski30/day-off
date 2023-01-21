<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfers and Travels</title>
    <link rel="shortcut icon" href="img/logo.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFB23FM');</script>
<!-- End Google Tag Manager -->
</head>
<body id="body" data-spy="scroll" data-target=".header">
    <header class="header navbar-fixed-top">
            <div class="header__top">
                <div class="container">
                    <div class="header__contacts">     
                            <a class="header__phone" href="tel:48514432500">+48 514 432 500</a>
                            <a class="header__email" href="mailto:office@dayoff-krakow.com">office@dayoff-krakow.com</a>
                            <span class="lang-switcher">
                                <a href="?lang=en"><img src="img/united-kingdom-flag-round-icon-16.png"></a>
                                <a href="?lang=ru"><img src="img/russia-flag-round-icon-16.png"></a>
                                <a href="?lang=pl"><img src="img/poland-flag-round-icon-16.png"></a>
                            </span>
                            <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#"><?php echo $lang['CONT_US']; ?></a>
                    </div>
                </div>
            </div>
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>
                    <span class="lang-switcher">
                        <a href="?lang=en"><img src="img/united-kingdom-flag-round-icon-16.png"></a>
                        <a href="?lang=ru"><img src="img/russia-flag-round-icon-16.png"></a>
                        <a href="?lang=pl"><img src="img/poland-flag-round-icon-16.png"></a>
                    </span>

                    <div class="logo">
                        <a class="logo-wrap" href="../">
                            <img class="logo-img logo-img-main" src="img/day-off_logo.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/logo.png" alt="Asentus Logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body"><?php echo $lang['HOME']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#trav"><?php echo $lang['TRAVELS']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about"><?php echo $lang['ABOUT_US']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#cont"><?php echo $lang['CONTACTS']; ?></a></li>  
                            <!-- <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/gallery"><?php echo $lang['GALLERY']; ?></a></li>  -->
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/"><?php echo $lang['TRANSFERS']; ?></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<section class="trav-body">
    <section class="first_sect">
    
            <div class="first_sect_wrapper">
                <div class="slider__item">
                    <div class="slider__text">
                        <?php echo $lang['CONTENT_DESCRIPTION2']; ?>
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        <?php echo $lang['HERE_GOES']; ?>
                    </a>
                </div>
            </div>
            
    </section>

    <section id="trav" class="travel-block">
        <div class="container">
            <div class="trav-block-wraper">
                
                <a class="box img-alps1 box-modal" href="#myModal1">
                    <!-- <div class="box-content box-modal" href="#myModal1">
                        <?php echo $lang['MOD_ALP']; ?>
                    </div> -->
                </a>
                <a class="box img-alps2 box-modal" href="#myModal1"></a>
                <a class="box img-alps3 box-modal" href="#myModal1"></a>
                <a class="box img-alps4 box-modal" href="#myModal1"></a>
                <a class="box img-alps5 box-modal" href="#myModal1"></a>
                <!-- <a class="box img-croat box-modal" href="#myModal2">
                    <div class="box-content box-modal" href="#myModal2">
                        <?php echo $lang['MOD_CROAT']; ?>
                    </div>
                </a> -->
                <!-- <a class="box img-gals box-modal" >
                    <div class="box-content box-modal" >
                        <?php echo $lang['MOD_JORD']; ?>
                    </div>
                </a>
                <a class="box img-dres box-modal" >
                    <div class="box-content box-modal" >
                        <?php echo $lang['MOD_MOROC']; ?>
                    </div>
                </a> -->
                <!-- <a class="box img-dres box-modal" href="#myModal5">
                    <div class="box-content box-modal" href="#myModal5">
                        Дрезден
                    </div>
                </a>
                <a class="box img-dres box-modal" href="#myModal6">
                    <div class="box-content box-modal" href="#myModal6">
                        Дрезден
                    </div>
                </a> -->
                
            </div>


        </div>
    </section>
</section>
    <section id="about" class="about">
        <div class="about-wrap">
            <div class="container">
                <div class="about__inner">
                    <div class="about__title">
                        <?php echo $lang['ABOUT_US']; ?>
                    </div>
                    <div class="about__text">
                        <?php echo $lang['ABOUT_US_DESC']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="cont" class="footer">
        <div class="footer__content">
            
            <div class="foo_block">
                <a href="tel:48514432500">+48 514 432 500</a>
                <a href="mailto:office@dayoff-krakow.com">office@dayoff-krakow.com</a>
                Krakow, Zabłocie 21
            </div>
            <div class="foo_block">
                <div class="footer__title">
                    <?php echo $lang['FOO_TIT']; ?>
                </div>
                <div class="footer__text">
                    <?php echo $lang['FOO_DESCR']; ?>   
                </div>
                <div class="foo_soc">
                    <a class="footer__facebook" href="https://www.facebook.com/dayoff.krakow" target="_blank"></a>
                    <a class="footer__insta" href="https://www.instagram.com/dayoff.krakow" target="_blank"></a>
                    <a class="footer__linkedin" href="https://www.linkedin.com/company/dayoff-krakow/" target="_blank"></a>
                    <a class="footer__tg" href="https://t.me/dayoff_krakow" target="_blank"></a>
                </div>
            </div>
            <div class="foo_block">
                <?php echo $lang['NIP']; ?>679-319-55-03
                <a href="/faq">FAQ</a>
                <a href="">Policy</a>
            </div>
            
        </div>

        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    © 2021 All Rights RESERVED. Day Off Krakow Sp. z o.o. KRS: 0000825474 <?php echo $lang['NIP']; ?>: PL6793195503
                </div>
            </div>
        </div>
    </footer>

    <div class="fix">
        <a class="footer__insta tooltipp" href="https://www.instagram.com/dayoff.krakow" target="_blank">
            <span class="tooltiptext">instagram</span>
        </a>
        <a class="footer__facebook tooltipp" href="https://www.facebook.com/dayoff.krakow" target="_blank">
            <span class="tooltiptext">facebook</span>
        </a>
    </div>

    <div id="modal">
        <div class="title"><?php echo $lang['CONT_US']; ?></div>
        <form id="mailFormSmall">
            <input type="text" id="nameSmall" placeholder="<?php echo $lang['FORM_NAME']; ?>">
            <input type="email" name="mail" id="emailSmall" required placeholder="Email">
            <input type="text" id="phoneSmall" placeholder="<?php echo $lang['FORM_PHONE']; ?>">
            <textarea type="text" id="messageSmall" placeholder="<?php echo $lang['FORM_INFO']; ?>"></textarea>
            <button type="button" id="sendMailSmall" class="btn btn-primary"><?php echo $lang['FORM_SEND']; ?></button>
            <div id="errorMessSmall"></div>
        </form>
    </div>

    <div id="success_modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <span class="clos" data-toggle="modal" data-target="#success_modal">&times;</span>
                <?php echo $lang['FORM_SUCCESS_MODAL']; ?>
            </div>
        </div>
    </div>

    <div id="myModal1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="clos">&times;</span>
                <span class="mod-tit"><?php echo $lang['MOD_ALP']; ?></span>
            </div>
            <div class="modal-body">
                
                <div class="slideshow-container">

                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car1.jpg')">
                        <div class="numbertext">1 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car2.jpg')">
                        <div class="numbertext">2 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car3.jpg')">
                        <div class="numbertext">3 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car4.jpg')">
                        <div class="numbertext">4 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car5.jpg')">
                        <div class="numbertext">5 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car6.jpg')">
                        <div class="numbertext">6 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car7.jpg')">
                        <div class="numbertext">7 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car8.jpg')">
                        <div class="numbertext">8 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car9.jpg')">
                        <div class="numbertext">9 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car10.jpg')">
                        <div class="numbertext">10 / 11</div>
                    </div>
                    <div class="mySlides1 mySlides fade" style="background-image: url('img/alp_car11.jpg')">
                        <div class="numbertext">11 / 11</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                    <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div> -->
                </div>
                

                <div class="mod-desc"><?php echo $lang['MOD_ALP_DESC']; ?></div>
            </div>   
        </div>
    </div>
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="clos">&times;</span>
                <span class="mod-tit"><?php echo $lang['MOD_CROAT']; ?></span>
            </div>
            <div class="modal-body">
                <div class="slideshow-container">

                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia1.jpg')">
                        <div class="numbertext">1 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia2.jpg')">
                        <div class="numbertext">2 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia3.jpg')">
                        <div class="numbertext">3 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia4.jpg')">
                        <div class="numbertext">4 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia5.jpg')">
                        <div class="numbertext">5 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia6.jpg')">
                        <div class="numbertext">6 / 7</div>
                    </div>
                    <div class="mySlides2 mySlides fade" style="background-image: url('img/croatia7.jpg')">
                        <div class="numbertext">7 / 7</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                </div>
            
                <!-- <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                </div> -->
                <div class="mod-desc"><?php echo $lang['MOD_CROAT_DESC']; ?></div>
            </div>
            
        </div>
    </div>
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="clos">&times;</span>
                <span class="mod-tit"><?php echo $lang['MOD_JORDAN']; ?></span>
            </div>
            <div class="modal-body">
            <p>Trav3</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium sed nesciunt saepe, cupiditate a magni voluptate? Sed placeat dicta ab ducimus eligendi, quia, rem tenetur, necessitatibus eos unde aliquid.</p>
            </div>
            
        </div>
    </div>
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <div class="modal-header">
            <span class="clos">&times;</span>
            <h2>Будапешт</h2>
            </div>
            <div class="modal-body">
            <p>Trav4</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium sed nesciunt saepe, cupiditate a magni voluptate? Sed placeat dicta ab ducimus eligendi, quia, rem tenetur, necessitatibus eos unde aliquid.</p>
            </div>
            
        </div>
    </div>
    <div id="myModal5" class="modal">
        <div class="modal-content">
            <div class="modal-header">
            <span class="clos">&times;</span>
            <h2>Будапешт</h2>
            </div>
            <div class="modal-body">
            <p>Trav5</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium sed nesciunt saepe, cupiditate a magni voluptate? Sed placeat dicta ab ducimus eligendi, quia, rem tenetur, necessitatibus eos unde aliquid.</p>
            </div>
            
        </div>
    </div>
    <div id="myModal6" class="modal">
        <div class="modal-content">
            <div class="modal-header">
            <span class="clos">&times;</span>
            <h2>Будапешт</h2>
            </div>
            <div class="modal-body">
            <p>Trav6</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium sed nesciunt saepe, cupiditate a magni voluptate? Sed placeat dicta ab ducimus eligendi, quia, rem tenetur, necessitatibus eos unde aliquid.</p>
            </div>
            
        </div>
    </div>
    
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
    <script src="js/all.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="js/slick.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>

    
<script>
    var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
</body>
</html>