let projectData;
var root = document.querySelector(":root");

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

loadJsonDatas("./data/pageContent.json")
  .then((data) => {
    main(data);
  })
  .catch((error) => {
    console.error(error);
  });

function main(data) {
  var params = getQueryParams();
  const body = document.querySelector("body");
  console.log(params);
  if (params.m == 1) {
    body.classList.add("light");
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
  document.querySelectorAll(".goAcc").forEach((element) => {
    element.addEventListener("click", () => {
      window.location.href = "./";
    });
  });

  let pageData = data.projects.filter((element) => {
    return element.id == params.id;
  })[0];
  let title = document.querySelector("#title");
  let titl = document.querySelector("#titl");
  let type = document.querySelector("#type");
  let year = document.querySelector("#year");
  let tech = document.querySelector("#tech");
  let link = document.querySelector("#link");
  let desc = document.querySelector("#desc");
  title.innerHTML = pageData.title;
  titl.innerHTML = pageData.title;
  type.innerHTML = pageData.type;
  year.innerHTML = pageData.year;
  tech.innerHTML = pageData.tech;
  link.href = pageData.link;
  desc.innerHTML = pageData.desc;
  root.style = `
  --primcol: ${pageData.primcol};
  --darkcol: ${pageData.darkcol};
  --secolor: ${pageData.secolor};
`;
  pageData.detail.forEach((element, index) => {
    const content =
      (element.title
        ? `<div class="paraph"><h3 class="detTitle">${element.title}</h3>`
        : '<div class="paraph">') +
      (element.src ? `<div id="image${index}" class="detImage"></div>` : "") +
      (element.leg
        ? `<div class="detLegende">${element.leg}</div></div>`
        : "</div>");
    document.querySelector(".detailContainer").innerHTML += content;
    document.querySelector(
      "#image" + index
    ).style.background = `url(${element.src}) center/cover no-repeat`;
  });
}
