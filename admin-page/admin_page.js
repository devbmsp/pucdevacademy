const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
function redirecionar() {
  window.location.href = '../homepage/index.php';
}
document.getElementById('sair').addEventListener('click', redirecionar);