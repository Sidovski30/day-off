$(function() {

    $('.slider__inner').slick({
        nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',

    });

});

var tab; // заголовок вкладки
var tabContent; // блок содержащий контент вкладки
window.onload=function() {
    tabContent=document.getElementsByClassName('tabContent');
    tab=document.getElementsByClassName('tab');
    hideTabsContent(1);
}

function hideTabsContent(a) {
    for (var i=a; i<tabContent.length; i++) {
        tabContent[i].classList.remove('show');
        tabContent[i].classList.add("hide");
        tab[i].classList.remove('whiteborder');
    }
}
function showTabsContent(b){
    if (tabContent[b].classList.contains('hide')) {
        hideTabsContent(0);
        tab[b].classList.add('whiteborder');
        tabContent[b].classList.remove('hide');
        tabContent[b].classList.add('show');
    }
}



var Layout = function () {
    
    
      
    var btn = document.querySelectorAll(".box-modal");
    var modals = document.querySelectorAll('.modal');
    var spans = document.getElementsByClassName("clos");
    for (var i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modal = document.querySelector(e.target.getAttribute("href"));
            modal.style.display = "block";
        }
    }
    for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
            if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
        }
    }
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
            }
        }
    }
    
    

    $("#sendMail").on("click", function(){
        var way = $("input[name='inlineRadioOptions']:checked").val();
        var email = $("#email").val().trim();
        var date = $("#date").val().trim();
        var dateBack = $("#date_back").val().trim();
        var name = $("#name").val().trim();
        var phone = $("#phone").val().trim();
        var message = $("#message").val().trim();
        var from = $("#from").val().trim();
        var to = $("#to").val().trim();
    
        if(email == "") {
            $("#errorMess").text("Fill in the Email field");
            return false;
        } else if(name == "") {
            $("#errorMess").text("Fill in the Name field");
            return false;
        // } else if(way == "") {
        //     $("#errorMess").text("Fill in the Way field");
        //     return false;
        } else if(phone == "") {
            $("#errorMess").text("Fill in the Phone field");
            return false;
        } else if(message == "") {
            $("#errorMess").text("Fill in the Message field");
            return false;
        } else if(from == "") {
            $("#errorMess").text("Fill in the From field");
            return false;
        } else if(to == "") {
            $("#errorMess").text("Fill in the To field");
            return false;
        } else if(date == "") {
            $("#errorMess").text("Fill in the Date field");
            return false;
        }
    
        $("#errorMess").text("");
        
        $.ajax({
            url: 'form1.php',
            type: 'POST',
            cashe: false,
            data: {
                'way': way,
                'name': name,
                'date': date,
                'dateBack': dateBack,
                'email': email,
                'phone': phone,
                'message': message,
                'from': from,
                'to': to
            },
            dataType: 'html',
            beforeSend: function() {
                $("#sendMail").prop("disabled", true);
            },
            success: function(data){
                if(!data) alert("Сообщение не отправленно!");
                else $("#mailForm").trigger("reset");
                $("#sendMail").prop("disabled", false);
                $("#success_modal").modal('show');
            },
        });
    });

    $("#sendMailSmall").on("click", function(){
        var email = $("#emailSmall").val().trim();
        var name = $("#nameSmall").val().trim();
        var phone = $("#phoneSmall").val().trim();
        var message = $("#messageSmall").val().trim();
    
        if(email == "") {
            $("#errorMessSmal").text("Fill in the Email field");
            return false;
        } else if(name == "") {
            $("#errorMessSmal").text("Fill in the Name field");
            return false;
        } else if(phone == "") {
            $("#errorMessSmal").text("Fill in the Phone field");
            return false;
        } else if(message == "") {
            $("#errorMessSmal").text("Fill in the Message field");
            return false;
        }
    
        $("#errorMessSmal").text("");
        
        $.ajax({
            url: 'form2.php',
            type: 'POST',
            cashe: false,
            data: {
                'email': email,
                'phone': phone,
                'name': name,
                'message': message
            },
            dataType: 'html',
            beforeSend: function() {
                $("#sendMailSmall").prop("disabled", true);
            },
            success: function(data){
                if(!data) alert ("Сообщение не отправленно!");
                else $("#mailFormSmall").trigger("reset");
                $("#sendMailSmall").prop("disabled", false);
            },
        });
    });





    $("#faqSendMail").on("click", function(){
        var email = $("#faqEmail").val().trim();
        var name = $("#faqName").val().trim();
        var faqNamedate = $("#faqNamedate").val().trim();
        var faqReason = $("#faqReason").val().trim();
        var faqDetail = $("#faqDetail").val().trim();
    
        if(email == "") {
            $("#faqErrorMess").text("Fill in the Email field");
            return false;
        } else if(name == "") {
            $("#faqErrorMess").text("Fill in the Name field");
            return false;
        } else if(faqNamedate == "") {
            $("#faqErrorMess").text("Fill in the \"Name or Date\" field");
            return false;
        } else if(faqReason == "") {
            $("#faqErrorMess").text("Fill in the Reason field");
            return false;
        } else if(faqDetail == "") {
            $("#faqErrorMess").text("Fill in the Detail field");
            return false;
        }
    
        $("#faqErrorMess").text("");
        
        $.ajax({
            url: 'form3.php',
            type: 'POST',
            cashe: false,
            data: {
                'email': email,
                'faqNamedate': faqNamedate,
                'name': name,
                'faqReason': faqReason,
                'faqDetail': faqDetail
            },
            dataType: 'html',
            beforeSend: function() {
                $("#faqSendMail").prop("disabled", true);
            },
            success: function(data){
                if(!data) alert ("Сообщение не отправленно!");
                else $("#faqMailForm").trigger("reset");
                $("#faqSendMail").prop("disabled", false);
                $.fancybox.close();   
                $("#success_modal").modal('show');
            },
        });
    });





    
     // handle on page scroll
    var handleHeaderOnScroll = function() {
        $(window).scroll(function(){
        if ($(window).scrollTop() > 60) {
            $("body").addClass("page-on-scroll");
        } else {
            $("body").removeClass("page-on-scroll");
        }
        });
    }

    var handleOnePageHeader = function() {
        // jQuery to collapse the navbar on scroll
        if ($('.navbar').offset().top > 150) {
            $('.navbar-fixed-top').addClass('top-nav-collapse');
        }
        $(window).scroll(function() {
            if ($('.navbar').offset().top > 150) {
                $('.navbar-fixed-top').addClass('top-nav-collapse');
            } else {
                $('.navbar-fixed-top').removeClass('top-nav-collapse');
            }
        });

        var $offset = 0;
        $offset = $(".navbar-fixed-top").height()-20;
        
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('.js_nav-item a').bind('click', function(event) {
            var $position = $($(this).attr('href')).offset().top;
            $('html, body').stop().animate({
                scrollTop: $position - $offset
            }, 600);
            event.preventDefault();
        });

        var $scrollspy = $('body').scrollspy({target: '.navbar-fixed-top', offset: $offset+2});

        // Collapse Navbar When It's Clickicked
        $(window).scroll(function() {
            $('.navbar-collapse.in').collapse('hide');
        });
    }
    return {
        init: function () {
            // initial setup for fixed header
            handleHeaderOnScroll();
            handleOnePageHeader(); // initial header
            
            // handle minimized header on page scroll
            $(window).scroll(function() {
                handleHeaderOnScroll();
            });
        },

        // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        },
    };
}();
$(document).ready(function() {
    Layout.init();
});




// функция возвращает cookie с именем name, если есть, если нет, то undefined    
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
let cookiecook = getCookie("cookiecook"),
cookiewin = document.getElementsByClassName('cookie_notice')[0];    
// проверяем, есть ли у нас cookie, с которой мы не показываем окно и если нет, запускаем показ
if (cookiecook != "no") {
    // показываем    
    cookiewin.style.display="block"; 
    // закрываем по клику
    document.getElementById("cookie_close").addEventListener("click", function(){
        cookiewin.style.display="none";    
        // записываем cookie на 1 день, с которой мы не показываем окно
        let date = new Date;
        date.setDate(date.getDate() + 1);    
        document.cookie = "cookiecook=no; path=/; expires=" + date.toUTCString();
        dataLayer.push({'event': 'cookieTrue'});               
    });
} else if (cookiecook === "no"){
    dataLayer.push({'event': 'cookieTrue'});
}
