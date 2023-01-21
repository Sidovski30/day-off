<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfers and Travels</title>
    <link rel="shortcut icon" href="img/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleCard.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
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
                                <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#modal"><?php echo $lang['CONT_US']; ?></a>
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
                        <a class="logo-wrap" href="#body">
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
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/#body"><?php echo $lang['HOME']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/travels"><?php echo $lang['TRAVELS']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/#offer"><?php echo $lang['WE_OFFER']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/#about"><?php echo $lang['ABOUT_US']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/#cont"><?php echo $lang['CONTACTS']; ?></a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="/#trans"><?php echo $lang['TRANSFERS']; ?></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <section class="section-outer secton-header">
        <div class="section-inner">
            <div class="section-header-content">
                <div class="section-header-wrapper">
                    <div class="section-header__tittle">
                        <?php echo $lang['FAQ']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tabs">
        <div class="container titles">
            <div class="tab whiteborder"><?php echo $lang['FAQ_TRAV']; ?></div>
            <div class="tab"><?php echo $lang['FAQ_TRAN']; ?></div>
        </div>
        <div class="faq-trav tabContent">
            <div class="container">
                <h2><?php echo $lang['FAQ_TIT1']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q1']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC1']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q2']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC2']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q3']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC3']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q4']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC4']; ?></p>    
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q5']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC5']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q6']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC6']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q7']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC7']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q8']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC8']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q9']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC9']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q10']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC10']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q11']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC11']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q12']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC12']; ?></p>
                </div>
                <h2><?php echo $lang['FAQ_TIT2']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q13']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC13']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q14']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC14']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q15']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC15']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q16']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC16']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q17']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC17']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q18']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC18']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q19']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC19']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q20']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC20']; ?></p>
                </div>
                <h2><?php echo $lang['FAQ_TIT3']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q21']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC21']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q22']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC22']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q23']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC23']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q24']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC24']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q25']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC25']; ?></p>
                </div>
                <h2><?php echo $lang['FAQ_TIT4']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q26']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC26']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q27']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC27']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q28']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC28']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q29']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC29']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q30']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC30']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q31']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC31']; ?></p>
                </div>
                <h2><?php echo $lang['FAQ_TIT5']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q32']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC32']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q33']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC33']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q34']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC34']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q35']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC35']; ?></p>
                </div>
                <h2><?php echo $lang['FAQ_TIT6']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q36']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC36']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q37']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC37']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q38']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC38']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q39']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC39']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q40']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC40']; ?><a data-fancybox data-src="#modalCompl" href="javascript:;" href="#"><?php echo $lang['FAQ_COMPL_FORM']; ?></a>.</p>
                </div>
            </div>
        </div>

        <div class="faq-tran tabContent">
            <div class="container">
                <h2><?php echo $lang['FAQ_TIT1']; ?></h2>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q1']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC1']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q2']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC3']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q3']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC3']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q4']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC4']; ?></p>    
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q5']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC5']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q6']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC8']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q7']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC7']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q8']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC10']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q9']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC9']; ?></p>
                </div>
                <div class="container">
                    <h2><?php echo $lang['FAQ_TIT2']; ?></h2>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q13']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC10']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q11']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC11']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q15']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC12']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q16']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC16']; ?></p>    
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q17']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC17']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q18']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC18']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q16']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC16']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q17']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC17']; ?></p>
                </div>
                <div class="container">
                    <h2><?php echo $lang['FAQ_TIT3']; ?></h2>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q21']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC10']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q22']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC22']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q23']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC23']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q24']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC21']; ?></p>    
                </div>
                <div class="container">
                    <h2><?php echo $lang['FAQ_TIT5']; ?></h2>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q32']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC22']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q33']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC33']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q34']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC34']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q35']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC25']; ?></p>    
                </div>
                <div class="container">
                    <h2><?php echo $lang['FAQ_TIT6']; ?></h2>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q36']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAN_DESC26']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q27']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC37']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q38']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC38']; ?></p>
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAN_Q29']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC39']; ?></p>    
                </div>
                <button class="collapsible"><?php echo $lang['FAQ_TRAV_Q40']; ?></button>
                <div class="content">
                    <p><?php echo $lang['FAQ_TRAV_DESC40']; ?><a data-fancybox data-src="#modalCompl" href="javascript:;" href="#"><?php echo $lang['FAQ_COMPL_FORM']; ?></a>.</p>   
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
    <div id="modal">
        <div class="title"><?php echo $lang['CONT_US']; ?></div>
        <form id="mailFormSmall">
            <input type="text" id="nameSmall" placeholder="<?php echo $lang['FORM_NAME']; ?>">
            <input type="email" name="mail" id="emailSmall" required placeholder="Email">
            <input type="text" id="phoneSmall" placeholder="<?php echo $lang['FORM_PHONE']; ?>">
            <textarea type="text" id="messageSmall" placeholder="<?php echo $lang['FORM_INFO']; ?>"></textarea>
            <button type="button" id="sendMailSmall" class="btn btn-primary"><?php echo $lang['FORM_SEND']; ?></button>
        </form>
    </div>
    <div id="modalCompl">
        <form id="faqMailForm">
            <label for="name"><?php echo $lang['FORM_NAME']; ?> <small>(<?php echo $lang['FAQ_COMPL_FORM_NAME']; ?>)</small></label>
            <input type="text" id="faqName" name="name"><br>
            <label for="mail">Email <small>(<?php echo $lang['FAQ_COMPL_FORM_EMAIL']; ?>)</small></label>
            <input type="email" name="mail" id="faqEmail"><br>
            <label for="name-date"><?php echo $lang['FAQ_COMPL_FORM_NAME_DATE']; ?></label>
            <textarea type="text" name="name-date" id="faqNamedate"></textarea><br>
            <label for="reason"><?php echo $lang['FAQ_COMPL_FORM_REASON']; ?></label>
            <textarea type="text" name="reason" id="faqReason"></textarea><br>
            <label for="detail"><?php echo $lang['FAQ_COMPL_FORM_DETAIL']; ?></label>
            <textarea type="text" name="detail" id="faqDetail"></textarea><br>

            <button type="button" id="faqSendMail" class="btn btn-primary"><?php echo $lang['FORM_SEND']; ?></button>
            <div id="faqErrorMess"></div>
        </form>
    </div>
    <div id="success_modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <span class="close" data-toggle="modal" data-target="#success_modal">&times;</span>
                <?php echo $lang['FAQ_FORM_SUCCESS_MODAL']; ?>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/faq.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/slick.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>
    
</body>
</html>