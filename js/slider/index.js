import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

class Slider {
    showSlider() {
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3, 
            width: 1400,

            freeMode: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'custom'
            },
            lazy: {
                loadPrevNext: true,
                loadPrevNextAmount: 3
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            autoplay: {
                delay: 2000,
                pauseOnMouseEnter: true,
                disableOnInteraction: false,
            },

        });
    }
}

export default Slider

const slider = new Slider()

slider.showSlider()
