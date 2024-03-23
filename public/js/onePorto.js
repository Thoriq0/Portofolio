//! Navbar
document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            navbar.classList.add('colored');
            navbar.classList.remove('transparant');
        } else {
            navbar.classList.add('transparant');
            navbar.classList.remove('colored');
        }
    });
});
