<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfers and Travels</title>
    <meta name="Description" content="">
    <meta property="og:title" content="Transfers and Travels">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://dayoff-keakow.com">
    <link rel="shortcut icon" href="img/logo.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/the-datepicker.css">
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
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
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
                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#">
                            <img class="logo-img logo-img-main" src="img/day-off_logo.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/logo.png" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body"><?php echo $lang['HOME']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#trans"><?php echo $lang['TRANSFERS']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#offer"><?php echo $lang['WE_OFFER']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about"><?php echo $lang['ABOUT_US']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#cont"><?php echo $lang['CONTACTS']; ?></a></li>  
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/travels"><?php echo $lang['TRAVELS']; ?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <section class="slider slideshow">
            <div class="slider__inner">
                <div class="item slider__item-content one"> 
                    <div class="slider__item">
                        <div class="slider__text">
                            <?php echo $lang['CONTENT_DESCRIPTION']; ?>
                        </div>
                        <a data-fancybox data-src="#main-modal" href="javascript:;" class="slider__btn default-btn">
                            <?php echo $lang['HERE_GOES']; ?>
                        </a>
                    </div>
                </div>
                
                <div class="item slider__item-content three">
                    <div class="slider__item">
                        <div class="slider__text">
                            <?php echo $lang['CONTENT_DESCRIPTION3']; ?>
                        </div>
                        <a data-fancybox data-src="#main-modal" href="javascript:;" class="slider__btn default-btn">
                            <?php echo $lang['HERE_GOES']; ?>
                        </a>
                    </div>
                </div>
                <!-- <div class="item slider__item-content four">
                    <div class="slider__item">
                        <div class="slider__text">
                            <?php echo $lang['CONTENT_DESCRIPTION4']; ?>
                        </div>
                        <a data-fancybox data-src="#main-modal" href="javascript:;" class="slider__btn default-btn">
                            <?php echo $lang['HERE_GOES']; ?>
                        </a>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>
    <section id="trans" class="trans-sect">
            <div class="title">
                <h2><?php echo $lang['TRANSFERS']; ?></h2>
            </div>
            <div class="transfers">
                <?php echo $lang['TRANS_TIT']; ?>
                <div class="tran-cont">
                    <h3><?php echo $lang['POP_DIR']; ?></h3>
                    <div class="directions">
                        <span><?php echo $lang['BALICE']; ?></span>
                        <span>80 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['KATOWICE']; ?></span>
                        <span>450 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['WARSAW']; ?></span>
                        <span>1000 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['AUSCH']; ?></span>
                        <span>300 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['WIEL']; ?></span>
                        <span>130 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['ZAKOP']; ?></span>
                        <span>300 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['BERLIN']; ?></span>
                        <span>1500 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['VIENA']; ?></span>
                        <span>1500 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['BUDAPEST']; ?></span>
                        <span>1500 zl (PLN)</span>
                    </div>
                    <div class="directions">
                        <span><?php echo $lang['PRAG']; ?></span>
                        <span>1400 zl (PLN)</span>
                    </div>
                    <?php echo $lang['ONE_WAY_PRICE']; ?>
                </div>
            </div>           
    </section>
    
    <section id="offer" class="services">
        <div class="title">
            <h2><?php echo $lang['OFFER']; ?></h2>
        </div>
        <div class="container" id="tabs">
            <div class="tabs">
                <div class="tab whiteborder">
                    <?php echo $lang['OFFER_PRIV']; ?>
                </div>
                <div class="tab">
                    <?php echo $lang['OFFER_COMP']; ?>
                </div>
            </div>
            <div class="tabContent">
                
                
                <div class="services__inner">
                    <div class="services-item">
                        <div class="services__block">
                            <?php echo $lang['OFFER_TRAN']; ?>
                        </div>
                        <div class="services__text">
                            <ul><?php echo $lang['OFFER_PRIV_TRAN']; ?></ul>
                        </div>
                        </div>
                    <div class="services-item">
                        <div class="services__block">
                            <?php echo $lang['OFFER_TRAV']; ?>
                        </div>
                        <div class="services__text">
                            <ul><?php echo $lang['OFFER_PRIV_TRAV']; ?></ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="tabContent">
                                  
                <div class="services__inner">
                    <div class="services-item">
                        <div class="services__block">
                            <?php echo $lang['OFFER_TRAN']; ?>
                        </div>
                        <div class="services__text">
                            <ul><?php echo $lang['OFFER_COMP_TRAN']; ?></ul>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="services__block">
                            <?php echo $lang['OFFER_TRAV']; ?>
                        </div>
                        <div class="services__text">
                            <ul><?php echo $lang['OFFER_COMP_TRAV']; ?></ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <section class="serv-adv">
    
                <div class="title">
                    <h2><?php echo $lang['OFFER_ADV']; ?></h2>
                </div>
                <div class="container">
                    <div class="serv">
                        <div class="serv-box">
                        <i class="fa fa-hand-holding-usd"></i>
                            <div><?php echo $lang['OFFER_ADV1']; ?></div>
                        </div>
                        <div class="serv-box">
                            <i class="fas fa-dollar-sign"></i>
                            <div><?php echo $lang['OFFER_ADV2']; ?></div>
                        </div>
                        <div class="serv-box">
                            <i class="fas fa-users"></i>
                            <div><?php echo $lang['OFFER_ADV3']; ?></div>
                        </div>
                        <div class="serv-box">
                            <i class="fas fa-globe-europe"></i>
                            <div><?php echo $lang['OFFER_ADV4']; ?></div>
                        </div>
                        <div class="serv-box">
                            <i class="fas fa-car-side"></i>
                            <div><?php echo $lang['OFFER_ADV5']; ?></div>
                        </div>
                        <div class="serv-box">
                            <div class="serv-icon"><i class="fa fa-life-ring" aria-hidden="true"></i></div>
                            <div><?php echo $lang['OFFER_ADV6']; ?></div>
                        </div>
                    </div>
                        
                    <div class="serv-note">
                        <?php echo $lang['OFFER_ADV8']; ?><br>
                        <?php echo $lang['OFFER_ADV9']; ?>
                    </div>
                </div>
                
            
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
    
    
    <div class="cookie_notice">
        <?php echo $lang['COOKIES']; ?>
        <div>
            <a class="cookie_btn" id="cookie_close" href="#close"><?php echo $lang['COOKIES_AGREE']; ?></a>
            <a class="cookie_btn" href="#politika"><?php echo $lang['COOKIES_POLICY']; ?></a>
        </div>
    </div>



    <div id="modal">
        <div class="title"><?php echo $lang['CONT_US']; ?></div>
        <form id="mailFormSmall">
            <input type="text" required id="nameSmall" placeholder="<?php echo $lang['FORM_NAME']; ?>*">
            <input type="email" required name="mail" id="emailSmall" required placeholder="Email*">
            <input type="text" required id="phoneSmall" placeholder="<?php echo $lang['FORM_PHONE']; ?>*">
            <textarea type="text" id="messageSmall" placeholder="<?php echo $lang['FORM_INFO']; ?>"></textarea>
            <button type="button" id="sendMailSmall" class="btn btn-primary"><?php echo $lang['FORM_SEND']; ?></button>
            <div id="errorMessSmall"></div>
        </form>
    </div>

    <div id="main-modal">
    <h3><?php echo $lang['FORM_TIT']; ?></h3>
    <form id="mailForm">
        <ul class="radio-trip">
        <li>
            <input type="radio" checked id="a25" value="One way" name="inlineRadioOptions" />
            <label for="a25"><?php echo $lang['FORM_WAY']; ?></label>
        </li>
        <li>
            <input type="radio" id="a50" value="Return trip" name="inlineRadioOptions" />
            <label for="a50"><?php echo $lang['FORM_TRIP']; ?></label>
        </li>
        </ul>
        <!-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" value="One way">
            <label class="form-check-label" for="inlineRadio1"><?php echo $lang['FORM_WAY']; ?></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Return trip">
            <label class="form-check-label" for="inlineRadio2"><?php echo $lang['FORM_TRIP']; ?></label>
        </div> -->
        <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $lang['FORM_NAME']; ?>">
        <input type="text" class="form-control" name="date" id="date" placeholder="<?php echo $lang['FORM_DATE']; ?>">
        <input type="text" class="form-control"  name="date_back" id="date_back" placeholder="<?php echo $lang['FORM_DATE_BACK']; ?>">
        <input type="text" class="form-control" name="from" id="from" placeholder="<?php echo $lang['FORM_FROM']; ?>">
        <input type="text" class="form-control" name="to" id="to" placeholder="<?php echo $lang['FORM_TO']; ?>">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        <input type="tel" class="form-control" name="tel" id="phone" placeholder="<?php echo $lang['FORM_PHONE']; ?>">
        <textarea name="message" class="form-control" id="message" placeholder="<?php echo $lang['FORM_INFO']; ?>"></textarea>
        <button type="button" class="btn" id="sendMail"><?php echo $lang['FORM_SEND']; ?></button>
    </form>
    <div id="errorMess"></div>
    </div>

    <div id="success_modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <span class="clos" data-toggle="modal" data-target="#success_modal">&times;</span>
                <?php echo $lang['FORM_SUCCESS_MODAL']; ?>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
    <script src="js/all.js"></script>
    <script src="js/the-datepicker.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="js/slick.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>



    <!-- <script>
        const but = document.querySelector('.header__btn');
        but.addEventListener('click', function() {
            gtag('event', 'click', 
                {'event_category': 'button'}
                )});
    </script> -->






<script>
document.addEventListener('DOMContentLoaded', function() {
  var checkbox = document.querySelector('#a50');
  var checkboxTwo = document.querySelector('#a25');
  if(checkboxTwo.checked) {
    document.getElementById('date_back').style="display: none";
  };
    checkbox.addEventListener('change', function(event) {
      if (event.target.checked) {
        document.getElementById('date_back').style="display: block";
      }
    });
    checkboxTwo.addEventListener('change', function(event) {
      if (event.target.checked) {
        document.getElementById('date_back').style="display: none";
      }
    });
    
}, false);
const input = document.getElementById('date');
const inputBack = document.getElementById('date_back');
const datepicker = new TheDatepicker.Datepicker(input);
datepicker.render();
const datepickerBack = new TheDatepicker.Datepicker(inputBack);
datepickerBack.render();
</script>
    <script type="text/javascript">
    $(window).on('resize orientationchange', function() {
        $('.slider.slideshow').slick('setPosition');
    });
    $(document).on('ready', function() {

        
        $('.slider.slideshow').slick({
            draggable: true,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            fade: true,
            speed: 500,
            infinite: true,
            cssEase: 'ease-in-out',
            touchThreshold: 100
        });

    });
</script>
<script>
    document.getElementById('offer').onclick = function(event) {
    var target = event.target;
    if (target.className=='tab') {
        for (var i=0; i<tab.length; i++) {
            if (target == tab[i]) {
                showTabsContent(i);
                break;
            }
        }
    }
}
</script>
</body>
</html>