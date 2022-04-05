document.querySelector('#menu').addEventListener('click', function () {
    document.querySelector('#menu').classList.toggle('fa-times');
    document.querySelector('.header--navbar').classList.toggle('active');
    document.querySelector('.modol').classList.toggle('activee');
})

document.querySelector('.modol').addEventListener('click', function () {
    document.querySelector('#menu').classList.remove('fa-times');
    document.querySelector('.header--navbar').classList.remove('active');
    document.querySelector('.modol').classList.remove('activee');
})
document.querySelector('.header--navbar').addEventListener('click', function (e) {
    e.stopPropagation();
})
window.addEventListener('load', function () {
    document.querySelector('#menu').classList.remove('fa-times')
    document.querySelector('.header--navbar').classList.remove('active');
    document.querySelector('.modol').classList.remove('activee');
})

window.addEventListener('scroll', function () {
    if (window.scrollY > 64) {
        document.querySelector('header').classList.add('anima');
    } else {
        document.querySelector('header').classList.remove('anima');
    }
})

$('.evaluate-row').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: true
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }
    ]
});