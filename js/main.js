
$(document).ready(function() {

AOS.init({
  duration: 800,
  easing: 'slide',
})

;(function ($) {
  'use strict'

  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll',
  })

  var fullHeight = function () {
    $('.js-fullheight').css('height', $(window).height())
    $(window).resize(function () {
      $('.js-fullheight').css('height', $(window).height())
    })
  }
  fullHeight()

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($('#ftco-loader').length > 0) {
        $('#ftco-loader').removeClass('show')
      }
    }, 1)
  }
  loader()

  // Scrollax
  $.Scrollax()

  // Burger Menu
  var burgerMenu = function () {
    $('body').on('click', '.js-fh5co-nav-toggle', function (event) {
      event.preventDefault()

      if ($('#ftco-nav').is(':visible')) {
        $(this).removeClass('active')
      } else {
        $(this).addClass('active')
      }
    })
  }
  burgerMenu()

  var onePageClick = function () {
    $(document).on('click', '#ftco-nav a[href^="#"]', function (event) {
      event.preventDefault()

      var href = $.attr(this, 'href')

      $('html, body').animate(
        {
          scrollTop: $($.attr(this, 'href')).offset().top - 70,
        },
        500,
        function () {
          // window.location.hash = href;
        }
      )
    })
  }

  onePageClick()

  var carousel = function () {
    $('.home-slider').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      autoplayHoverPause: false,
      items: 1,
      touchDrag: true, 
      mouseDrag: true,

      navText: [
        "<span class='ion-md-arrow-back'></span>",
        "<span class='ion-chevron-right'></span>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    })
  }
  carousel()

  $('nav .dropdown').hover(
    function () {
      var $this = $(this)
      // 	 timer;
      // clearTimeout(timer);
      $this.addClass('show')
      $this.find('> a').attr('aria-expanded', true)
      // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
      $this.find('.dropdown-menu').addClass('show')
    },
    function () {
      var $this = $(this)
      // timer;
      // timer = setTimeout(function(){
      $this.removeClass('show')
      $this.find('> a').attr('aria-expanded', false)
      // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
      $this.find('.dropdown-menu').removeClass('show')
      // }, 100);
    }
  )

  $('#dropdown04').on('show.bs.dropdown', function () {
    console.log('show')
  })

  // scroll
  var scrollWindow = function () {
    $(window).scroll(function () {
      var $w = $(this),
        st = $w.scrollTop(),
        navbar = $('.ftco_navbar'),
        sd = $('.js-scroll-wrap')

      if (st > 150) {
        if (!navbar.hasClass('scrolled')) {
          navbar.addClass('scrolled')
        }
      }
      if (st < 150) {
        if (navbar.hasClass('scrolled')) {
          navbar.removeClass('scrolled sleep')
        }
      }
      if (st > 350) {
        if (!navbar.hasClass('awake')) {
          navbar.addClass('awake')
        }

        if (sd.length > 0) {
          sd.addClass('sleep')
        }
      }
      if (st < 350) {
        if (navbar.hasClass('awake')) {
          navbar.removeClass('awake')
          navbar.addClass('sleep')
        }
        if (sd.length > 0) {
          sd.removeClass('sleep')
        }
      }
    })
  }
  scrollWindow()

  var counter = function () {
    $('#section-counter, .hero-wrap, .ftco-counter, .ftco-about').waypoint(
      function (direction) {
        if (
          direction === 'down' &&
          !$(this.element).hasClass('ftco-animated')
        ) {
          var comma_separator_number_step =
            $.animateNumber.numberStepFactories.separator(',')
          $('.number').each(function () {
            var $this = $(this),
              num = $this.data('number')
           
            $this.animateNumber(
              {
                number: num,
                numberStep: comma_separator_number_step,
              },
              7000
            )
          })
        }
      },
      { offset: '95%' }
    )
  }
  counter()

  var contentWayPoint = function () {
    var i = 0
    $('.ftco-animate').waypoint(
      function (direction) {
        if (
          direction === 'down' &&
          !$(this.element).hasClass('ftco-animated')
        ) {
          i++

          $(this.element).addClass('item-animate')
          setTimeout(function () {
            $('body .ftco-animate.item-animate').each(function (k) {
              var el = $(this)
              setTimeout(
                function () {
                  var effect = el.data('animate-effect')
                  if (effect === 'fadeIn') {
                    el.addClass('fadeIn ftco-animated')
                  } else if (effect === 'fadeInLeft') {
                    el.addClass('fadeInLeft ftco-animated')
                  } else if (effect === 'fadeInRight') {
                    el.addClass('fadeInRight ftco-animated')
                  } else {
                    el.addClass('fadeInUp ftco-animated')
                  }
                  el.removeClass('item-animate')
                },
                k * 50,
                'easeInOutExpo'
              )
            })
          }, 100)
        }
      },
      { offset: '95%' }
    )
  }
  contentWayPoint()

  // magnific popup
  $('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 300,
    },
  })

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false,
  })
})(jQuery)



/*----------------------------------------------------*/
    /*  Isotope Fillter js
    /*----------------------------------------------------*/
 // Wait for the DOM to load
 $(document).ready(function() {
  $('.filter-button').on('click', function() {
    var filterValue = $(this).attr('data-filter');

    // Filter the items based on the data-filter attribute
    if(filterValue === 'all') {
      $('.filter').show();
    } else {
      $('.filter').not('.' + filterValue).hide();
      $('.filter').filter('.' + filterValue).show();
    }

    // Change the button classes for active/inactive states
    $('.filter-button').removeClass('btn-primary').addClass('btn-default'); // Set all buttons to default
    $(this).removeClass('btn-default').addClass('btn-primary'); // Set the clicked button to primary

    // Refresh AOS to re-trigger the animations
    AOS.refresh();
  });

  // Initialize AOS
  AOS.init({
    duration: 800, // or any other options you want to use
    easing: 'slide'
  });

  // Initially show all items and set the first button as active
  $('.filter').show();
  $('.filter-button:first').removeClass('btn-default').addClass('btn-primary');
});


});


$(document).ready(function() {
  $('.popup-link').magnificPopup({
      type: 'image',
      gallery:{
          enabled: true
      }
  });
});
/*----------------------------------------------------*/
    /*  skills scrolling js
    /*----------------------------------------------------*/

    document.addEventListener('DOMContentLoaded', (event) => {
      const counters = document.querySelectorAll('.progress-bar');
      const animationDuration = 3000;
  
      const animateCounters = () => {
          counters.forEach(counter => {
              const animate = () => {
                  const value = +counter.getAttribute('aria-valuenow');
                  const max = +counter.getAttribute('aria-valuemax');
                  let currentValue = 0;
  
                  const increment = value / (animationDuration / 50);
  
                  const timer = setInterval(() => {
                      currentValue += increment;
                      if (currentValue > value) {
                          currentValue = value;
                          clearInterval(timer);
                      }
                      counter.style.width = `${(currentValue / max) * 100}%`;
                      counter.querySelector('span').textContent = `${Math.floor(currentValue)}%`;
                  }, 50);
              };
  
              // Check if the counter is in the viewport
              const rect = counter.getBoundingClientRect();
              const isVisible = (rect.top >= 0) && (rect.bottom <= window.innerHeight);
  
              // If the counter is in the viewport and hasn't been animated yet
              if (isVisible && !counter.classList.contains('animated')) {
                  counter.classList.add('animated');
                  animate();
              }
          });
      };
  
      // Animate counters on scroll
      window.addEventListener('scroll', animateCounters);
  
      // Initial check
      animateCounters();
  });
  


  let lastScrollTop = 700;
  let leftScrollAmount = 0;
  let rightScrollAmount = 0;
  
  window.addEventListener('scroll', () => {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    let scrollDelta = currentScroll - lastScrollTop;
    lastScrollTop = currentScroll;
  
    // Moving Left
    const movingLeft = document.querySelector('.moving-left .scroller__inner');
    if (movingLeft) { // Check if the element exists
      leftScrollAmount -= scrollDelta; // Decrease or increase based on scroll direction
      movingLeft.style.transform = `translateX(${leftScrollAmount}px)`;
      repeatInfinite(movingLeft, leftScrollAmount, true);
    }
  
    // Moving Right
    const movingRight = document.querySelector('.moving-right .scroller__inner');
    if (movingRight) { // Check if the element exists
      rightScrollAmount += scrollDelta; // Increase or decrease based on scroll direction
      movingRight.style.transform = `translateX(${rightScrollAmount}px)`;
      repeatInfinite(movingRight, rightScrollAmount, false);
    }
  });
  
  function repeatInfinite(element, scrollAmount, isLeft) {
    const skills = element.querySelectorAll('.skills');
    if (skills.length > 0) { // Check if there are skills elements
      const singleSetWidth = skills[0].offsetWidth;
  
      // Check if the entire set of skills has moved out of view
      if (isLeft && scrollAmount <= -singleSetWidth) {
        element.appendChild(skills[0]); // Move the first set of skills to the end
        leftScrollAmount += singleSetWidth; // Adjust the scroll amount
      } else if (!isLeft && scrollAmount >= singleSetWidth) {
        element.insertBefore(skills[1], skills[0]); // Move the last set of skills to the beginning
        rightScrollAmount -= singleSetWidth; // Adjust the scroll amount
      }
    } else {
    
    }
  }
  

  const lenis = new Lenis()

  lenis.on('scroll', (e) => {
   
  })
  
  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }
  
  requestAnimationFrame(raf)



   // to Handle AJAX Submission
  $(document).ready(function(){
    $("#contactForm").on("submit", function(event){
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: "submit_form.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                $("#form-message").html(response); // Display the response message
            },
            error: function(xhr, status, error){
                $("#form-message").html("An error occurred: " + xhr.responseText);
            }
        });
    });
});