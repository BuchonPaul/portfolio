// function appearElement() {
//   document.querySelectorAll(".appear").forEach((element) => {
//     element.style.opacity = 1;
//   });
// }
// window.addEventListener("pageshow", appearElement);

const params = getQueryParams();

const projectLenght = +document.querySelector("#projectLenght").innerHTML;
document.querySelectorAll(".goAcc").forEach((element) => {
  element.addEventListener("click", () => {
    window.location.href = "./";
  });
});

document.querySelector("#prec").addEventListener("click", () => {
  const parametres = {
    id: (+params.id - 1 == -1 ? projectLenght - 1 : +params.id - 1).toString(),
    m: (sessionStorage.getItem("light") == "true" ? 1 : 0).toString(),
  };
  const new_request = urlQuerySet(parametres, window.location);
  window.location.href = new_request;
});

document.querySelector("#next").addEventListener("click", () => {
  const parametres = {
    id: ((+params.id + 1) % projectLenght).toString(),
    m: (sessionStorage.getItem("light") == "true" ? 1 : 0).toString(),
  };
  const new_request = urlQuerySet(parametres, window.location);
  window.location.href = new_request;
});
