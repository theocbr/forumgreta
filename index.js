const content = document.querySelector(".testdiv");
const bouton = document.querySelector(".btn");

const btnclick = () => {
  content.classList.toggle("green");
};

bouton.addEventListener("click", btnclick);

