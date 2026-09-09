/**
 * Required
 */
 
 //@prepros-prepend vendor/foundation/js/plugins/foundation.core.js

/**
 * Optional Plugins
 * Remove * to enable any plugins you want to use
 */
 
 // What Input
 //@*prepros-prepend vendor/whatinput.js
 
 // Foundation Utilities
 // https://get.foundation/sites/docs/javascript-utilities.html
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.box.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.imageLoader.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.keyboard.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.mediaQuery.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.motion.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.nest.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.timer.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.touch.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.triggers.min.js


// JS Form Validation
//@*prepros-prepend vendor/foundation/js/plugins/foundation.abide.js

// Tabs UI
//@prepros-prepend vendor/foundation/js/plugins/foundation.tabs.js

// Accordion
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordion.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordionMenu.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.responsiveAccordionTabs.js

// Menu enhancements
//@*prepros-prepend vendor/foundation/js/plugins/foundation.drilldown.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.dropdown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdownMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveToggle.js

// Equalize heights
//@*prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

// Responsive Images
//@*prepros-prepend vendor/foundation/js/plugins/foundation.interchange.js

// Navigation Widget
//@*prepros-prepend vendor/foundation/js/plugins/foundation.magellan.js

// Offcanvas Naviagtion Option
//@prepros-prepend vendor/foundation/js/plugins/foundation.offcanvas.js

// Carousel (don't ever use)
//@*prepros-prepend vendor/foundation/js/plugins/foundation.orbit.js

// Modals
//@prepros-prepend vendor/foundation/js/plugins/foundation.reveal.js

// Form UI element
//@*prepros-prepend vendor/foundation/js/plugins/foundation.slider.js

// Anchor Link Scrolling
//@prepros-prepend vendor/foundation/js/plugins/foundation.smoothScroll.js

// Sticky Elements
//@*prepros-prepend vendor/foundation/js/plugins/foundation.sticky.js

// On/Off UI Switching
//@*prepros-prepend vendor/foundation/js/plugins/foundation.toggler.js

// Tooltips
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tooltip.js

// What Input
//@prepros-prepend vendor/what-input.js

// Swiper
//@prepros-prepend vendor/swiper-bundle.js

// DOM Ready
(function($) {
	'use strict';
    
    var _app = window._app || {};
    
    _app.foundation_init = function() {
        $(document).foundation();
    }
        
    _app.emptyParentLinks = function() {
            
        $('.menu li a[href="#"]').click(function(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        });	
        
    };
    
    _app.fixed_nav_hack = function() {
        $('.off-canvas').on('opened.zf.offCanvas', function() {
            $('header.site-header').addClass('off-canvas-content is-open-right has-transition-push');		
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').addClass('clicked');	
        });
        
        $('.off-canvas').on('close.zf.offCanvas', function() {
            $('header.site-header').removeClass('off-canvas-content is-open-right has-transition-push');
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
        });
        
        $(window).on('resize', function() {
            if ($(window).width() > 1023) {
                $('.off-canvas').foundation('close');
                $('header.site-header').removeClass('off-canvas-content has-transition-push');
                $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
            }
        });    
    }
    
    _app.display_on_load = function() {
        $('.display-on-load').css('visibility', 'visible');
    }
    
    // Custom Functions
    
    _app.mobile_takover_nav = function() {
        $(document).on('click', 'a#menu-toggle', function(){
            
            if ( $(this).hasClass('clicked') ) {
                $(this).removeClass('clicked');
                $('#off-canvas').fadeOut(200);
            
            } else {
            
                $(this).addClass('clicked');
                $('#off-canvas').fadeIn(200);
            
            }
            
        });
    }
    
    _app.image_gallery_slider = function() {
        const mediaSliders = document.querySelectorAll('.image-gallery-slider');
        if (mediaSliders.length < 1) return;
    
        mediaSliders.forEach(function (mediaSlider) {
            const sliderSlides = mediaSlider.querySelectorAll('.swiper-slide');
            if (sliderSlides.length < 2) return;
    
            const autoplay = mediaSlider.getAttribute('data-autoplay');
            const delay = mediaSlider.getAttribute('data-delay');
            const swiperPagination = mediaSlider.querySelector('.swiper-pagination');
            
            let swiperOptions = {
                loop: true,
                slidesPerView: 1,
                speed: 500,
                spaceBetween: 0,
                pagination: {
                    el: swiperPagination,
                    clickable: true,
                },
            };
            
            // Only add autoplay if autoplay is exactly 1
            if (autoplay === '1') {
                swiperOptions.autoplay = {
                    delay: parseInt(delay, 10) * 1000,
                    disableOnInteraction: false,
                };
            }

            const swiper = new Swiper(mediaSlider, swiperOptions);


        });
    };
    
    _app.banner_slider = function() {
        const mediaSliders = document.querySelectorAll('.banner-slider');
        if (mediaSliders.length < 1) return;
    
        mediaSliders.forEach(function (mediaSlider) {
            const sliderSlides = mediaSlider.querySelectorAll('.swiper-slide');
            if (sliderSlides.length < 2) return;
    
            const autoplay = mediaSlider.getAttribute('data-autoplay');
            const delay = mediaSlider.getAttribute('data-delay');
            const prevBtn = mediaSlider.querySelector('.swiper-button-prev');
            const nextBtn = mediaSlider.querySelector('.swiper-button-next');
    
            const swiperOptions = {
                loop: true,
                slidesPerView: 1,
                speed: 500,
                spaceBetween: 0,
                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn
                },
                on: {
                    // When slide transition starts → reset and pause *all* videos
                    slideChangeTransitionStart: function () {
                        const videos = mediaSlider.querySelectorAll('video');
                        videos.forEach(video => {
                            video.pause();
                            video.currentTime = 0;
                        });
                    },
                    // When transition ends → play & loop active slide’s video
                    slideChangeTransitionEnd: function () {
                        const activeSlide = mediaSlider.querySelector('.swiper-slide-active');
                        if (!activeSlide) return;
                        const video = activeSlide.querySelector('video');
                        if (video) {
                            video.loop = true;
                            video.play().catch(err => {
                                console.warn("Autoplay prevented:", err);
                            });
                        }
                    }
                }
            };
    
            // Only add autoplay if autoplay is exactly 1
            if (autoplay === '1') {
                swiperOptions.autoplay = {
                    delay: parseInt(delay, 10) * 1000,
                    disableOnInteraction: false,
                };
            }
    
            const swiper = new Swiper(mediaSlider, swiperOptions);
    
            // Kick off video for the very first active slide
            const firstActive = mediaSlider.querySelector('.swiper-slide-active video');
            if (firstActive) {
                firstActive.loop = true;
                firstActive.play().catch(err => {
                    console.warn("Autoplay prevented:", err);
                });
            }
        });
    };
    
    _app.hero_slider = function() {
        const bannerSlider = document.querySelector('.page-banner.hero-slider');
        if(bannerSlider) {
            const delay = bannerSlider.getAttribute('data-delay');
            function pauseAndRestartAllVideos() {
              var allVideos = document.querySelectorAll('.swiper-slide video');
              allVideos.forEach(function (video) {
                video.pause();
                video.currentTime = 0;
              });
            }
            
            function playVideoInActiveSlide() {
              var activeSlide = document.querySelector('.swiper-slide-active video');
              if (activeSlide) {
                // Show loading animation.
                const playPromise = activeSlide.play();
                
                if (playPromise !== undefined) {
                    playPromise.then(_ => {
                      // Automatic playback started!
                      // Show playing UI.
                    })
                    .catch(error => {
                      // Auto-play was prevented
                      // Show paused UI.
                    });
                }
              }
            }
            
            const swiper = new Swiper('.page-banner.hero-slider', {
                loop: true,
                slidesPerView: 1,
                speed: 500,
                spaceBetween: 0,
                effect: "fade",
                // autoplay: {
                //   delay: delay + '000',
                //   disableOnInteraction: false,
                // },
                on: {
                    init: function () {
                      // Play the video in the first slide on initialization
                      playVideoInActiveSlide();
                    },
                
                    // Listen for the transitionStart event
                    transitionStart: function () {
                      // Pause and restart all videos in slides
                      pauseAndRestartAllVideos();
                
                      // Play the video in the active slide
                      playVideoInActiveSlide();
                    }
                  }
            });
    
        }
        
        const heroBanner = document.querySelector('.page-banner.hero-slider');
        if(heroBanner) {
            const setHeroBannerMinHeight = function() {
                const headerHeight = document.querySelector('.site-header').offsetHeight;
                const windowHeight = window.innerHeight;
                
                // Calculate the min-height by subtracting headerHeight from windowHeight
                let minHeight = windowHeight - headerHeight;
        
                // Ensure the minHeight does not exceed 790px
                if (minHeight > 790) {
                    minHeight = 790;
                }
        
                // Set the min-height of .style-hero-slider
                heroBanner.style.minHeight = minHeight + 'px';
            }
            setHeroBannerMinHeight();
            heroBanner.classList.add('loaded');
            window.addEventListener('resize', function() {
                setHeroBannerMinHeight();
            });
        }
        
    }
    
    _app.group_slider = function() {
        const groupSwiperSlides = document.querySelectorAll('.group-slider-swiper .swiper-slide.company-slide');
        const groupSwiperBGSlides = document.querySelectorAll('.group-slider-bg-swiper .swiper-slide.bg-slide');

        if (groupSwiperSlides.length > 1) {
            let groupSwiper = new Swiper('.group-slider-swiper', {
                slidesPerView: 1,
                spaceBetween: 1,
                allowTouchMove: false,
                clickable: false,
                effect: "creative",
                creativeEffect: {
                    prev: {
                        shadow: false,
                        translate: [0, 0, -400],
                        opacity: 0,
                    },
                    next: {
                        translate: ["100%", 0, 0],
                    },
                },
                // Pagination
                pagination: {
                    el: '.swiper-pagination.company-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        const slides = document.querySelectorAll('.group-slider-swiper .swiper-slide.company-slide');
                        if (slides[index]) {
                            const companyName = slides[index].getAttribute('data-company');
                            const companyColor = slides[index].getAttribute('data-color');
                            return '<span class="' + className + '" style="color:' + companyColor +'"><span class="spacer">' + companyName + '</span><span class="active" style="background-color:' + companyColor +'"></span></span>';
                        }
                        // Fallback for missing slide or data-company attribute
                        return '<span class="' + className + '">Unknown</span>';
                    },
                },
            });
            
            let groupBgSwiper = new Swiper('.group-slider-bg-swiper', {
                slidesPerView: 1,
                spaceBetween: 1,
                allowTouchMove: false,
                clickable: false,
                effect: "fade",
            });
            
            groupSwiper.controller.control = groupBgSwiper;
            groupBgSwiper.controller.control = groupSwiper;
            
            const companyImageSlides = document.querySelectorAll('.company-images-swiper .swiper-slide');
            if (companyImageSlides.length > 1) {
                
                const companyImageSwiper = new Swiper(".company-images-swiper", {
                    slidesPerView: 1,
                    spaceBetween: 1,
                    grabCursor: false,
                    simulateTouch: false,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                    },
                    pagination: {
                        el: '.swiper-pagination.company-images-pagination',
                        clickable: true
                    },
                
                });
                
                document.querySelectorAll('.company-images-swiper').forEach(function (element, index) {
                    const swiper = element.swiper;
                    const ppsParent = element.closest('.company-slide'); 
                    swiper.update();
                    swiper.autoplay.stop();
                
                    const playPPSwiper = function() {
                        const activeSlideIndex = groupSwiper.realIndex;
                        const activeSlide = groupSwiper.slides[activeSlideIndex];
                
                        if (ppsParent === activeSlide) {
                            swiper.autoplay.start();
                        } else {
                            swiper.autoplay.stop();
                        }
                    }
                
                    playPPSwiper();
                
                    // Listen for Swiper events
                    groupSwiper.on('afterInit slideChange', function () {
                        playPPSwiper();
                    });
                });
            }


        }
    }
    
    _app.btn_group_width = function() {
        const updateButtonWidths = () => {
            const btnGroups = document.querySelectorAll('.btns-group');
            
            if( btnGroups.length < 1) return;
            
            btnGroups.forEach(group => {
                const buttons = group.querySelectorAll('.button');
        
                // Reset widths to ensure accurate measurement
                buttons.forEach(button => button.style.width = '');
        
                if (window.innerWidth < 460) {
                    // Find the widest button
                    let maxWidth = 0;
                    buttons.forEach(button => {
                        const buttonWidth = button.offsetWidth;
                        if (buttonWidth > maxWidth) {
                            maxWidth = buttonWidth;
                        }
                    });
        
                    // Apply the widest width to all buttons
                    buttons.forEach(button => {
                        button.style.width = `${maxWidth}px`;
                    });
                }
            });
        };
        
        // Run on page load
        updateButtonWidths();
        
        // Update on window resize
        window.addEventListener('resize', updateButtonWidths);
    }
    
    _app.accordions = function() {
          $(".accordion").on("down.zf.accordion", function(event) {
             var $openDrawer = $(this).find('.is-active');
             $('html,body').animate({scrollTop: $($openDrawer).offset().top - 16}, 500);
          }); 
    } 
    
    _app.processPathDrawing = function() {
    
        const arrowWrappers = document.querySelectorAll('.arrow-wrap');
    
        if (!arrowWrappers.length) return;
    
        const observer = new IntersectionObserver((entries, observer) => {
    
            entries.forEach(entry => {
    
                if (!entry.isIntersecting) return;
    
                const wrapper = entry.target;
                const track = wrapper.querySelector('.mask-track');
    
                if (track) {
                    track.style.strokeDashoffset = '0';
                }
    
                observer.unobserve(wrapper);
    
            });
    
        }, {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px 100px 0px'
        });
    
        arrowWrappers.forEach(wrapper => {
    
            if (wrapper.classList.contains('animated')) return;
    
            const track = wrapper.querySelector('.mask-track');
    
            if (!track) return;
    
            const length = track.getTotalLength();
    
            track.style.strokeDasharray = length;
            track.style.strokeDashoffset = length;
    
            observer.observe(wrapper);
    
            wrapper.classList.add('animated');
            wrapper.style.visibility = 'visible';
    
        });
    
        // Allow the browser to paint the initial state before
        // enabling the transition.
        requestAnimationFrame(() => {
    
            arrowWrappers.forEach(wrapper => {
    
                const track = wrapper.querySelector('.mask-track');
    
                if (track) {
                    track.style.transition = 'stroke-dashoffset 1.5s ease-in-out';
                }
    
            });
    
        });
    
    };
    
    _app.processRowHover = function() {
    
        const rows = document.querySelectorAll('.process-row');
    
        if (!rows.length) return;
    
        rows.forEach(row => {
    
            const swoosh = row.querySelector('.bg-swoosh-wrap');
    
            if (!swoosh) return;
    
            let mouseX = 0;
            let mouseY = 0;
            let currentX = 0;
            let currentY = 0;
            let targetX = 0;
            let targetY = 0;
            let raf;
    
            const animate = () => {
    
                currentX += (targetX - currentX) * 0.15;
                currentY += (targetY - currentY) * 0.15;
    
                swoosh.style.transform = `
                    translate3d(${currentX}px, ${currentY}px, 0)
                    rotateX(${-currentY * 0.15}deg)
                    rotateY(${currentX * 0.15}deg)
                `;
    
                raf = requestAnimationFrame(animate);
    
            };
    
            row.addEventListener('mouseenter', () => {
    
                if (!raf) {
                    raf = requestAnimationFrame(animate);
                }
    
            });
    
            row.addEventListener('mousemove', event => {
    
                const rect = row.getBoundingClientRect();
    
                // Cursor position from -1 to 1
                mouseX = ((event.clientX - rect.left) / rect.width) * 2 - 1;
                mouseY = ((event.clientY - rect.top) / rect.height) * 2 - 1;
    
                // Amount of movement
                targetX = mouseX * 40;
                targetY = mouseY * 40;
    
            });
    
            row.addEventListener('mouseleave', () => {
    
                targetX = 0;
                targetY = 0;
    
                // Allow the swoosh to animate back to center.
                setTimeout(() => {
    
                    cancelAnimationFrame(raf);
                    raf = null;
    
                }, 500);
    
            });
    
        });
    
    };
            
    _app.init = function() {
        
        // Standard Functions
        _app.foundation_init();
        _app.emptyParentLinks();
        //_app.fixed_nav_hack();
        _app.display_on_load();
        
        // Custom Functions
        //_app.mobile_takover_nav();
        _app.image_gallery_slider();
        _app.hero_slider();
        _app.banner_slider();
        _app.group_slider();
        _app.btn_group_width();
        _app.accordions();
        _app.processPathDrawing();
        _app.processRowHover();
    }
    
    
    // initialize functions on load
    $(function() {
        _app.init();
    });
	
	
})(jQuery);