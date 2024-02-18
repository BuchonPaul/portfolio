loadJsonDatas("./data/pageContent.json")
  .then((data) => {
    main(data);
  })
  .catch((error) => {
    console.error(error);
  });

function main(data) {
  console.log(data);
  var params = getQueryParams();
  const body = document.querySelector("body");
  // if (params.m == 1) {
  //   body.classList.add("light");
  // }
  document.querySelectorAll(".goAcc").forEach((element) => {
    element.addEventListener("click", () => {
      window.location.href = "./";
    });
  });

  let pageData = data.projects.filter((element) => {
    return element.id == params.id;
  })[0];
  // let title = document.querySelector("#title");
  let titl = document.querySelector("#titl");
  let type = document.querySelector("#type");
  let year = document.querySelector("#year");
  let tech = document.querySelector("#tech");
  let link = document.querySelector("#link");
  let desc = document.querySelector("#desc");
  let topImage = document.querySelector(".topImage");
  topImage.style.background = `url(${pageData.src}) center/cover no-repeat`;
  // title.innerHTML = pageData.title;
  titl.innerHTML = pageData.title;
  type.innerHTML = pageData.type;
  year.innerHTML = pageData.year;
  tech.innerHTML = pageData.tech;
  link.href = pageData.link;
  desc.innerHTML = pageData.desc;

  root.style.setProperty("--darktitlecol", `${pageData.darktitlecol}`);
  root.style.setProperty("--lighttitlecol", `${pageData.lighttitlecol}`);
  root.style.setProperty("--darkshapecol", `${pageData.darkshapecol}`);
  root.style.setProperty("--lightshapecol", `${pageData.lightshapecol}`);
  if (pageData.detail) {
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

  document.querySelector("#prec").addEventListener("click", () => {
    var parametres = {
      id: (+params.id - 1 == -1
        ? data.projects.length - 1
        : +params.id - 1
      ).toString(),
      m: (sessionStorage.getItem("light") == "true" ? 1 : 0).toString(),
    };
    const new_request = urlQuerySet(parametres, window.location);
    window.location.href = new_request;
  });

  document.querySelector("#next").addEventListener("click", () => {
    var parametres = {
      id: ((+params.id + 1) % data.projects.length).toString(),
      m: (sessionStorage.getItem("light") == "true" ? 1 : 0).toString(),
    };
    const new_request = urlQuerySet(parametres, window.location);
    window.location.href = new_request;
  });
}
