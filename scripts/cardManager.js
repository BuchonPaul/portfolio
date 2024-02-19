const intercard = document.querySelector(".landingPage");
const cardFront = document.querySelector(".cardFront");
const bounds = intercard.getBoundingClientRect();

function rotateToMouse() {
  const leftX = mouseX - bounds.x;
  const topY = mouseY - bounds.y;
  const center = {
    x: leftX - bounds.width / 2,
    y: topY - bounds.height / 2,
  };
  const distance = Math.sqrt(center.x ** 2 + center.y ** 2);

  cardFront.style.transform = `
    rotate3d(
      ${-center.y / 100},
      ${center.x / 100},
      0,
      ${Math.log(distance) * 2}deg
    )
    ${isFliped ? "rotateY(180deg)" : ""}
  `;

  document.querySelector(".cardBackgroundGlow").style.transform = `
    translate3d(
      ${center.x / 400}vw,
      ${center.y / 400}vw,
      0
    )
  `;

  let foil_y = ((window.innerWidth / 2 - center.x) * 100) / window.innerWidth;
  let foil_x = ((window.innerHeight / 2 - center.y) * 100) / window.innerHeight;
  root.style.setProperty("--h", `${foil_x}%`);
  root.style.setProperty("--l", `${foil_y}%`);
  root.style.setProperty("--o", `${Math.log(distance) / 5}`);

  if (!isFliping) {
    requestAnimationFrame(rotateToMouse);
  }
}
rotateToMouse();
