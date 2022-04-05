// wow anim
new WOW().init();

$(document).ready(function () {
  $('select').niceSelect();
  $('.menu-btn').click(function (e) {
    $(this).toggleClass('active');
    $('.menu').toggleClass('active');
  });
  $('.book').click(function (e) {
    e.preventDefault();
    $('.pop-up').addClass('pop-up_active');
  });
  $('.pop-up__close-btn').click(function (e) {
    e.preventDefault();
    $('.pop-up').removeClass('pop-up_active');
  });
});

let options = {
  root: null,
  rootMargin: '5px',
  threshold: 0.5
}

let observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      $('.what .animated').addClass('active')
    }
  })
}, options);
let target = document.querySelector('.what')
observer.observe(target);

$('.companies__slider').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: false,
  dots: true,
  speed: 1500,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 768,
      settings: {
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 578,
      settings: {
        speed: 750,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.spoiler').click(function (e) {
  $(this).toggleClass('active').find('.spoiler__content').slideToggle(300);
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// widget
$('.pop-up-step-1__item').click(function () {
  const current = $(this).attr('data-step-1-item');
  let lists = Array.from($(".pop-up-step-2__list"));
  $(".pop-up-step-2__list").each(function (index) {
    const this_object = lists[index];
    if (this_object.getAttribute('data-step-2-list') == current) {
      $(".pop-up-step-2__list").removeClass('active');
      this_object.classList.add('active');
      next_step('.pop-up-step-2');
    }
  });
});

function next_step(obj){
  $('.pop-up-step').removeClass('active');
  $(obj).addClass('active');
}
