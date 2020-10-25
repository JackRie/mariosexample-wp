const menuIcon = document.querySelector(".menu-icon");
const mobileMenu = document.querySelector(".mobile-menu");
const subMenuBtn = document.getElementById("sub-menu-btn");
const subMenuContent = document.querySelector(".sub-menu-content");

menuIcon.addEventListener("click", () => {
  mobileMenu.classList.toggle("hide");
  if (!subMenuContent.classList.contains("hide")) {
    subMenuContent.classList.add("hide");
  }
});

subMenuBtn.addEventListener("click", () => {
  subMenuContent.classList.toggle("hide");
});
