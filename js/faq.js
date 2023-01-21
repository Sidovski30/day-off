var coll = document.getElementsByClassName("collapsible");           
for (var i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
}


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
var Layout = function () {
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
document.getElementById('tabs').onclick = function(event) {
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