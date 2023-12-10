window.addEventListener('scroll', () => {
    const wScroll = window.scrollY;
    console.log('wScroll');
    $(".landing-page .layer-1").css({
        'transform': 'translate(0%,' + wScroll / -20 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-2").css({
        'transform': 'rotate(' + wScroll / 20 + 'deg) translate(' + wScroll / -10 + '%,' + wScroll / -12 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-3").css({
        'transform': 'rotate(' + wScroll / 20 + 'deg) translate(' + wScroll / -10 + '%,' + wScroll / -12 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-4").css({
        'transform': 'translate(0%,' + wScroll / 30 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-5").css({
        'transform': 'translate(0%,' + wScroll / -34 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-6").css({
        'transform': 'translate(0%,' + wScroll / -34 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .layer-7").css({
        'transform': 'translate(0%,' + wScroll / 8 + '%)'
    });

    $(".landing-page .jumbo-text .myname").css({
        'transform': 'translate(0%,' + wScroll / -2 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .jumbo-text .portfolio").css({
        'transform': 'translate(0%,' + wScroll / -2 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .socmed .container-socmed .github").css({
        'transform': 'translate(' + wScroll / 1.2 + '%,' + wScroll / 1 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .socmed .container-socmed .instagram").css({
        'transform': 'translate(' + wScroll / 1.2 + '%,' + wScroll / 2 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .socmed .container-socmed .twitter").css({
        'transform': 'translate(' + wScroll / 1.2 + '%,' + wScroll / -2 + '%)',
        'transition': '.7s ease-out'
    });

    $(".landing-page .socmed .container-socmed .facebook").css({
        'transform': 'translate(' + wScroll / 1.2 + '%,' + wScroll / -1 + '%)',
        'transition': '.7s ease-out'
    });

    $(".container .works-section .grid .content-1 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -90 + '%)',
        'transition': '.5s ease'
    });

    $(".container .works-section .grid .content-2 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -90 + '%)',
        'transition': '.5s ease'
    });

    $(".container .works-section .grid .content-3 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -40 + '%)',
        'transition': '.7s ease'
    });

    $(".container .works-section .grid .content-4 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -50 + '%)',
        'transition': '.5s ease'
    });

    $(".container .works-section .grid .content-5 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -47 + '%)',
        'transition': '.7s ease'
    });

    $(".container .works-section .grid .content-6 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -40 + '%)',
        'transition': '.7s ease'
    });

    $(".container .works-section .grid .content-5 .container-content .content-img img").css({
        'transform': 'translate(0%,' + wScroll / -47 + '%)',
        'transition': '.7s ease'
    });


    if (wScroll > $(".container").offset().top - 10) {
        $(".container nav").addClass("show");
        $(".landing-page .nav").addClass("remove");
    }

    if (wScroll > $(".container .about-section").offset().top - 200) {
        $(".container .about-section .grid .photo-profile").addClass("show");
        $(".container .about-section .grid .section").addClass("show");
        $(".container .about-section .grid .me").addClass("show");
        $(".container .about-section .grid .experience").addClass("show");
        $(".container .about-section .grid .education").addClass("show");
        $(".container .about-section .grid .credentials").addClass("show");
        $(".container .about-section .grid .socmed").addClass("show");
        $(".container .about-section .grid .next").addClass("show");
    }

    if (wScroll > $(".container .works-section").offset().top - 200) {
        $(".container .works-section .grid .content").addClass("show");
        $(".container .works-section .grid .title").addClass("show");
    }

    if (wScroll > $(".container .contact-section").offset().top - 200) {
        $(".container .contact-section .left-content .contact-info .left-title").addClass("show");
        $(".container .contact-section .left-content .contact-info .container-content").addClass("show");
        $(".container .contact-section .left-content .social-info .left-title").addClass("show");
        $(".container .contact-section .left-content .social-info .container-content").addClass("show");
        $(".container .contact-section .right-content").addClass("show");
    }
});

var typed = new Typed(".landing-page .typed .auto-type", {
    strings: ["Web Developer", "Mahasiswa", "Abang Kurir"],
    typeSpeed: 70,
    backSpeed: 50,
    loop: true
});

var menu_btn = document.querySelector(".landing-page nav .menu-btn")
var menu_nav = document.querySelector(".landing-page nav .main")
var home_list = document.querySelector(".landing-page nav .main .container-main .home-list")
var about_list = document.querySelector(".landing-page nav .main .container-main .about-list")
var works_list = document.querySelector(".landing-page nav .main .container-main .works-list")
var contact_list = document.querySelector(".landing-page nav .main .container-main .contact-list")

menu_btn.onclick = function () {
    menu_nav.classList.toggle("show")
}

home_list.onclick = function () {
    menu_nav.classList.remove("show")
}

about_list.onclick = function () {
    menu_nav.classList.remove("show")
}

works_list.onclick = function () {
    menu_nav.classList.remove("show")
}

contact_list.onclick = function () {
    menu_nav.classList.remove("show")
}