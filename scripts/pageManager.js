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

loadJsonDatas("./data/pageContent.json")
  .then((data) => {
    main(data);
  })
  .catch((error) => {
    console.error(error);
  });

const main = (data) => {
  const projPage = document.querySelector(".projectPage");
  const projList = document.querySelector(".projectList");
  const projetctPrev = document.querySelector(".projetctPrev");
  const projListHeader = document.querySelector(".projectList").innerHTML;
  const animTiming = 1000;

  const initProject = (data) => {
    projList.innerHTML = projListHeader;
    data.projects.forEach((project) => {
      projList.innerHTML += `
          <li class="projectItem" data-url="${project.src}">
              <h3 class="link-item">${project.title}</h3>
              <p class="techno">${project.type}</p>
          </li>
        `;
    });
    document.querySelectorAll(".projectItem").forEach((project) => {
      project.addEventListener("mouseenter", () => {
        projetctPrev.style.opacity = "1";
        projetctPrev.style.background = `url(${project.dataset.url}) center/cover no-repeat`;
      });
      project.addEventListener("click", () => {
        console.log("clic");
        window.location.href = "./project.html";
      });
      project.addEventListener("mouseleave", () => {
        projetctPrev.style.background = "0";
        projetctPrev.style.background = `url('') center/cover no-repeat`;
      });
    });
  };

  const showProject = (element) => {
    element.addEventListener("click", () => {
      projPage.style.display = "flex";
      setTimeout(() => {
        projPage.style.opacity = "1";
      }, 1);
      setTimeout(() => {
        document.querySelectorAll(".projectItem").forEach((item, index) => {
          setTimeout(() => {
            item.classList.add("appear");
          }, index * 200);
        });
      }, animTiming);
    });
  };

  const hideProject = () => {
    projPage.style.opacity = "0";
    setTimeout(() => {
      projPage.style.display = "none";
    }, animTiming);
    document.querySelectorAll(".projectItem").forEach((item, index) => {
      item.classList.remove("appear");
    });
  };

  document.querySelectorAll(".showProj").forEach((element) => {
    showProject(element);
  });

  document.querySelectorAll(".goAcc").forEach((element) => {
    element.addEventListener("click", () => {
      hideProject();
    });
  });

  initProject(data);
};
