const sidebar = document.querySelector('.sidebar');;
const hamburgerBtn = document.querySelector('.nav__hamburger');
const closeBtn = document.querySelector('.sidebar__close');


function toggleSidebar() {
    sidebar.classList.toggle('sidebar--active');
}

hamburgerBtn.addEventListener('click', toggleSidebar);
closeBtn.addEventListener('click', toggleSidebar);


const seePasswordBtns = [...document.querySelectorAll('.passwords__see')];
const passwordInputs = [...document.querySelectorAll('.passwords__password')];

function passwordToggle(x) {
    passwordInputs[x].type = 'text';
}

for (i = 0; i < seePasswordBtns.length; i++) {
    seePasswordBtns[i].addEventListener('click', passwordToggle.bind(i));
}
