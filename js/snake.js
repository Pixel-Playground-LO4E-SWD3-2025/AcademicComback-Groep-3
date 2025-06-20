/* 
document         = met deze pak je dingen uit je HTML (soort toegangspoort)
.getElementById  = zoekt dat ene ding met een bepaalde id, uit je HTML
const            = vaste variabele, je kan 'm niet later fukken (blijft hetzelfde)
let              = flexibele variabele, je mag deze wel aanpassen later
function         = een blokje code dat je kan laten draaien wanneer jij wil
() => {}         = zelfde als function, maar dan korter — arrow function dus
{}               = blok code, soort container voor wat er moet gebeuren
[]               = lijstje — array — waar je meerdere dingen in kan gooien
.                = “van” iets — bijv. `object.eigenschap`
=                = geeft een waarde aan iets (denk: x = 10)
===              = checkt of twee dingen precies hetzelfde zijn (type en waarde)
if (...)         = als iets waar is, doe dan dit
else             = anders doe je dit (als die if dus niet klopte)
switch           = soort keuzemenu — als je meerdere opties hebt
case             = een van die opties in de switch
break            = zegt: klaar, ga niet verder in de switch
Math.random()    = geeft je een random getal tussen 0 en 1 (voor chaos lol)
Math.floor()     = rond een getal naar beneden af (4.9 wordt 4, geen discussie)
.innerHTML       = verandert wat er letterlijk in een HTML element staat
.appendChild()   = plakt een kind-element (bijv. blokje slang) aan iets vast
createElement()  = maakt een nieuw HTML element (bijv. een <div>)
className        = geeft dat element een class zodat je 't kan stylen
style.           = pakt de CSS-style van iets, bijv. positie of kleur
setInterval()    = laat een functie herhalen elke paar ms (bijv. 200ms)
clearInterval()  = stopt die herhaling — kill switch basically
addEventListener = luistert naar iets (bijv. toets indrukken of klikken)
keydown          = wanneer je een toets indrukt, gebeurt er iets
padStart()       = vult nullen aan vooraan (bijv. van 4 maak je '004' voor looks)
return           = stuurt iets terug uit je functie (denk aan resultaten)
...              = spread operator — kopieert dingen zonder troep mee te slepen


*/

// Pak die elementen van de pagina, anders weet je niet waar je mee werkt
const board = document.getElementById("game-board");
const instructionText = document.getElementById("instruction-text");
const logo = document.getElementById("logo");
const score = document.getElementById("score");
const highScoreText = document.getElementById("highScore");

// Alles wat je nodig hebt om dit spel te laten knallen
const gridSize = 20;
let snake = [{ x: 10, y: 10 }];
let food = generateFood();
let highScore = 0;
let direction = "right";
let gameInterval;
let gameSpeedDelay = 200;
let gameStarted = false;

// Tekent alles opnieuw, slang, eten en score
function draw() {
  board.innerHTML = "";
  drawSnake();
  drawFood();
  updateScore();
}

// Tekent slang blokje voor blokje op 't bord
function drawSnake() {
  snake.forEach((segment) => {
    const snakeElement = createGameElement("div", "snake");
    setPosition(snakeElement, segment);
    board.appendChild(snakeElement);
  });
}

// Maakt een element voor slang of eten zodat CSS weet wat wat is
function createGameElement(tag, className) {
  const element = document.createElement(tag);
  element.className = className;
  return element;
}

// Zet slang of eten op de juiste plek in het grid
function setPosition(element, position) {
  element.style.gridColumn = position.x;
  element.style.gridRow = position.y;
}

// Laat een stukje eten op 't bord zien als je bezig bent
function drawFood() {
  if (gameStarted) {
    const foodElement = createGameElement("div", "food");
    setPosition(foodElement, food);
    board.appendChild(foodElement);
  }
}

// Gooit random eten ergens op 't veld
function generateFood() {
  const x = Math.floor(Math.random() * gridSize) + 1;
  const y = Math.floor(Math.random() * gridSize) + 1;
  return { x, y };
}

// Laat slang bewegen in de juiste richting en checkt of er gegeten wordt
function move() {
  const head = { ...snake[0] };
  switch (direction) {
    case "up":
      head.y--;
      break;
    case "down":
      head.y++;
      break;
    case "left":
      head.x--;
      break;
    case "right":
      head.x++;
      break;
  }
  snake.unshift(head);

  if (head.x === food.x && head.y === food.y) {
    food = generateFood();
    increaseSpeed();
    clearInterval(gameInterval);
    gameInterval = setInterval(() => {
      move();
      checkCollision();
      draw();
    }, gameSpeedDelay);
  } else {
    snake.pop();
  }
}

// Start de game als je op spatie drukt
function startGame() {
  gameStarted = true;
  instructionText.style.display = "none";
  logo.style.display = "none";
  gameInterval = setInterval(() => {
    move();
    checkCollision();
    draw();
  }, gameSpeedDelay);
}

// Regelt wat er gebeurt als je toetsen indrukt
function handleKeyPress(event) {
  if (
    (!gameStarted && event.code === "Space") ||
    (!gameStarted && event.key === " ")
  ) {
    startGame();
  } else {
    switch (event.key) {
      case "ArrowUp":
        direction = "up";
        break;
      case "ArrowDown":
        direction = "down";
        break;
      case "ArrowLeft":
        direction = "left";
        break;
      case "ArrowRight":
        direction = "right";
        break;
    }
  }
}

document.addEventListener("keydown", handleKeyPress);

// Slang gaat steeds sneller hoe langer je leeft
function increaseSpeed() {
  if (gameSpeedDelay > 150) {
    gameSpeedDelay -= 5;
  } else if (gameSpeedDelay > 100) {
    gameSpeedDelay -= 3;
  } else if (gameSpeedDelay > 50) {
    gameSpeedDelay -= 2;
  } else if (gameSpeedDelay > 25) {
    gameSpeedDelay -= 1;
  }
}

// Checkt of slang zichzelf raakt of buiten het veld gaat
function checkCollision() {
  const head = snake[0];
  if (head.x < 1 || head.x > gridSize || head.y < 1 || head.y > gridSize) {
    resetGame();
  }
  for (let i = 1; i < snake.length; i++) {
    if (head.x === snake[i].x && head.y === snake[i].y) {
      resetGame();
    }
  }
}

// Zet alles terug naar het begin als slang dood is
function resetGame() {
  updateHighScore();
  stopGame();
  snake = [{ x: 10, y: 10 }];
  food = generateFood();
  direction = "right";
  gameSpeedDelay = 200;
  updateScore();
}

// Laat je huidige score zien op het scherm
function updateScore() {
  const currentScore = snake.length - 1;
  score.textContent = currentScore.toString().padStart(3, "0");
}

// Pauzeert de game en laat instructies weer zien
function stopGame() {
  clearInterval(gameInterval);
  gameStarted = false;
  instructionText.style.display = "block";
  logo.style.display = "block";
}

// Als je nu hoger scoort dan je highscore, wordt dat je nieuwe highscore
function updateHighScore() {
  const currentScore = snake.length - 1;
  if (currentScore > highScore) {
    highScore = currentScore;
    highScoreText.textContent = highScore.toString().padStart(3, "0");
  }
  highScoreText.style.display = "block";
}
// hightscores
