import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import $ from 'jquery';
window.$ = $;
window.jQuery = $;

jQuery(function($) {
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 50) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  });
});

jQuery(function($) {
  // باز کردن مدال
  $('.open-modal').on('click', function () {
    const target = $(this).data('target');
    $(target).fadeIn();
  });

  // بستن مدال
  $('.modal').on('click', function (e) {
    if ($(e.target).hasClass('modal') || $(e.target).hasClass('close-modal')) {
      $(this).fadeOut();
    }
  });
});

jQuery(function($) {
  $('.tab-btn').on('click', function () {
    const target = $(this).data('tab');

    // دکمه‌ها
    $('.tab-btn').removeClass('active-tab');
    $(this).addClass('active-tab');

    // محتوا
    $('.tab-content').addClass('hidden');
    console.log('target:', target); // باید مثلا "tab1" یا "tab2" بده

    $('#' + target).removeClass('hidden');
  });
});



new Swiper('.fw-swiper', {

  slidesPerView: 1, // پیش‌فرض برای موبایل
  spaceBetween: 20,
  breakpoints: {
    640: { slidesPerView: 1 }, // برای صفحه نمایش کوچکتر
    768: { slidesPerView: 2 }, // نمایش ۲ اسلاید در صفحات تبلت
    1024: { slidesPerView: 3.5 }, // نمایش ۳ اسلاید در صفحات بزرگتر
  },
  navigation: {
    nextEl: ".fw-swiper-button-next",
    prevEl: ".fw-swiper-button-prev",
  },
});

new Swiper('.swiper-hero', {
  loop: true,

  autoplay: {
    delay: 2500,
  },
  spaceBetween: 10,
  breakpoints: {
    640: { slidesPerView: 2 }, // برای صفحه نمایش کوچکتر
    768: { slidesPerView: 2 }, // نمایش ۲ اسلاید در صفحات تبلت
    1024: { slidesPerView: 2.3 }, // نمایش ۳ اسلاید در صفحات بزرگتر
  },

});

new Swiper('.swiper-review', {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  slidesPerView: 1, // پیش‌فرض برای موبایل
  spaceBetween: 50,
  breakpoints: {
    640: { slidesPerView: 1 }, // برای صفحه نمایش کوچکتر
    768: { slidesPerView: 2 }, // نمایش ۲ اسلاید در صفحات تبلت
    1024: { slidesPerView: 1.9 }, // نمایش ۳ اسلاید در صفحات بزرگتر
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,  // قابل کلیک بودن
  },


});




