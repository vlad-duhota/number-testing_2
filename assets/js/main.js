// wow anim
new WOW().init();

$(document).ready(function () {
  $('select').niceSelect();
  $('.menu-btn').click(function (e) {
    $(this).toggleClass('active');
    $('.menu').toggleClass('active');
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

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// widget
$('.book').click(function (e) {
  e.preventDefault();
  $('.pop-up').addClass('pop-up_active');
  scroll(false);
});
$('.pop-up__close-btn').click(function (e) {
  e.preventDefault();
  $('.pop-up').removeClass('pop-up_active');
  scroll(true);
});
// step1 to step2
$('.pop-up-step-1__item').click(function () {
  const current = $(this).attr('data-step-1-item');
  let lists = Array.from($(".pop-up-step-2__list"));
  $(".pop-up-step-2__list").each(function (index) {
    const this_object = lists[index];
    if ($(this_object).attr('data-step-2-list') == current) {
      $(".pop-up-step-2__list").removeClass('active');
      $(this_object).addClass('active');
      next_step('.pop-up-step-2', true);
    }
  });
});

// spoiler
$('.spoiler').click(function (e) {
  $(this).toggleClass('active').find('.spoiler__content').slideToggle(300);
})

// array for correct dots working
var steps_array = [true, false, false, false];


// dots
$('.pop-up__dot a').click(function (e) {
  e.preventDefault();
  const step = $(this).attr('data-dot');
  const number = step.replace('.pop-up-step-', '') - 1;;
  const can_change = steps_array[number] === true;
  if(!can_change){
    return; 
  }
  $('.pop-up__dot a').removeClass('active');
  $(this).addClass('active');
  next_step(step, false);
})

function next_step(obj, dots_check) {
  $('.pop-up-step').removeClass('active');
  if(dots_check){
  var dots__array = Array.from($('.pop-up__dot a'));
  const number = obj.replace('.pop-up-step-', '') - 1;;
  const can_change = steps_array[number] === true;
  if(!can_change){
    steps_array[number] = true;
  }
  $('.pop-up__dot a').each(function (index) {
    const class_cur = $(dots__array[index]).attr('data-dot').replace('.', '');
    const class_obj = $(obj).attr('class').replace('pop-up-step ', '');
    if (class_cur == class_obj) {
      $('.pop-up__dot a').removeClass('active');
      $(dots__array[index]).addClass('active')
    }
  });
}
  $(obj).addClass('active');
}


// remove scroll function
function scroll(noscroll) {
  if (!noscroll) {
    $('body').addClass('no-scroll')
  } else {
    $('body').removeClass('no-scroll')
  }
}