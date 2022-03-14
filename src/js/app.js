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
                if(question.parentNode.classList.contains('isActive')) {
                    question.parentNode.classList.remove('isActive');
                    answer.style.maxHeight = "0";
                } else {
                    question.parentNode.classList.add('isActive');
                    answer.style.maxHeight = answer.scrollHeight + "px";
                }
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