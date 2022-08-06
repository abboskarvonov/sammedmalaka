document.addEventListener('DOMContentLoaded', () => {
    const loader = document.querySelector('.loader')

    setInterval(function() {
        setTimeout(() => {
            loader.style.transform = "translateY(-100%)"
        }, 500)
    }, 10)
})

if(window.innerWidth <= 590) {
    const bgColor = document.querySelector('.bg-navbar')
    bgColor.classList.add('bg-color')
}

// Swiper
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Link Swiper
var swiper = new Swiper(".linkSwiper", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

// Scroll Up

function scrollUp() {
    const scrollUp = document.querySelector('.scroll-up')
    if (this.scrollY >= 550) {
        scrollUp.classList.add('show-scroll')
    } else {
        scrollUp.classList.remove('show-scroll')
    }
}

if(scrollY >= 550) {
    const scrollUp = document.querySelector('.scroll-up')
    scrollUp.classList.add('show-scroll')
}

window.addEventListener('scroll', scrollUp)

// Special 
const plusFont = document.querySelector('#plusFont')
const defaultFont = document.querySelector('#defaultFont')
const minusFont = document.querySelector('#minusFont')
const adjust = document.querySelector('#adjust')
const imgFunc = document.querySelector('#imgFunc')
const allImages = document.querySelectorAll('img')
const imgNone = document.querySelector('#imgNone')

y = 16
plusFont.addEventListener('click', () => {
    y += 2
    document.body.style.fontSize = y + "px"
})

defaultFont.addEventListener('click', () => {
    y = 16
    document.body.style.fontSize = y + 'px'
})

minusFont.addEventListener('click', () => {
    y -= 2
    document.body.style.fontSize = y + 'px'
})

adjust.addEventListener('click', () => {
    document.querySelector('#html').classList.toggle('adjust')
})

imgFunc.addEventListener('click', () => {
    allImages.forEach(img => img.classList.toggle('d-none'))
    imgNone.classList.add('d-block')
    imgNone.classList.remove('d-none')
})

$(document).ready(function () {
    //the trigger on hover when cursor directed to this class
    $(".core-menu li").hover(
        function () {
            //i used the parent ul to show submenu
            $(this).children('ul').slideDown('fast');
        },
        //when the cursor away 
        function () {
            $('ul', this).slideUp('fast');
        });
    //this feature only show on 600px device width
    $(".hamburger-menu").click(function () {
        $(".burger-1, .burger-2, .burger-3").toggleClass("open");
        $(".core-menu").slideToggle("fast");
    });
});