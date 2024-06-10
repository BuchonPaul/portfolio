const root = document.documentElement;
const body = document.querySelector("body");
const transDuration = 500;
let isFliped = false;
let isFliping = false;
let projectData;

function onPageLoad() {
  if (sessionStorage.getItem("light") == "true") {
    body.classList.add("light");
  } else {
    body.classList.remove("light");
    sessionStorage.setItem("light", false);
  }
}

window.addEventListener("pageshow", onPageLoad);

function urlQuerySet(a, b) {
  let c = JSON.parse(JSON.stringify(a)),
    d = ("" + (b || window.location.href)).split("#"),
    e = d[0].split("?"),
    f = e[0],
    g = "?";
  if (d[1]) {
    const p = ("" + e[1]).split("&");
    if (p[0]) {
      let i, j, k;
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

function getQueryParams() {
  const params = {};
  const queryString = window.location.search.substring(1);
  const queryParams = queryString.split("&");

  for (let i = 0; i < queryParams.length; i++) {
    const pair = queryParams[i].split("=");
    const key = decodeURIComponent(pair[0]);
    const value = decodeURIComponent(pair[1] || "");
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

let mouseX = 0,
  mouseY = 0;
let posX = 0,
  posY = 0;
const lerpFactor = 0.6;

function lerp(a, b, t) {
  return (1 - t) * a + t * b;
}

function updateMousePosition() {
  posX = lerp(posX, mouseX, lerpFactor);
  posY = lerp(posY, mouseY, lerpFactor);

  root.style.setProperty("--mx", `${posX}px`);
  root.style.setProperty("--my", `${posY}px`);

  requestAnimationFrame(updateMousePosition);
}

root.addEventListener("mousemove", function (event) {
  mouseX = event.clientX;
  mouseY = event.clientY;
});

updateMousePosition();

document.querySelectorAll(".callToAction").forEach((element) => {
  element.addEventListener("mouseenter", function (event) {
    document.querySelector(".ball").classList.add("action");
  });
  element.addEventListener("mouseleave", function (event) {
    document.querySelector(".ball").classList.remove("action");
  });
});
document.addEventListener("mousedown", function (event) {
  document.querySelector(".ball").classList.add("action");
});
document.addEventListener("mouseup", function (event) {
  document.querySelector(".ball").classList.remove("action");
});
