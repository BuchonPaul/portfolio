const root = document.querySelector(":root");
const body = document.querySelector("body");
const transDuration = 500;
let isFliped = false;
let isFliping = false;
let projectData;

function loadJsonDatas(file) {
  return new Promise((resolve, reject) => {
    if (projectData) {
      // Si les données sont déjà chargées, résolvez immédiatement la promesse.
      resolve(JSON.parse(projectData));
    } else {
      var rawFile = new XMLHttpRequest();
      rawFile.overrideMimeType("application/json");
      rawFile.open("GET", file, true);
      rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
          if (rawFile.status == "200") {
            projectData = rawFile.responseText;
            resolve(JSON.parse(projectData));
          } else {
            reject(
              new Error(
                `Erreur de chargement des données JSON. Statut ${rawFile.status}`
              )
            );
          }
        }
      };
      rawFile.send(null);
    }
  });
}

function getQueryParams() {
  var params = {};
  var queryString = window.location.search.substring(1);
  var queryParams = queryString.split("&");

  for (var i = 0; i < queryParams.length; i++) {
    var pair = queryParams[i].split("=");
    var key = decodeURIComponent(pair[0]);
    var value = decodeURIComponent(pair[1] || "");
    params[key] = value;
  }

  return params;
}

document.querySelector(".theme").addEventListener("click", () => {
  if (body.classList.contains("light")) {
    body.classList.remove("light");
    sessionStorage.setItem("light", false);
  } else {
    body.classList.add("light");
    sessionStorage.setItem("light", true);
  }
});

const ball = document.querySelector("div.ball");
let mouseX = 0;
let mouseY = 0;
let ballX = 0;
let ballY = 0;
let speed = 0.3;

function animate() {
  let distX = mouseX - ballX;
  let distY = mouseY - ballY;

  ballX = ballX + distX * speed;
  ballY = ballY + distY * speed;

  ball.style.left = ballX + "px";
  ball.style.top = ballY + "px";

  requestAnimationFrame(animate);
}

animate();

document.addEventListener("mousemove", function (event) {
  mouseX = event.pageX;
  mouseY = event.pageY;
});
