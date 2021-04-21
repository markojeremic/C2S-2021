;(() => {
  let active = false
  let hasActive = false
  let navbarActive = false
  let activeID = false

  const slides = [
    'header',
    'o-projektu',
    'radionice',
    'tech-challenge',
    'agenda',
    'faq',
    'partneri',
    'tim-i-footer',
  ]

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
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  })

  const hamburger_menu = document.querySelector('.hamburger-menu')
  const mainContainer = document.querySelector('.main-container')

  hamburger_menu.addEventListener('click', () => {
    console.log('eej')
    if ($('.main-container').hasClass('active')) navbarActive = false
    else navbarActive = true
    mainContainer.classList.toggle('active')
    console.log(navbarActive)
  })

  $('.hamburger-menu').click(function (e) {
    e.preventDefault()

    const containerWrapper1 = document.querySelector('.container-wrapper')
    const containerWrapper2 = document.querySelector('.container-wrapper-2')
    const containerWrapper3 = document.querySelector('.container-wrapper-3')
    const containerWrapper4 = document.querySelector('.container-wrapper-4')
    const containerWrapper5 = document.querySelector('.container-wrapper-5')
    const containerWrapper6 = document.querySelector('.container-wrapper-6')
    const containerWrapper7 = document.querySelector('.container-wrapper-7')
    const containerWrapper8 = document.querySelector('.container-wrapper-8')

    if (containerWrapper1.classList.contains('should-change'))
      containerWrapper1.classList.remove('should-change')
    if (containerWrapper2.classList.contains('should-change'))
      containerWrapper2.classList.remove('should-change')
    if (containerWrapper3.classList.contains('should-change'))
      containerWrapper3.classList.remove('should-change')
    if (containerWrapper4.classList.contains('should-change'))
      containerWrapper4.classList.remove('should-change')
    if (containerWrapper5.classList.contains('should-change'))
      containerWrapper5.classList.remove('should-change')
    if (containerWrapper6.classList.contains('should-change'))
      containerWrapper6.classList.remove('should-change')
    if (containerWrapper7.classList.contains('should-change'))
      containerWrapper7.classList.remove('should-change')
    if (containerWrapper8.classList.contains('should-change'))
      containerWrapper8.classList.remove('should-change')

    switch (swiper.activeIndex) {
      case 0:
        !containerWrapper1.classList.contains('should-change') &&
          containerWrapper1.classList.add('should-change')
        break
      case 1:
        !containerWrapper2.classList.contains('should-change') &&
          containerWrapper2.classList.add('should-change')
        break
      case 2:
        !containerWrapper3.classList.contains('should-change') &&
          containerWrapper3.classList.add('should-change')
        break
      case 3:
        !containerWrapper4.classList.contains('should-change') &&
          containerWrapper4.classList.add('should-change')
        break
      case 4:
        !containerWrapper5.classList.contains('should-change') &&
          containerWrapper5.classList.add('should-change')
        break
      case 5:
        !containerWrapper6.classList.contains('should-change') &&
          containerWrapper6.classList.add('should-change')
        break
      case 6:
        !containerWrapper7.classList.contains('should-change') &&
          containerWrapper7.classList.add('should-change')
        break
      case 7:
        !containerWrapper8.classList.contains('should-change') &&
          containerWrapper8.classList.add('should-change')
        break

      default:
        break
    }
    hasActive = false
    $('.navbar-active-logo').css(
      'transform',
      `translateY(${100 * swiper.activeIndex}vh)`
    )
    $('.navbar-active-links').css(
      'transform',
      `translateY(${100 * swiper.activeIndex}vh)`
    )
    $('.navbar-active-social-media').css(
      'transform',
      `translateY(${100 * swiper.activeIndex}vh)`
    )
    console.log(100 * swiper.activeIndex)
  })

  function gotoSlide(numberPage) {
    swiper.slideTo(numberPage, 0, false)
  }

  $('.navbar-active-link').hover(function (e) {
    e.preventDefault()
    if (navbarActive) {
      const currentlyActiveWrapper = $('body').find('.should-change')
      const currentlyActiveSection = currentlyActiveWrapper.find('.main')
      if (!hasActive) {
        active = currentlyActiveSection.html()
        console.log(currentlyActiveSection.find('section').attr('id'))
        activeID = currentlyActiveWrapper.find('section').attr('id')
        console.log(active)
        hasActive = true
      }
      const hoveredSectionID = $(this).attr('should-show')
      let sectionToShow = $(`#${hoveredSectionID}`).parent().html()
      if ($(this).attr('should-show') == activeID) sectionToShow = active

      currentlyActiveSection.html(sectionToShow)
    }
  })

  if (navbarActive) {
    swiper.mousewheel = true
  }

  $('.navbar-active-link').click(function (e) {
    e.preventDefault()
    navbarActive = false
    hasActive = false
    mainContainer.classList.toggle('active')
    if ($(this).attr('should-show') == activeID) sectionToShow = active

    setTimeout(() => {
      const clickedSectionID = $(this).attr('should-show')
      const currentlyActiveWrapper = $('body').find('.should-change')
      const currentlyActiveSection = currentlyActiveWrapper.find('.main')
      currentlyActiveSection.html(active)
      gotoSlide(slides.indexOf(clickedSectionID))
    }, 600)
  })

  document.onscroll = () => scanDocument()

  const left = document.querySelector('.left')
  const right = document.querySelector('.right')

  const slider = document.querySelector('.slider')

  const indicatorParent = document.querySelector('.control ul')
  const indicators = document.querySelectorAll('.control li')
  index = 0

  indicators.forEach((indicator, i) => {
    indicator.addEventListener('click', () => {
      document.querySelector('.control .selected').classList.remove('selected')
      indicator.classList.add('selected')
      slider.style.transform = 'translateX(' + i * -25 + '%)'
      index = i
    })
  })

  left.addEventListener('click', function () {
    index = index > 0 ? index - 1 : 0
    document.querySelector('.control .selected').classList.remove('selected')
    indicatorParent.children[index].classList.add('selected')
    slider.style.transform = 'translateX(' + index * -20 + '%)'
  })

  right.addEventListener('click', function () {
    index = index < 5 - 1 ? index + 1 : 4
    document.querySelector('.control .selected').classList.remove('selected')
    indicatorParent.children[index].classList.add('selected')
    slider.style.transform = 'translateX(' + index * -20 + '%)'
  })

  const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
  const firstAccordionItemBodies = document.querySelectorAll(".accordion-item-body");
  firstAccordionItemBodies[0].style.maxHeight = "100px";

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    firstAccordionItemBodies[0].style.maxHeight = 0;
    const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
     }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
})()
