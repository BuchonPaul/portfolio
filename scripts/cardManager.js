const intercard = document.querySelector(".landingPage");
let bounds;

function rotateToMouse(e) {
  const mouseX = e.clientX;
  const mouseY = e.clientY;
  const leftX = mouseX - bounds.x;
  const topY = mouseY - bounds.y;
  const center = {
    x: leftX - bounds.width / 2,
    y: topY - bounds.height / 2,
  };
  const distance = Math.sqrt(center.x ** 2 + center.y ** 2);
  document.querySelectorAll(".cardFront").forEach((card) => {
    card.style.transform = `
    scale3d(1,1,1)

    rotate3d(
      ${-center.y / 100},
      ${center.x / 100},
      0,
      ${Math.log(distance) * 2}deg
    )
  `;
  });
  document.querySelector(".cardBackgroundGlow").style.transform = `
    translate3d(
      ${center.x / 400}vw,
      ${center.y / 400}vw,
      0
    )
  `;
  let foil_y = ((window.innerWidth / 2 - center.x) * 100) / window.innerWidth;
  let foil_x = ((window.innerHeight / 2 - center.y) * 100) / window.innerHeight;
  root.style = `
        --h: ${foil_x}%;
        --l: ${foil_y}%;
        --o:${Math.log(distance) / 5};
        --ah: -${foil_x}%;
        --al: -${foil_y}%;
        --mx: ${e.pageX}px;
        --my: ${e.pageY}px;
   `;
}

// intercard.addEventListener("mouseenter", () => {
bounds = intercard.getBoundingClientRect();
document.addEventListener("mousemove", rotateToMouse);
// });
