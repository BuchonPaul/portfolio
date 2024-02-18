const root = document.documentElement;
const body = document.querySelector("body");
const transDuration = 500;
let isFliped = false;
let isFliping = false;
let projectData;

function onPageLoad() {
  console.log("load");
  if (sessionStorage.getItem("light") == "true") {
    body.classList.add("light");
  } else {
    body.classList.remove("light");
    sessionStorage.setItem("light", false);
  }
}

window.addEventListener("pageshow", onPageLoad);

function urlQuerySet(a, b) {
  var c = JSON.parse(JSON.stringify(a)),
    d = ("" + (b || window.location.href)).split("#"),
    e = d[0].split("?"),
    f = e[0],
    g = "?";
  if (d[1]) {
    var p = ("" + e[1]).split("&");
    if (p[0]) {
      var i, j, k;
      for (i = 0, j = p.length; i < j; i++) {
        k = p[i].split("=");
        if (typeof k[0] === "string" && typeof a[k[0]] === "undefined") {
          c[k[0]] = k[1];
        }
      }
    }
  }
  for (i in c) {
    g +=
      i +
      "=" +
      (typeof c[i] === "string" ? encodeURIComponent(c[i]) : true) +
      "&";
  }
  return f + g.replace(/\&$/, "") + (d[1] ? "#" + d[1] : "");
}

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
  console.log(sessionStorage.getItem("light"));
  if (sessionStorage.getItem("light") == "true") {
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

root.addEventListener("mousemove", function (event) {
  mouseX = event.clientX;
  mouseY = event.clientY;
  root.style.setProperty("--mx", `${mouseX}px`);
  root.style.setProperty("--my", `${mouseY}px`);
});
