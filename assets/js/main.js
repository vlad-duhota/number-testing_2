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
step_to_step('.pop-up-step-1__item', 'data-step-1-item', 'data-step-2-list', '.pop-up-step-2__list', '.pop-up-step-2');
// step2 to step3
step_to_step('.pop-up-spoiler-content__item', 'data-step-2-item', 'data-step-3', '.pop-up-step-3__list', '.pop-up-step-3');

// step function
function step_to_step(obj, data1, data2, lists_, step) {
  $(obj).click(function () {
    const current = $(this).attr(data1);
    let lists = Array.from($(lists_));
    $(lists_).each(function (index) {
      const this_object = lists[index];
      if ($(this_object).attr(data2) == current) {
        $(lists_).removeClass('active');
        $(this_object).addClass('active');
        next_step(step, true);
      }
    });
  });
}

// location vars
var location_1;
var location_2;
var location_3;

// location 1 get name
$('.pop-up-step-1__item').click(function () {
  location_1 = $(this).find('.pop-up-step-1__text').text();
});
// location 2 get name
$('.pop-up-step-2__item').click(function () {
  location_2 = $(this).find('.spoiler__title').text();
});

$('.pop-up-spoiler-content__item').click(function () {
  location_3 = $(this).find('h4').text();
});
// location 3 get name

// step 3 to step4
$('.pop-up-step-3__item').click(function (e) {
  e.preventDefault();
  // get up-title
  const up_title = $(this).attr('data-up');
  // get test type
  const test_type = $(this).attr('data-test');
  // get time
  const time = $(this).find('.pop-up-step-3__time').text();
  // get time to set
  const step_time = `Results Whitin ${time}`;
  // get title
  const step_title = `${test_type}(Results in ${time})`;
  // set uptitle
  $('.pop-up-step-4__uptitle').text(up_title);
  // set title
  $('.pop-up-step-4__title').text(step_title);
  // set locations items
  $('.pop-up-step-4__location-item_1').text(location_1);
  $('.pop-up-step-4__location-item_2').text(location_2);
  $('.pop-up-step-4__location-item_3').text(location_3);
  // set time
  $('.pop-up-step-4__item_1').text(step_time);
  // switch to next step
  next_step('.pop-up-step-4', true);
});
// spoiler
$('.spoiler__title').click(function (e) {
  $(this).parent('.spoiler').toggleClass('active').find('.spoiler__content').slideToggle(300);
})

// array for correct dots working
var steps_array = [true, false, false, false];


// dots
$('.pop-up__dot a').click(function (e) {
  e.preventDefault();
  // get data attribute
  const step = $(this).attr('data-dot');
  // get num
  const number = step.replace('.pop-up-step-', '') - 1;
  // if we haven`t been on this step
  const can_change = steps_array[number] === true;
  if (!can_change) {
    return;
  }
  // clear classes
  $('.pop-up__dot a').removeClass('active');
  $(this).addClass('active');
  // switch to next step
  next_step(step, false);
})

// switch to next step function
function next_step(obj, dots_check) {
  $('.pop-up-step').removeClass('active');
  if (dots_check) {
    var dots__array = Array.from($('.pop-up__dot a'));
    const number = obj.replace('.pop-up-step-', '') - 1;
    const can_change = steps_array[number] === true;
    // if we hasn`t been in this step
    if (!can_change) {
      steps_array[number] = true;
    }
    $('.pop-up__dot a').each(function (index) {
      const class_cur = $(dots__array[index]).attr('data-dot').replace('.', '');
      const class_obj = $(obj).attr('class').replace('pop-up-step ', '');
      if (class_cur == class_obj) {
        // clear
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