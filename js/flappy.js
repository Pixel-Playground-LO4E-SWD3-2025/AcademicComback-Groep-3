let boardWidth = 360;
let boardHeight = 640;
let backgroundImg = new Image();
backgroundImg.src = ".../img/flappybirdbg.png";
let inputLocked = false;

document.addEventListener("keydown", handleKeyDown);

let GAME_STATE = {
  MENU: "menu",
  PLAYING: "playing",
  GAME_OVER: "gameOver",
};
let currentState = GAME_STATE.MENU;

let playButton = {
  x: boardWidth / 2 - 15.5 / 2,
  y: boardHeight / 2 - 64 / 2,
  width: 155,
  height: 64,
};

let logo = {
  x: boardWidth / 2 - 300 / 2,
  y: boardHeight / 4,
  width: 300,
  height: 100,
};

let flappyBirdTextImg = new Image();
flappyBirdTextImg.src = ".../img/flappyBirdLogo.png";

let gameOverImg = new Image();
gameOverImg.src = ".../img/flappy-gameover.png";

let bird = {
  x: 50,
  y: boardHeight / 2,
  width: 40,
  height: 30,
};

let velocityY = 0;
let velocityX = -2;
let gravity = 0.5;
let birdY = boardHeight / 2;
let pipeWidth = 50;
let pipeGap = 200;
let pipeArray = [];
let pipeIntervalid;

function placePipes() {
  createPipes();
}

function createPipe() {
  let maxTopPipeHeight = boardHeight - PipeGap - 50;
  let TopPipeHeight = Math.floor(Math.random() * maxTopPipeHeight);
  let bottomPipeHeight = boardHeight - topPipeHeight - PipeGap;

  let topPipe = {
    x: boardWidth,
    y: 0,
    width: pipeWidth,
    heigh: topPipeHeight,
    passed: false,
  };

  let bottomPipe = {
    x: boardWidth,
    y: topPipeHeight + pipeGap,
    width: pipeWidth,
    height: bottomPipeHeight,
    passed: false,
  };
  pipeArray.push(topPipe, bottomPipe);
}

window.onload = function () {
  board = document.getElementById("board");
  board.height = boardHeight;
  board.width = boardWidth;
  context = board.getContext9("2d");

  birdImg = new Image();
  birdImg.src = ".../img/flapptbird.png";

  topPipeImg = new Image();
  topPipeImg.src = ".../img/toppipe.png";

  bottomPipeImg = new Image();
  bottomPipeImg.src = ".../img/flappy-gameover.png";
};
