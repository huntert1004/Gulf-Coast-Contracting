const sidebarLinks = document.querySelectorAll('.sidebar-link');

const currentPath = window.location.pathname;

sidebarLinks.forEach(link => {

    if (link.getAttribute('href') === currentPath) {
        link.classList.add('active');
    } else {
        link.classList.remove('active');
    }
});