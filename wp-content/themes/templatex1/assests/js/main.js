window.onload = () => {
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".strelka",
            prevEl: "",
        },
        breakpoints: {
            980: {
                slidesPerView: 1,
                pagination: {
                    el: ".swiper-paginations",
                    clickable: true,
                },
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 1.5,
                pagination: {
                    el: ".swiper-paginations",
                    clickable: true,
                },
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1.5,
                pagination: {
                    el: ".swiper-paginations",
                    clickable: true,
                },
            },
            // when window width is >= 320px
            360: {
                slidesPerView: 1.5,
                pagination: {
                    el: ".swiper-paginations",
                    clickable: true,
                },
            },
        }
    });
    let sliderMobile = new Swiper(".mobile-swiper", {
        slidesPerView: 1.2,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".mobile-pagination",
            clickable: true,
        },
    });
    let brandSwiper = new Swiper(".brand-slider", {
        slidesPerView: 5,
        spaceBetween: 8,
        slidesPerGroup: 1,
        navigation: {
            nextEl: ".brand-prev-btn ",
            prevEl: ".brand-next-btn",
        },
        breakpoints: {
            999: {
                slidesPerView: 5,
                pagination: false,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 1.5,
                pagination: {
                    el: ".swiper-pagination-review",
                    clickable: true,
                },
            },
                320: {
                    slidesPerView: 1.5,
                    pagination: {
                        el: ".swiper-pagination-review",
                        clickable: true,
                    },
                },
            },
    });
    reviewSlider()
    if(window.screen.width <= 550) {
       let  swiperMobile =  new Swiper(".swiperMobile", {
           slidesPerView: 1,
           spaceBetween: 30,
           slidesPerGroup: 1,
           pagination: {
               el: ".swiper-pagination-mobile",
               clickable: true,
           },
           navigation: {
               nextEl: ".brand-prev-btn ",
               prevEl: ".brand-next-btn",
           },
       });
    }
}
function reviewSlider () {
    let reviewSwiper = new Swiper(".review-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        navigation: {
            nextEl: ".review-prev-btn",
            prevEl: ".review-next-btn",
        },
        breakpoints: {
            999: {
                slidesPerView: 3,
                pagination: false,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 1,
                pagination: {
                    el: ".swiper-pagination-rev",
                    clickable: true,
                },
            },
            320: {
                slidesPerView: 1,
                pagination: {
                    el: ".swiper-pagination-rev",
                    clickable: true,
                },
            },
        },
    });
}
let reviewBtn = document.querySelectorAll('.typeNav p');
let review = document.querySelectorAll('.review-slider .swiper-slide');
reviewBtn.forEach( btn => {
    btn.addEventListener('click', e => {
        let category = e.target.closest('.typeNav').getAttribute('data-nav');
        e.stopPropagation()
        reviewBtn.forEach( btn => {
            btn.classList.remove('active')
        })
        e.target.classList.add('active')
        review.forEach( rev => {
            if (category != 'clients') {
            rev.style.display = 'none'
            if(rev.getAttribute('data-nav') === category) {
                rev.style.display = 'flex'
            }} else {
                rev.style.display = 'flex'
            }
        })
        reviewSlider()
    })
})
document.querySelector('.menu__btn').addEventListener('click', e => {
        e.stopPropagation();
    if (e.target.classList.contains('active')) {
        e.target.classList.remove('active')
        console.log('close')
    } else {
        e.target.classList.add('active')
        console.log('open')
    }
})
let menuBtn = document.querySelectorAll('.menu__item');
menuBtn.forEach( e => {
    e.addEventListener('click',  e => {
        document.querySelector('.menu__btn').classList.remove('active')
    })
})
function closeModal() {
    document.querySelector('.modal').style.display = 'none'
    document.querySelector('body').style.overflow = ''
}
document.querySelector('.modal .close').addEventListener('click', e=> {
    closeModal()
})
document.querySelector('.modal .modalBtn').addEventListener('click', e=> {
    closeModal()
})
let form = document.querySelectorAll('.form-site')
form.forEach( e => {
    e.addEventListener('submit', e=>{
        e.preventDefault();
        document.querySelector('.modal').style.display = 'block'
        document.querySelector('body').style.overflow = 'hidden'
    })
})

let reviews =  document.querySelectorAll('.otzyv');
reviews.forEach(review => {
    review.addEventListener('click', e=> {
        let parent = e.currentTarget;
       const src = parent.querySelector('.avatarIMG').src,
       name = parent.querySelector('.nameOtzyv').innerHTML,
       text = parent.querySelector('.otzyvText p').innerHTML,
       date = parent.querySelector('.otzyvDate p').innerHTML;
        document.getElementById('reviewAvatar').src = src;
        document.getElementById('reviewName').innerHTML = name;
        document.querySelector('#reviewText p').innerHTML = text;
        document.querySelector('#reviewDate p').innerHTML = date;
        document.querySelector('.overlay').classList.add('active')
    })
})

document.querySelector('.modal-wrapper .close').addEventListener('click', e=> {
    document.querySelector('.overlay').classList.remove('active')
})

let deliveryBtns = document.querySelectorAll('.dostavkaNav-item');
let deliveryContent = document.querySelectorAll('.textDostavka p');
deliveryBtns.forEach( btn => {
    btn.addEventListener('click', e => {
        deliveryBtns.forEach(e=>{e.classList.remove('active')})
        deliveryContent.forEach(e=>{e.classList.remove('active')})
        e.target.classList.add('active')
        let attr = e.target.getAttribute('data-content')
        document.querySelector(`[data-cont="${attr}"]`).classList.add('active')
    })
})

console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery);//узнать версию JQuery

$(".awards_btn").click(()=>{
    $(".award_image_not_view").slideToggle(1000)
    $(".award_image_not_view").css('display','flex')
})
    $(".awards_btn_mobile").click(()=>{
        $(".award_image_not_view").slideToggle(1000)
        $(".award_image_not_view").css('display','flex')
    })
}); //конец ready