const sidebar = document.querySelector('.sidebar');;
const hamburgerBtn = document.querySelector('.nav__hamburger');
const closeBtn = document.querySelector('.sidebar__close');


function toggleSidebar() {
    sidebar.classList.toggle('sidebar--active');
}

hamburgerBtn.addEventListener('click', toggleSidebar);
closeBtn.addEventListener('click', toggleSidebar);
