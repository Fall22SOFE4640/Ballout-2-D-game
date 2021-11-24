var canvas = document.getElementById("myCanvas"); //gets Id where the canvas will be drawn 
var ctx = canvas.getContext("2d");
var ballRadius = 9; //intializes the radius of the ball 
var x = canvas.width - Math.floor(Math.random() * 600); //implements the math random function that will be used to spawn the balls 
var y = canvas.height - 30;
const EASY=1;
const MEDIUM=2; 
const HARD=3; 
var dx = 5;
var dy = -4;
var paddleHeight = 12;
var paddleWidth = 100;
var balls = [];
var paddleX = (canvas.width - paddleWidth) / 2;
var rightPressed = false;
var leftPressed = false;
var BallOffsetTop = 30;
var score = 0;
var lives = 3; //intializes the user to have 3 lives 
var ballSpeed = 1.5; //changes the speed of the ball
var frameBallSpawnRate = 120; //changes the rate at which balls spawn (lower the # the faster they spawn)
var gameDiff=0; 
var isGameLost = false;
var play = new Image(); //creates a new object that will be used for the play button
play.src = "https://1.bp.blogspot.com/-fVAKH-3TLuo/W5onDDHje0I/AAAAAAAAB4I/q2ooE6GuzQkS80dtw1JILXjFWdfQ3IKkwCLcBGAs/s1600/breaoutplay.png";


var startBtn = document.getElementById('startBtn');
var EasyBtn = document.getElementById('easyBtn');
var MediumBtn = document.getElementById('mediumBtn');
var HardBtn = document.getElementById('hardBtn');
var resetHighScore = document.getElementById('resetHighScore');

const scoreDisplay=document.querySelector(".high-score");
let highScore=parseInt(localStorage.getItem("highScore"));

const reset=document.querySelector(".reset");




//function that will be used to change the difficulty onclick
function changeDiff(difficulty) {
  gameDiff=difficulty; 
  console.log(gameDiff); 

  
}

//function that will reset the highscore to 0 
function ResetHighScore() {

  scoreDisplay.innerHTML = `High Score: ${0}`;
  localStorage.setItem('highScore', 0);
  
  
}


//function draws the canvas of where the game will be played
function drawCanvas() {
  ctx.beginPath();
  ctx.drawImage("", 0, 0);
  ctx.fill();
  ctx.closePath();

}


//function draws the playbutton onto the screen
function drawPlay() {
  ctx.beginPath();
  ctx.drawImage(play, 250, 250);
  ctx.fill();
  clickable;
  ctx.closePath();

}



//creates eventlisteners for the controls that will be used for the game
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);

//functions allow the user to control the paddle using the left and right arrow keys 
function keyDownHandler(e) {
  if (e.keyCode == 39) {
    rightPressed = true;
  } else if (e.keyCode == 37) {
    leftPressed = true;
  }
}

if (isNaN(highScore)) {
  highScore = 0;
}

scoreDisplay.innerHTML = `High Score: ${highScore}`;




function keyUpHandler(e) {
  if (e.keyCode == 39) {
    rightPressed = false;
  } else if (e.keyCode == 37) {
    leftPressed = false;
  }
}

//function allows the user to optionally control the paddle using the mouse 
function mouseMoveHandler(e) {
  var relativeX = e.clientX - canvas.offsetLeft;
  if (relativeX > 0 && relativeX < canvas.width) {
    paddleX = relativeX - paddleWidth / 2;
  }
}

//function draws the paddle and declares the characteristics of the paddle 
function drawPaddle() {
  ctx.beginPath();
  ctx.rect(paddleX, canvas.height - paddleHeight, paddleWidth, paddleHeight);
  ctx.fillStyle = "yellow";
  ctx.fill();
  ctx.closePath();
}


//function draws the balls and declares the balls characteristics, like its color 
function drawBalls() {
  for (let ball of balls) { //creates a loop that iterates over the array of balls 
    ctx.beginPath();
    ctx.arc(ball.x, ball.y, ballRadius, 0, Math.PI * 2);
    ctx.fillStyle = "black";
    ctx.fill();
    ctx.closePath();
  }
}

function newBall(x, y) {
  return {
    x,
    y
  }
}

//function is crucial to the functionality of the game, it spawns a ball at random each time 
function spawnBall() {
  let randNumber = Math.floor(Math.random() * 10);
  console.log(randNumber); //displays the random number generated to the console 
 
  let ball = newBall(randNumber * canvas.width / 10 + 30, BallOffsetTop)
  balls.push(ball);
}


//function allows the balls to fall
function dropBall() {
  for (let ball of balls) {
    // ball.y = ball.y + ballSpeed;
    switch(gameDiff) {
      case EASY:
        frameBallSpawnRate=120;
        ballSpeed=1.5;  
        break;
        
      case MEDIUM:
        frameBallSpawnRate=80;
        ballSpeed=2.0;  
        break; 

      case HARD: 
        ballSpeed=6.0;
        frameBallSpawnRate=50; 
        break; 

      default: 
        frameBallSpawnRate=120;
        ballSpeed=1.5; 
        break; 

    }
    

    ball.y = ball.y + ballSpeed;

  }
}
 //function allows the score to display on the screen
function drawScore() {
  ctx.font = "16px Arial";
  ctx.fillStyle = "black";
  ctx.fillText("Score: " + score, 8, 20);
}



 //function displays the lives on to the screen
function drawLives() {
  ctx.font = "16px Arial";
  ctx.fillStyle = "black";
  ctx.fillText("Lives: " + lives, canvas.width - 65, 20);
}

var frameCount = 0;
// var frameBallSpawnRate = 120; 





//the driving function calls all the other functions implemented above
function draw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  startBtn.style.display = 'none';
  EasyBtn.style.display= 'none';
  MediumBtn.style.display= 'none';
  HardBtn.style.display= 'none'; 
  resetHighScore.style.display='none'

  frameCount += 1; //increments the framecount by one each time
  if (frameCount === frameBallSpawnRate) {
    spawnBall();
    frameCount = 0;
  }

  drawBalls();
  drawPaddle();
  drawScore();
  drawLives();
  dropBall();
 
  for (let index in balls) { //checks if a particular property exists in balls
    let xDetection = balls[index].x >= paddleX && balls[index].x <= paddleX + 100 //declares a variable for the x detection of the paddle 
    let yDetection = balls[index].y >= canvas.height - paddleHeight && balls[index].y <= canvas.height //declares a variable for the y-detection of a paddle 

    //if paddle detects the ball do this 
    if (xDetection && yDetection) {
      balls.splice(index, 1) //changes contents of the array balls
      score++

    

      //if the paddle does not detect the ball do this 
    } else if (!xDetection && balls[index].y >= canvas.height) {
      balls.splice(index, 1)
      ballSpeed += 0.5
      lives--
    }
  }


  
  //statement will execute if once the user has no more lives and if the game is lost

  if (lives === 0 && !isGameLost) {
    isGameLost = true
    // score=HighSCORE;
    alert("You Lost! \n Please Click the Ok button if you would Like to play again \nOR go to the exit survey on the Nav Bar");
    document.location.reload(); //once the ok button is clicked the page will be reloaded
    localStorage.setItem('highScore', score);

  }

  if (rightPressed && paddleX < canvas.width - paddleWidth) {
    paddleX += 10;
  } else if (leftPressed && paddleX > 0) {
    paddleX -= 10;
  }

  x += dx;
  y += dy;
  requestAnimationFrame(draw);

}
drawCanvas();
drawPlay();


