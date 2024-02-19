const main = () => {
  const projPage = document.querySelector(".projectPage");
  const projetctPrev = document.querySelector(".projetctPrev");

  const animTiming = 1000;

  const initProject = () => {
    document.querySelectorAll(".projectItem").forEach((project) => {
      project.addEventListener("mouseenter", () => {
        projetctPrev.style.opacity = "1";
        projetctPrev.style.background = `url(${project.dataset.url}) center/cover no-repeat`;
      });
      project.addEventListener("click", () => {
        window.location.href = "./project.php?id=" + project.id;
      });
      project.addEventListener("mouseleave", () => {
        projetctPrev.style.opacity = "0";
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
          item.style.display = "flex";

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
      item.style.display = "none";
      item.classList.remove("appear");
    });
  };

  document.querySelectorAll(".showProj").forEach((element) => {
    showProject(element);
  });

  document.querySelectorAll(".showAbout").forEach((element) => {
    element.addEventListener("click", (e) => {
      isFliped = !isFliped;
      isFliping = true;
      const saveTrans = cardFront.style.transition;
      cardFront.style.transition = `transform ${transDuration}ms`;
      rotateToMouse(e);
      setTimeout(() => {
        if (!isFliped) {
          document.querySelector(".about").style.opacity = "0";
          document.querySelector(".front").style.opacity = "1";
        } else {
          document.querySelector(".about").style.opacity = "1";
          document.querySelector(".front").style.opacity = "0";
        }
      }, transDuration / 4);

      setTimeout(() => {
        cardFront.style.transition = saveTrans;
        isFliping = false;
        rotateToMouse();
      }, transDuration);
    });
  });

  document.querySelectorAll(".goAcc").forEach((element) => {
    element.addEventListener("click", () => {
      hideProject();
    });
  });

  initProject();
};

main();
