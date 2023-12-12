const burguerMenu = document.querySelector('.burguer-menu');
const navMenu = document.querySelector('.menu');

burguerMenu.addEventListener('click', () => {
    if(navMenu.style.display != 'flex') {
        navMenu.style.display = 'flex';
    } else {
        navMenu.style.display = 'none';
    }
});