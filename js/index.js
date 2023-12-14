const burguerMenu = document.querySelector('.burguer-menu');
const navMenu = document.querySelector('.menu');

burguerMenu.addEventListener('click', () => {
    if(navMenu.style.display != 'flex') {
        navMenu.style.display = 'flex';
    } else {
        navMenu.style.display = 'none';
    }
});


const services = document.querySelectorAll('.service');
const fullServices = document.querySelectorAll('.full__service');


services.forEach(service => {
    service.addEventListener('mouseover', () => {
        var currentClass = service.classList[1];
        fullServices.forEach(fullService => {
            if (fullService.classList.contains(currentClass)) {
                fullService.classList.add('active');
            }
            fullService.addEventListener('mouseout', () => {
                fullService.classList.remove('active');
            });
        });
    });
});