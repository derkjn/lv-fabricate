import Pace from 'pace';
import imagesLoaded from 'imagesloaded';
// import Modernizr from '../modernizr';

export const Common = {
  // Pace Progress Bar
  initPace: () => {
    Pace.start();

    // Load elements
    const load = (elem) => {
      elem.removeClass('unloaded');
      elem.removeClass('loaded');
      elem.addClass('animated');
      elem.addClass('fadeIn');

      setTimeout(() => {
        elem.removeClass('animated');
        elem.removeClass('fadeIn');
        elem.addClass('loaded');
      }, 1500);
    };

    // Progress bar on done
    Pace.on('done', () => {
      const unloadedElem = $('.unloaded');

      unloadedElem.each(() => {
        const self = $(this);
        load(self);
      });
    });
  },
  // Background Lazy Load
  backgroundLazyload() {
    document.addEventListener('lazybeforeunveil', (e) => {
      const elem = e;
      const bg = elem.target.getAttribute('data-bg');
      if (bg) {
        elem.target.style.backgroundImage = `url(${bg})`;
        imagesLoaded(e.target, { background: true }, () => {
          elem.target.className += ' fadeIn';
        });
      } else {
        imagesLoaded(e.target, {}, () => {
          elem.target.className += ' fadeIn';
        });
      }
    });
  },
  // Scroll Down
  scrollDown() {
    const scrolldown = $('.scroll-down');
    const topBanner = $('.section.banner');

    scrolldown.on('click', () => {
      if (topBanner.length) {
        const html = $('html,body');
        const scroll = topBanner.height();
        const headerHeight = $('.main-header').height();
        html.animate({ scrollTop: (scroll - headerHeight) }, 'slow');
      }
      return false;
    });
  },
  // Animated Elements
  animatedElements() {
    // Get the animated elements
    const animate = function animate() {
      $('.animated').each(function map() {
        const self = $(this);
        const animation = self.data('animation');
        const delay = (self.data('delay')) ? self.data('delay') : 200;
        // Validation if animation exists
        if (typeof animation !== 'undefined' && animation !== '') {
          // Animate when visible in viewport
          if (Common.isViewportVisible(self[0])) {
            // Wait 500ms to show
            setTimeout(() => {
              self.addClass(animation);
              // Animated Letters
              Common.animateLetters();
            }, delay);
          }
        }
      });
    };
    // Animated elements on scroll and resize
    $(window).on('DOMContentLoaded load resize scroll', () => {
      animate();
    });

    // Animated elements on load
    animate();
  },
  // Animate Letter
  animateLetters() {
    $('.animated-letters').each(function map() {
      if (!$(this).hasClass('done')) {
        $(this).removeClass('opacity');
        Common.animateText($(this), 70, 700);
        $(this).addClass('done');
      }
    });
  },
  // Animate Text
  animateText(element, delayParam, intervalParam) {
    const elem = element;
    let delay = delayParam;
    let interval = intervalParam;
    const $wordList = elem.text().split('');
    elem.text('');
    // Set delay if undefined
    if (typeof delay === 'undefined') {
      delay = 70;
    }
    // Set Interval if undefined
    if (typeof interval === 'undefined') {
      interval = 1100;
    }
    // Loop through the letters in the $wordList array
    $.each($wordList, (idx, el) => {
      // Create a span for the letter and set opacity to 0
      const newEL = $('<span/>').text(el).css({
        opacity: 0,
      });
      newEL.appendTo(elem);
      if (idx !== 0) {
        newEL.delay(idx * delay);
      }
      newEL.animate({
        opacity: 1,
      }, interval);
    });
  },
  // Identify visible element in ViewPort // Any part of the element
  isViewportVisible(element) {
    let el = element;
    let top = el.offsetTop;
    let left = el.offsetLeft;
    const width = el.offsetWidth;
    const height = el.offsetHeight;

    while (el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }

    return (
      top < (window.pageYOffset + window.innerHeight) &&
      left < (window.pageXOffset + window.innerWidth) &&
      (top + height) > window.pageYOffset &&
      (left + width) > window.pageXOffset
    );
  },
};

export default Common;
