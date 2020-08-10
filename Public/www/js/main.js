$(function () {

    var elevideo = document.getElementById("video");
    elevideo.addEventListener("play", function () { //播放开始执行的函数
        jQuery("#loading").hide();
    });

    $(".index .product .img .box-img").hover(function () {
        $(this).find("h6").hide()
    }, function () {
        $(this).find("h6").fadeIn(1500)
    })

    // wap右上导航

    $(".nav li").click(function () {
        $(this).parent().parent().removeClass("in");
    })
    // wap菜单切换
    $('.arrow').click(function () {
        $(this).toggleClass('active3');
        $(this).siblings('.mt_ul').slideToggle(300);
    })
    // 菜单切换
    $(".h_right").click(function () {
        $(".bg").animate({
            "right": "0"
        }, 200);
    })
    $('.bg_l').click(function () {
        $(".bg").animate({
            "right": "-100%"
        }, 200);
    })
    $('.menu_ul a').click(function () {
        $(".bg").animate({
            "right": "-100%"
        }, 10);
    })

    // 导航
    $(".navbar-nav>li").hover(function () {
        $(this).children(".second-nav").slideDown(500);
    }, function () {
        $(".second-nav").hide()
    });



    $(".second-nav>li").click(function () {
        $(".second-nav").hide();
    })

    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })

    // up
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $(".scroll-top").show(600)
        } else {
            $(".scroll-top").hide(600)
        }

    });

    $(".scroll-top").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });

    // top

    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".navbar").addClass("fixeds");
        } else {
            $(".goTop").fadeOut(1000);
            $(".navbar").removeClass("fixeds");
        }
    });
    if ($(window).width() <= 768) {
    }
})



var submitcount2 = 0;
function beforeSubmit2(form) {
    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.com.value == '') {
        alert('Please enter the correct Company format');
        form.com.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {
        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;
        }
    }
}



