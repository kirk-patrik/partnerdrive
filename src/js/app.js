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

    $('.sect_4__slider').slick({
        dots: false,
        speed: 300,
        swipe: false,
        slidesToShow: 3.4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
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
        let w = $(window).width();
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
    });

    // closeModal
    $('.modalClose').click(() => {
        modalParent01.classList.replace('p-modal--active', 'p-modal--close');
        modalParent02.classList.replace('p-modal--active', 'p-modal--close');
        modalParent03.classList.replace('p-modal--active', 'p-modal--close');
        modalParent04.classList.replace('p-modal--active', 'p-modal--close');
    });



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