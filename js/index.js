const burguerMenu = document.querySelector(".burguer-menu");
const navMenu = document.querySelector(".menu");

burguerMenu.addEventListener("click", () => {
  if (navMenu.style.display != "flex") {
    navMenu.style.display = "flex";
  } else {
    navMenu.style.display = "none";
  }
});

const services = document.querySelectorAll(".service");
const fullServices = document.querySelectorAll(".full__service");

services.forEach((service) => {
  if (window.innerWidth > 900) {
    service.addEventListener("mouseover", () => {
      var currentClass = service.classList[1];
      fullServices.forEach((fullService) => {
        if (fullService.classList.contains(currentClass)) {
          fullService.classList.add("active");
        }
        fullService.addEventListener("mouseout", () => {
          fullService.classList.remove("active");
        });
      });
    });
  } else {
    service.addEventListener("click", () => {
      const closes = document.querySelectorAll(".close");
      var currentClass = service.classList[1];
      fullServices.forEach((fullService) => {
        if (fullService.classList.contains(currentClass)) {
          fullServices.forEach((fs) => {
            fs.classList.remove("active");
          });
          fullService.classList.add("active");
          var topCoord = window.pageYOffset;
          var headerHeight = vhToPx(27);
          topCoord = topCoord - headerHeight;
          fullService.style.top = topCoord + "px";
        }
        closes.forEach((close) => {
          close.style.display = "block";
          close.addEventListener("click", () => {
            close.parentElement.classList.remove("active");
          });
        });
      });
    });
  }
});

// CONVIERTE VH A PX
function vhToPx(vh) {
  return Math.round(window.innerHeight * (vh / 100));
}
