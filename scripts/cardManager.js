const intercard = document.querySelector(".landingPage");
const cardFront = document.querySelector(".cardFront");
const cardStyle = cardFront.style;
const glowStyle = document.querySelector(".cardBackgroundGlow").style;
const bounds = intercard.getBoundingClientRect();
const centerX = bounds.width / 2;
const centerY = bounds.height / 2;

let lastTime = 0;
const throttleTime = 16; // environ 60 FPS
function rotateToMouse(timestamp) {
  if (timestamp - lastTime < throttleTime) {
    requestAnimationFrame(rotateToMouse);
    return;
  }

  lastTime = timestamp;
  const leftX = mouseX - bounds.x;
  const topY = mouseY - bounds.y;
  const center = {
    x: leftX - centerX,
    y: topY - centerY,
  };

  const distance = Math.sqrt(center.x ** 2 + center.y ** 2);

  const rotation = `
    rotate3d(
      ${-center.y / 100},
      ${center.x / 100},
      0,
      ${Math.log(distance) * 2}deg
    )
    ${isFliped ? "rotateY(180deg)" : ""}
  `;

  cardStyle.transform = rotation;

  glowStyle.transform = `
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
requestAnimationFrame(rotateToMouse);
