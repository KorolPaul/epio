/* Popup */
const popupToggleElements = document.querySelectorAll('.js-popup-toggle')
const popupElement = document.querySelector('.popup');

function togglePopup() {
    popupElement.classList.toggle('opened');
}

popupToggleElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    togglePopup();
}));

/* menu toggle */
const menuToggleElements = document.querySelectorAll('.menu-toggle');
if (menuToggleElements.length) {
    function toggleMobileMenu() {
        document.body.classList.toggle('menu-opened');
    }

    menuToggleElements.forEach(el => el.addEventListener('click', toggleMobileMenu));
}

/* footer menu */
const footerTitles = document.querySelectorAll('.footer_menu-title');
footerTitles.forEach(el => el.addEventListener('click', function (e) {
    e.target.parentElement.classList.toggle('active');
}));


/* fixed header */
document.addEventListener('wheel', function (e) {
    const FIXED_NAVBAR_POSITION = 80;
    const position = window.scrollY;
    const fixedModifier = 'fixed-header';
    const isScrollUp = e.deltaY < 0;

    if (position > FIXED_NAVBAR_POSITION && isScrollUp) {
        document.body.classList.add(fixedModifier);
    } else {
        document.body.classList.remove(fixedModifier);
    }
});

/* Accordion */
const accordionElements = document.querySelectorAll('.accordion:not(.accordion__alternate) strong:first-child, .accordion_title');
if (accordionElements.length) {
    function toggleAccordionElement(e) {
        e.target.parentElement.classList.toggle('opened');
    }

    accordionElements.forEach(el => el.addEventListener('click', toggleAccordionElement));

    if (location.hash) {
        const hashValue = location.hash.substr(1);

        if (!isNaN(parseInt(hashValue))) {
            accordionElements[parseInt(hashValue) - 1].click();
            accordionElements[parseInt(hashValue) - 1].scrollIntoView()
        }
    } else {
        accordionElements[0].click();
    }
}

const accordionAlternateElements = document.querySelectorAll('.accordion__alternate strong:first-child');
if (accordionAlternateElements.length) {
    function toggleAccordionAlternateElement(e) {
        accordionAlternateElements.forEach(el => el.parentElement.classList.remove('opened'));
        e.target.parentElement.classList.add('opened');
    }

    accordionAlternateElements.forEach(el => el.addEventListener('click', toggleAccordionAlternateElement));
    accordionAlternateElements[0].click();
}


/* Tabs */
const tabButtonsElements = document.querySelectorAll('.tabs_button');
const tabContentElements = document.querySelectorAll('.tab');

tabButtonsElements.forEach(el => el.addEventListener('click', switchTab));

function switchTab(e) {
    e.preventDefault()
    const el = e.target;
    
    const index = Array.prototype.indexOf.call(el.parentNode.childNodes, el);

    if (tabButtonsElements[index].classList.contains('.active')) {
        return;
    }
    tabButtonsElements.forEach(el => el.classList.remove('active'));
    tabContentElements.forEach(el => el.classList.remove('opened'));

    tabButtonsElements[index].classList.add('active');
    if (tabContentElements.length && tabContentElements[index]) {
        tabContentElements[index].classList.add('opened');
    }

    if (el.classList.contains('js-filter-button')) {
        const category = el.innerText || '';

        const allElements = document.querySelectorAll('.blog-entry');

        if (!el.previousSibling) {
            allElements.forEach(el => el.classList.remove('hidden'));
        } else {
            allElements.forEach(el => {
                if (el.innerHTML.includes(category)) {
                    el.classList.remove('hidden');
                } else {
                    el.classList.add('hidden');
                }
            });
        }

    }
}

if (tabButtonsElements.length) {
    if (location.hash) {
        const hashValue = location.hash.substr(1);

        if (!isNaN(parseInt(hashValue))) {
            tabButtonsElements[parseInt(hashValue) - 1].classList.add('active');
            tabContentElements[parseInt(hashValue) - 1].classList.add('opened');
        }
    } else {
        tabButtonsElements[0].classList.add('active');
        tabContentElements[0].classList.add('opened');
    }
}

const nextTabElements = document.querySelectorAll('.tab_next, .next-article');
nextTabElements.forEach(el => el.addEventListener('click', function(e) {
    document.querySelector('.tabs_button.active').nextElementSibling.click();
    window.scrollTo(0, 0);
}));


/* Sliders */
const articlesSliderElements = document.querySelectorAll('.articles-slider')

articlesSliderElements.forEach(el => {
    tns({
        container: el,
        items: 3.5,
        nav: false,
        mouseDrag: true,
        loop: false,
        controlsPosition: 'bottom',
        fixedWidth: 200,
        responsive: {
            1024: {
                items: 4.5,
                fixedWidth: 420,
            },
        }
    });
});

const carouselListsElements = document.querySelectorAll('.carousel-list')

carouselListsElements.forEach(el => {
    tns({
        container: el,
        items: 3.5,
        nav: false,
        mouseDrag: true,
        loop: false,
        controlsPosition: 'bottom',
        fixedWidth: 200,
        responsive: {
            1024: {
                items: 4.5,
                fixedWidth: 350,
            },
        },
        onInit: function () {
            carouselListItems = document.querySelectorAll('.carousel-list li');
            carouselListItems[0].classList.add('active');
            
            carouselListItems.forEach(el => el.addEventListener('mouseenter', highlighItem));
            function highlighItem(e) {
                e.stopPropagation();
                carouselListItems.forEach(el => el.classList.remove('active'));

                e.target.classList.add('active');
            }
        }
    });
});

const sliderElements = document.querySelectorAll('.js-slider')

sliderElements.forEach(el => {
    tns({
        container: el,
        items:  1,
        nav: true,
        controls: true,
        mouseDrag: true,
        loop: true,
        navPosition: 'bottom',
    });
});


const partnersList = document.querySelectorAll('.partners_list')
partnersList.forEach(el => {
    tns({
        container: el,
        items: 2,
        nav: false,
        controls: false,
        mouseDrag: true,
        loop: true,
        slideBy: 1,
        autoplay: true,
        autoplayButton: false,
        autoplayButtonOutput: false,
        responsive: {
            1024: {
                items: 4.5,
                fixedWidth: 350,
            },
        }
    });
});


/* search */
const searchToggleElement = document.querySelectorAll('.js-search-togle');

searchToggleElement.forEach(el => el.addEventListener('click', toggleSearchPopup));

function toggleSearchPopup(e) {
    e.preventDefault();

    document.body.classList.toggle('search-opened');
}

/* smooth scroll */
butter.init({ cancelOnTouch: true });


/* main page animation */
if (document.body.classList.contains('home')) {
    const isSmallScreen = screen.width < 768;
    
    const animatedElements = document.querySelectorAll('h1, .wp-block-columns, .section img:not(.values_image), .blog-entry, .grid-articles_show-all');
    const thresholdSteps = [...Array(10).keys()].map(i => i / 10);
    
    if (animatedElements.length && !isSmallScreen) {
        const observerCallback = function (e) {
            const { boundingClientRect, intersectionRatio, target } = e[0];
    
            if (target.style.opacity === '1') {
                target.classList.add('appeared');
                return;
            }

            if (boundingClientRect.bottom > 500) {
                const multiplier = (target.nodeName === 'IMG' || target.classList.contains('blog-entry') || target.classList.contains('values')) ? 4 : 1;
                target.style.opacity = intersectionRatio * multiplier;
            }
            if (boundingClientRect.top < 0) {
                target.style.opacity = 1;
            }
        };
    
        animatedElements.forEach(el => {
            const observer = new IntersectionObserver(observerCallback, {
                rootMargin: '0px 0px -25% 0px',
                threshold: thresholdSteps,
                root: document.querySelector('.parallax')
            });
            observer.observe(el);
        })
    
    }
}

/* Values list */
const valuesElements = document.querySelectorAll('.values li');

valuesElements.forEach(el => el.addEventListener('mouseenter', selectValue));

if (valuesElements.length) {
    valuesElements[0].classList.add('active');
}

function selectValue(e) {
    valuesElements.forEach(el => el.classList.remove('active'));
    e.target.classList.add('active');
}
