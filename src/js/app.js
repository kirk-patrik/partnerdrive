document.addEventListener("DOMContentLoaded", function () {
    // start here
    scrollClass(document.querySelector('.l-header'));

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