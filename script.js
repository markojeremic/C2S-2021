;(() => {
  var swiper = new Swiper('.swiper-container', {
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

  const hamburger_menu = document.querySelector('.hamburger-menu')
  const mainContainer = document.querySelector('.main-container')

  hamburger_menu.addEventListener('click', () => {
    mainContainer.classList.toggle('active')
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

  const scanDocument = () => {
    const containerWrapper1 = document.querySelector('.container-wrapper')
    const containerWrapper2 = document.querySelector('.container-wrapper-2')
    const containerWrapper3 = document.querySelector('.container-wrapper-3')
    const containerWrapper4 = document.querySelector('.container-wrapper-4')
    const containerWrapper5 = document.querySelector('.container-wrapper-5')
    const containerWrapper6 = document.querySelector('.container-wrapper-6')
    const containerWrapper7 = document.querySelector('.container-wrapper-7')
    const containerWrapper8 = document.querySelector('.container-wrapper-8')

    if (isInViewport(containerWrapper1)) {
      !containerWrapper1.classList.contains('should-change') &&
        containerWrapper1.classList.add('should-change')
    } else {
      containerWrapper1.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper2)) {
      containerWrapper2.classList.add('should-change')
    } else {
      containerWrapper2.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper3)) {
      containerWrapper3.classList.add('should-change')
    } else {
      containerWrapper3.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper4)) {
      containerWrapper4.classList.add('should-change')
    } else {
      containerWrapper4.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper5)) {
      containerWrapper5.classList.add('should-change')
    } else {
      containerWrapper5.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper6)) {
      containerWrapper6.classList.add('should-change')
    } else {
      containerWrapper6.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper7)) {
      containerWrapper7.classList.add('should-change')
    } else {
      containerWrapper7.classList.remove('should-change')
    }
    if (isInViewport(containerWrapper8)) {
      containerWrapper8.classList.add('should-change')
    } else {
      containerWrapper8.classList.remove('should-change')
    }
  }

  document.onscroll = () => scanDocument()
})()
