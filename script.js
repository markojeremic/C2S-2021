let active = false;
let hasActive = false;
let navbarActive = false;
let activeID = false;

const slides = ['header', 'o-projektu', 'radionice', 'tech-challenge', 'agenda', 'faq', 'partneri', 'tim-i-footer']
  ; (() => {
    new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    })

    const swiper = new Swiper('.main-container', {
      direction: 'vertical',
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 0,
      mousewheel: true,
      autoHeight: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    const hamburger_menu = document.querySelector('.hamburger-menu')
    const mainContainer = document.querySelector('.main-container')


    hamburger_menu.addEventListener('click', () => {
      console.log("eej")
      if ($(".main-container").hasClass('active'))
        navbarActive = false
      else navbarActive = true;
      mainContainer.classList.toggle('active')
      console.log(navbarActive)
    })

    const isInViewport = (element) => {
      const elementBox = element.getBoundingClientRect()
      const distance = 0

      if (elementBox.bottom > distance && elementBox.top <= distance) {
        return true
      } else {
        return false
      }
    }


    $('.hamburger-menu').click(function (e) {
      e.preventDefault();

      const containerWrapper1 = document.querySelector('.container-wrapper')
      const containerWrapper2 = document.querySelector('.container-wrapper-2')
      const containerWrapper3 = document.querySelector('.container-wrapper-3')
      const containerWrapper4 = document.querySelector('.container-wrapper-4')
      const containerWrapper5 = document.querySelector('.container-wrapper-5')
      const containerWrapper6 = document.querySelector('.container-wrapper-6')
      const containerWrapper7 = document.querySelector('.container-wrapper-7')
      const containerWrapper8 = document.querySelector('.container-wrapper-8')

      console.log(swiper.activeIndex)
      switch (swiper.activeIndex) {
        case 0:
          !containerWrapper1.classList.contains('should-change') &&
            containerWrapper1.classList.add('should-change') 
          break;
        case 1:
          !containerWrapper2.classList.contains('should-change') &&
            containerWrapper2.classList.add('should-change')
          break;
        case 2:
          !containerWrapper3.classList.contains('should-change') &&
            containerWrapper3.classList.add('should-change')
          break;
        case 3:
          !containerWrapper4.classList.contains('should-change') &&
            containerWrapper4.classList.add('should-change')
          break;
        case 4:
          !containerWrapper5.classList.contains('should-change') &&
            containerWrapper5.classList.add('should-change')
          break;
        case 5:
          !containerWrapper6.classList.contains('should-change') &&
            containerWrapper6.classList.add('should-change')
          break;
        case 6:
          !containerWrapper7.classList.contains('should-change') &&
            containerWrapper7.classList.add('should-change')
          break;
        case 6:
          !containerWrapper8.classList.contains('should-change') &&
            containerWrapper8.classList.add('should-change')
          break;

        default:
          break;
      }
     
    });

    function gotoSlide(numberPage) {
      swiper.slideTo(numberPage, 0, false)
    }





    $('.navbar-active-link').hover(function (e) {
      e.preventDefault();
      if (navbarActive) {
        const currentlyActiveWrapper = $('body').find('.should-change');
        const currentlyActiveSection = currentlyActiveWrapper.find('.main');
        if (!hasActive) {
          active = currentlyActiveSection.html();
          activeID = currentlyActiveWrapper.find('section').attr('id');
          console.log(active)
          hasActive = true;
        }
        const hoveredSectionID = $(this).attr('should-show');
        let sectionToShow = $(`#${hoveredSectionID}`).parent().html();
        if ($(this).attr('should-show') == activeID)
          sectionToShow = active

        currentlyActiveSection.html(sectionToShow);
      }
    });


    $('.navbar-active-link').click(function (e) {
      e.preventDefault();
      navbarActive = false;
      mainContainer.classList.toggle('active')
      if ($(this).attr('should-show') == activeID)
        sectionToShow = active

      setTimeout(() => {
        const clickedSectionID = $(this).attr('should-show');
        const currentlyActiveWrapper = $('body').find('.should-change');
        const currentlyActiveSection = currentlyActiveWrapper.find('.main');
        currentlyActiveSection.html(active);
        gotoSlide(slides.indexOf(clickedSectionID))
      }, 600);

    });

  document.onscroll = () => scanDocument()

  const left = document.querySelector('.left');
  const right = document.querySelector('.right');

  const slider = document.querySelector('.slider');

  const indicatorParent = document.querySelector('.control ul'); 
  const indicators = document.querySelectorAll('.control li');
  index = 0;

  indicators.forEach((indicator, i) => {
    indicator.addEventListener('click', () => {
      document.querySelector('.control .selected').classList.remove('selected');
      indicator.classList.add('selected');
      slider.style.transform = 'translateX(' + (i) * -25 + '%)';  
      index = i;
    
    });
  });

  left.addEventListener('click', function() {
    index = (index > 0) ? index -1 : 0;
    document.querySelector('.control .selected').classList.remove('selected');
    indicatorParent.children[index].classList.add('selected');
    slider.style.transform = 'translateX(' + (index) * -20 + '%)';
  });

  right.addEventListener('click', function() {
    index = (index < 5 - 1) ? index + 1 : 4;
    document.querySelector('.control .selected').classList.remove('selected');
    indicatorParent.children[index].classList.add('selected');
    slider.style.transform = 'translateX(' + (index) * -20 + '%)';
  });
})()
