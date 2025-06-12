//define html elements idk wat het is maar k ga het nu leren
const board = document.getElementById("game-board");

//game variablen met een array dit
let snake = [{ x: 10, y: 10 }];

//dit tekent de map en chaps omdat de innherhtml leeg is reset hij de board de hele tijd
function draw() {
  board.innerHTML = "";
  drawSnake();
}

//tekent de snake
// => betekent do something
//appendchild voegt een kind toe aan het einde van de lijst idfk wat dat betekent maar komt goed vraag braas
function drawSnake() {
  snake.forEach((segment) => {
    const snakeElement = createGameElement("div", "snake");
    setPosition(snakeElement, segment);
    board.appendChild(snakeElement);
  });
}

//dit maakt de snake en zn eten
function createGameElement(tag, className) {
  const element = document.createElement(tag);
  element.className = className;
  return element;
}

//set position of sname and food so basically it gonna put it on the board
//de position here is the segment
// en gaat terug naar de cords boven
function setPosition(element, position) {
  element.style.gridColumn = position.x;
  element.style.gridRow = position.y;
}
document.getElementById("start-btn").addEventListener("click", startGame);

function startGame() {
  // Reset de slang en eventueel andere variabelen
  snake = [{ x: 10, y: 10 }];
  draw();
  // Hier kun je straks ook de game-loop starten
}

//testing of ik niet heb opgefucked
draw();
