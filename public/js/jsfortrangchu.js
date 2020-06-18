$(document).ready(function() {
    var lasttimeclick = 0;
    var autoload;
    autoload = setTimeout(function() {
        $('#bt-next').trigger('click');
    }, 3000);
    $('#bt-next').click(function(event) {
        var d = new Date();
        var n = d.getTime();
        if (n - lasttimeclick < 1000) return;
        clearTimeout(autoload);
        lasttimeclick = n;
        var slide_sau = $('.active').next();
        var indexofli = $('.active_li').index() + 1;
        if (slide_sau.length != 0) {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            slide_sau.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
            $('.banner ul li').removeClass('active_li');
            $('.banner ul li:nth-child(' + (indexofli + 1) + ')').addClass("active_li");

        } else {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
            $('.banner ul li').removeClass('active_li');
            $('.banner ul li:nth-child(1)').addClass("active_li");
        }
        autoload = setTimeout(function() {
            $('#bt-next').trigger('click');
        }, 3000);
    });
    $('#bt-prev').click(function(event) {
        var d = new Date();
        var n = d.getTime();
        if (n - lasttimeclick < 1000) return;
        clearTimeout(autoload);
        lasttimeclick = n;
        var slide_truoc = $('.active').prev();
        var indexofli = $('.active_li').index() + 1;
        if (slide_truoc.length != 0) {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            slide_truoc.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
            $('.banner ul li').removeClass('active_li');
            $('.banner ul li:nth-child(' + (indexofli - 1) + ')').addClass("active_li");
        } else {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
            $('.banner ul li').removeClass('active_li');
            $('.banner ul li:last-child').addClass("active_li");
        }
        autoload = setTimeout(function() {
            $('#bt-next').trigger('click');
        }, 3000);
    });
    $('.banner ul li').click(function() {
        var d = new Date();
        var n = d.getTime();
        if (n - lasttimeclick < 1000) return;
        lasttimeclick = n;
        var indexnow = $('.active_li').index() + 1;
        var indexclick = $(this).index() + 1;
        $('.banner ul li').removeClass('active_li');
        $(this).addClass('active_li');
        if (indexnow < indexclick) {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slide:nth-child(' + indexclick + ')').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
        } else {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(event) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slide:nth-child(' + indexclick + ')').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(event) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
        }

    });

    $('#viewmore').mouseenter(function() {
        $('#viewmore').css('background-color', 'white');
        $('#viewmore a  ').css('color', 'black');
        clearTimeout(autoload);
    });
    $('#viewmore').mouseleave(function() {
        $('#viewmore').css('background-color', 'rgb(255, 0, 0, 0.5)');
        $('#viewmore a ').css('color', 'white');
        autoload = setTimeout(function() {
            $('#bt-next').trigger('click');
        }, 3000);
    });
    $('#portal').on('click', function() {
        window.location.assign("../public/login");
    });

    $(window).on('scroll', function() {
        var x = $(window).scrollTop();
        if (x > 200) {
            $('.ontop').show();
        } else {
            $('.ontop').hide();
        }

    });

    $('#search').on('click', function() {
        $('#search-form').show();

        var searchclose = setTimeout(function() {
            $('#search-form').hide();
        }, 20000);
    });
    $('#search1').on('click', function() {
        $('#search-form1').show();

        var searchclose = setTimeout(function() {
            $('#search-form1').hide();
        }, 20000);
    });

    $(window).on('scroll', function() {
        var x = $(window).scrollTop();
        if (x > 320) {
            $('.menu-top').show();
        } else {
            $('.menu-top').hide();
        }

    });

    $('.ontop').on('click', function() {
        $("html, body").animate({ scrollTop: "0" }, 500);
    });
    AOS.init({
        duration: 1000
    });

});