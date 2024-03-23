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


//! Side Bar
document.addEventListener('DOMContentLoaded', function () {
    var hamburgerIcon = document.querySelector('.right');
    var sidebar = document.querySelector('.sidebar');

    // Toggle sidebar on hamburger icon click
    hamburgerIcon.addEventListener('click', function () {
        sidebar.classList.toggle('hidden');
    });

    // Close sidebar on clicking outside the sidebar
    document.addEventListener('click', function (e) {
        if (!sidebar.contains(e.target) && !hamburgerIcon.contains(e.target)) {
            sidebar.classList.add('hidden');
        }
    });
});