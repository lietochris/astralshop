require('./bootstrap');

import {
    Swiper,
    Navigation,
    Pagination,
    Scrollbar,
    EffectCoverflow
} from 'swiper/js/swiper.esm.js';

Swiper.use([Navigation, Pagination, Scrollbar, EffectCoverflow]);

var swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
