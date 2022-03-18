document.addEventListener("DOMContentLoaded", function () {
    // start here
    scrollClass(document.querySelector('.l-header'));
    document.getElementById('scrollTop').addEventListener('click', e => {
        e.preventDefault();
        scrollToTop();
    });
    let issue__link = document.querySelectorAll('.issue__link');
    issue__link.forEach((item) => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(item.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });

    // sp hamburger menu
    let spHamburger = document.getElementById('hamburgerMenu');
    let spMenuItem = document.querySelector('.spMenuItem');
    spHamburger.addEventListener('click', () => {
        spHamburger.classList.toggle('isActive');
        spMenuItem.classList.toggle('show');
    });

    // faq 
    let accordionItem = document.querySelectorAll('.p-accordion > .p-accordion__item');
    if (accordionItem.length > 0) {
        accordionItem[0].children[1].style.maxHeight = accordionItem[0].children[1].scrollHeight + "px";
        accordionItem.forEach(item => {
            let questionAndAnswer = {
                question: item.querySelector('.p-accordion__header'),
                answer: item.querySelector('.p-accordion__body'),
            }
            item.addEventListener('click', event => {
                toggleAccordion(questionAndAnswer);
            });

            function toggleAccordion({ question, answer } = questionAndAnswer) {
                if (question.parentNode.classList.contains('isActive')) {
                    question.parentNode.classList.remove('isActive');
                    answer.style.maxHeight = "0";
                } else {
                    question.parentNode.classList.add('isActive');
                    answer.style.maxHeight = answer.scrollHeight + "px";
                }
            }
        });
    }

    // add autoplaySpeed
    $('.sect_4__slider').slick({
        dots: false,
        speed: 300,
        swipe: false,
        slidesToShow: 3.4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1.7,
                    slidesToScroll: 1,
                    centerMode: true
                }
            },
        ]
    });
    // added sect_4__slider animation
    $('.sect_4__slider').on('beforeChange', () => {
        let currentActive = document.querySelector('.sect_4__slider .slick-current');
        let currentActiveIndex = currentActive.getAttribute('data-slick-index');
        let w = $(window).width();
        // modified
        let scrolledLast;
        if (w > 992) {
            scrolledLast = document.querySelector('.sect_4__slider .slick-slide[data-slick-index="' + (parseInt(currentActiveIndex) + 3) + '"]');
        } else {
            scrolledLast = document.querySelector('.sect_4__slider .slick-slide[data-slick-index="' + (parseInt(currentActiveIndex) + 2) + '"]');
        }
        // end modified
        $(scrolledLast).addClass('isAdded').siblings().removeClass('isAdded');
    });
    $('.sect_4__slider').slick('slickGoTo', 1);

    $('.cases__slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<img class='a-left control-c prev slick-prev' src='public/release/tiny/icon/slick-arrow-left.svg'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='public/release/tiny/icon/slick-arrow-right.svg'>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1.3,
                    arrows: false
                }
            },
        ]
    });

    let modalBtn = document.querySelectorAll('.modal-btn');
    let modalParent01 = document.querySelector('.p-modal01');
    let modalParent02 = document.querySelector('.p-modal02');
    let modalParent03 = document.querySelector('.p-modal03');
    let modalParent04 = document.querySelector('.p-modal04');
    // modal for button | redirect lower pages if sp view
    $(window).on('load', function () {
        document.getElementById('loading').className = 'loaded';
        let w = $(window).width();
        let h = $(window).height();
        modalBtn.forEach(btn => {
            let destination = btn.getAttribute('data-modal');
            btn.addEventListener('click', e => {
                e.preventDefault();
                if (destination == 'case1') {
                    if (w > 992) {
                        modalParent01.classList.replace('p-modal--close', 'p-modal--active');
                    } else {
                        window.location.href = '/lower-home.php';
                    }
                } else if (destination == 'case2') {
                    if (w > 992) {
                        modalParent03.classList.replace('p-modal--close', 'p-modal--active');
                    } else {
                        window.location.href = '/lower-merchandise.php';
                    }
                } else if (destination == 'case3') {
                    if (w > 992) {
                        modalParent04.classList.replace('p-modal--close', 'p-modal--active');
                    } else {
                        window.location.href = '/lower-matching.php';
                    }
                } else {
                    if (w > 992) {
                        modalParent02.classList.replace('p-modal--close', 'p-modal--active');
                    } else {
                        window.location.href = '/lower-project.php';
                    }
                }
            });
        });
        // modify modal view depending on screen
        if (h < 768) {
            let adjustModal = document.querySelectorAll('.p-modal__content');
            adjustModal.forEach(item => {
                css(item, {
                    "height": "76%",
                    "padding": "36px 50px 46px"
                });
                item.querySelector('.p-modal__frame').style.height = "71%";
            });
        }
    });

    // closeModal
    $('.modalClose').click(() => {
        modalParent01.classList.replace('p-modal--active', 'p-modal--close');
        modalParent02.classList.replace('p-modal--active', 'p-modal--close');
        modalParent03.classList.replace('p-modal--active', 'p-modal--close');
        modalParent04.classList.replace('p-modal--active', 'p-modal--close');
    });

    // add modal navigation
    let modalPrev = document.querySelectorAll('a[modal-prev]');
    let modalNext = document.querySelectorAll('a[modal-next]');
    modalPrev.forEach((i) => {
        i.addEventListener('click', (e) => {
            e.preventDefault();
            let toBe = document.querySelector('.p-modal[modal-index="' + i.getAttribute('modal-prev') + '"]');
            toBe.classList.replace('p-modal--close', 'p-modal--active');
            i.parentElement.parentElement.parentElement.classList.replace('p-modal--active', 'p-modal--close');
        });
    });
    modalNext.forEach((i) => {
        i.addEventListener('click', (e) => {
            e.preventDefault();
            let toBe = document.querySelector('.p-modal[modal-index="' + i.getAttribute('modal-next') + '"]');
            toBe.classList.replace('p-modal--close', 'p-modal--active');
            i.parentElement.parentElement.parentElement.classList.replace('p-modal--active', 'p-modal--close');
        });
    });

    window.onscroll = () => {
        // appear animation js
        let appearContainer = document.querySelectorAll('.appear-container');
        let appearContainer02 = document.querySelectorAll('.appear-container02');
        // loop container
        appearContainer.forEach(element => {
            if (isScrolledIntoView(element, false, 100)) {
                element.classList.add('animated');
            }
        });
        appearContainer02.forEach(element => {
            if (isScrolledIntoView(element, false, 100)) {
                element.classList.add('animated');
            }
        });
    }




    /**
     * FOR PARTSLIST PAGE
     */
    // let btnShowMenu = document.querySelector('.partslist__floatMenu__toggle');
    // let showMenuLinks = btnShowMenu.parentElement.querySelectorAll('.partslist__floatMenu__item > a');
    // scrollToAnchorPoint(showMenuLinks);
    // btnShowMenu.addEventListener("click", (e) => {
    //     btnShowMenu.parentElement.classList.toggle('isOpen');
    // });
    // let fileUpload = new FileUpload('#test_fileUpload');
    // fileUpload.watch();
    // let fileUpload2 = new FileUpload('#test_fileUpload_modal');
    // fileUpload2.watch();
    // let dummyForm = new FormModal('#test_formModal');
    // dummyForm.mount();
});