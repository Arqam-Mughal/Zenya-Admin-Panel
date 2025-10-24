// cdn files
import './cdn/bootstrap.js';



//    Sidebar
const menuToggle = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const mainContent = document.getElementById('mainContent');

menuToggle.addEventListener('click', function () {
    sidebar.classList.toggle('show');
    sidebarOverlay.classList.toggle('show');
    document.body.classList.toggle('sidebar-open');
});

sidebarOverlay.addEventListener('click', function () {
    sidebar.classList.remove('show');
    sidebarOverlay.classList.remove('show');
    document.body.classList.remove('sidebar-open');
});

// Close sidebar when clicking a menu item on mobile
const menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(item => {
    item.addEventListener('click', function () {
        if (window.innerWidth <= 768) {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
            document.body.classList.remove('sidebar-open');
        }
    });
});

//    Sidebar
