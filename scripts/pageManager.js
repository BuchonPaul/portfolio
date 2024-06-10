const projPage = document.querySelector(".projectPage");
const projetctPrev = document.querySelector(".projetctPrev");
const animTiming = 500;

document.querySelectorAll(".projectItem").forEach((project) => {
  project.addEventListener("mouseenter", () => {
    projetctPrev.src = `${project.dataset.url}`;
    projetctPrev.style.display = `block`;
    project.querySelector("h3").classList.add("anim");
  });

  project.addEventListener("click", () => {
    window.location.href = "./project.php?id=" + project.id;
  });

  project.addEventListener("mouseleave", () => {
    projetctPrev.src = ``;
    projetctPrev.style.display = `none`;
    project.querySelector("h3").classList.remove("anim");
  });
});

document.querySelectorAll(".showProj").forEach((element) => {
  element.addEventListener("click", () => {
    projPage.style.opacity = "1";
    setTimeout(() => {
      document.querySelectorAll(".projectItem").forEach((item, index) => {
        item.style.display = "flex";
        setTimeout(() => {
          item.classList.add("appear");
        }, index * 200);
      });
    }, animTiming);
  });
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
    projPage.style.opacity = "0";
    document.querySelectorAll(".projectItem").forEach((item) => {
      item.style.display = "none";
      item.classList.remove("appear");
    });
  });
});
