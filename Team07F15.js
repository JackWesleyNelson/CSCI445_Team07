var dimension = 9;
var maxBombs = 10;
var playing = true;
var started = false;

function chooseDifficulty(difficulty) {
	switch(difficulty) {
		case "easy":
			dimension = 9;
			maxBombs = 10;
			newGame();
			drawGrid();
			break;
		case "intermediate":
			dimension = 15;
			maxBombs = 40;
			newGame();
			drawGrid();
			break;
		case "expert":
			dimension = 21;
			maxBombs = 99;
			newGame();
			drawGrid();
			break;
		default:
			dimension = 9;
			maxBombs = 10;
			newGame();
			drawGrid();
			break;
	}
}
var grid = new Array(dimension);

var imgs = new Array(11)
var flag = false;

function createImages() {
    for(var i =0; i<12; i++) {
        var img = document.createElement("img");
        img.src = "image"+i+".png";
        imgs[i] = (img);
    }
}

function setUp() {
    for(var i=0; i<dimension; i++)
            for(var j=0 ; j<dimension; j++) {
				document.getElementById("canvas"+i+"_"+j).setAttribute("x", i);
				document.getElementById("canvas"+i+"_"+j).setAttribute("y", j);
                document.getElementById("canvas"+i+"_"+j).addEventListener('click', function(event)                     {
					if(!started){
						startgame(this.getAttribute("x"), this.getAttribute("y"));
						
						calcNumbers();
						started = true;
						drawGrid();
					}
					if(playing){
						if(!flag) {
							this.setAttribute("clicked", true)
							drawGrid();
						}
						else {
							if(this.getAttribute("clicked") == "false" && flags < maxBombs && this.getAttribute("flagged") == "false"){
								flags++;
								this.setAttribute("flagged", "true");
							}
							else if(this.getAttribute("clicked") == "false" &&  this.getAttribute("flagged") == "true"){
								flags--;
								this.setAttribute("flagged", "false");
							}
							drawGrid();
						}
					}
					document.getElementById('gameMessage').innerHTML = (maxBombs - flags);
					var s = gameOver();
					if(s != ""){
						document.getElementById('gameMessage').innerHTML = s;
					}
                }, false);
            }
    document.getElementById("flagbutton").onclick = function() { flag = !flag; };
    document.getElementById("resetbutton").onclick = function() { newGame(); };
}

function drawGrid() {
    var img2 = document.createElement("img");
    img2.src = "image10.png";
    for(var i=0;i<dimension;i++)
        for(var j=0;j<dimension;j++) {
			var canvas = document.getElementById("canvas"+i+"_"+j);
			var width = canvas.width;
			var height = canvas.height;
            if(canvas.getAttribute("clicked") == "true") {
                canvas.getContext("2d").drawImage(imgs[grid[i][j]],0,0, imgs[grid[i][j]].width, imgs[grid[i][j]].height, 0, 0, width, height);
            }
            else if(document.getElementById("canvas"+i+"_"+j).getAttribute("flagged") == "true") {
                document.getElementById("canvas"+i+"_"+j).getContext("2d").drawImage(imgs[11],0,0, 100, 100);
            }
            else {
                canvas.getContext("2d").drawImage(imgs[10],0,0, imgs[10].width, imgs[10].height, 0, 0, width, height);
            }
        }
}

function check(row, col) {
    var data = grid[row][col];
    if( data == 9)
        return;
    if( row > 0 && col > 0 && grid[row-1][col-1] == 9)
        data ++;
    if( row > 0  && grid[row-1][col] == 9)
        data ++;
    if( row > 0 && col < dimension-1 && grid[row-1][col+1] == 9)
        data ++;
    if( col > 0 && grid[row][col-1] == 9)
        data ++;
    if( col < dimension-1 && grid[row][col+1] == 9)
        data ++;
    if( row < dimension-1 && col > 0 && grid[row+1][col-1] == 9)
        data ++;
    if( row < dimension-1 && grid[row+1][col] == 9)
        data ++;
    if( row < dimension-1 && col < dimension-1 && grid[row+1][col+1] == 9)
        data ++;
    grid[row][col] = data;
}

function calcNumbers() {
    for(var i=0; i<dimension; i++) {
        for(var j=0 ; j<dimension; j++) {
            check( i, j );
        }
    }
}

function makeGrid(){
	for(var i=0; i<dimension; i++) {
        grid[i] = new Array(dimension);
        for(var j=0 ; j<dimension; j++) {
            grid[i][j] = 0;
        }
    }
}

function startgame(startRow, startCol) {
    var b = 0;
    while(b < maxBombs) {
        for(var i=0; i<dimension; i++) {
            for(var j=0 ; j<dimension; j++) {
                if(i != startRow && j != startCol && parseInt(Math.floor(Math.random() * 10)) < 2 && grid[i][j] != dimension && b < maxBombs) {
                    grid[i][j] = 9;
                    b++;
                }
            }
        }
    }
}


function createTable() {
	//open the table row
	var s = "<tr>"
	//create a button for the marking flags above the game grid, spanning 1/3 of the columns.
    s += "<td colspan = "+ Math.round(dimension/3) + "><button type=\"button\" id =\"flagbutton\">Flag</button></td>";
	//create a button for resetting the game above the game grid, spanning 1/3 of the columns.
    s += "<td colspan = "+ Math.round(dimension/3) + "><button type=\"button\" id =\"resetbutton\">Reset</button></td>";
	//display the number of bombs in the game - the number of flags the user has placed. Above the game grid, spanning 1/3 of the columns
    s += "<td id = \"gameMessage\"colspan = "+ Math.round(dimension/3) + ">"+(maxBombs - flags)+"</td></tr>";
	//iterate over the rows
	for(var i =0; i < dimension; i++) {
		//open a table row
		s += "<tr>";
		//iterate over the columns
		for(var j = 0; j< dimension; j++) {
			//add the canvas for the current position in our table
			s += "<td id = \"block_" + i +"_" + j + "\"><canvas id=\"canvas"+ i + "_" + j + "\" clicked = false flagged=false></canvas></td>"
		}
		//close off the table row
		s += "</tr>";
    }
	//return the generated html string.
	return s;
}

function newGame() {
	//reset the flags placed to 0.
    flags = 0;
	//set the user to not be placing a flag.
    flag = false;
	//set the game to being played.
	playing = true;
	started = false;
	//create all the needed images.
    createImages();
	makeGrid();
	//set up the grids bombs.
    //startgame();
	//set up corresponding numbers for each tile.
    //calcNumbers();
	//set the html in the GameBoard table to display the relevant html.
    document.getElementById('GameBoard').innerHTML = createTable();
	//set the click events for all the canvas', and other buttons.
    setUp();
	//call the draw functions for each of the canvas'.
    drawGrid();
}

function gameOver(){
	playing = false;
	//set the return string to congratulate the user initially.
	var message = "Congratulations!";
	//iterate over the current games values.
	for(var i = 0; i < dimension; i++){
		for(var j = 0; j < dimension; j++){
			//if the canvas at this location has been clicked.
			if(document.getElementById("canvas"+i+"_"+j).getAttribute("clicked") == "true"){
				//if the user clicked a bomb, return game over message.
				if(grid[i][j] == 9){
					return "Game Over!";
				}
			}
			//if the canvas at this location has not been clicked.
			if(document.getElementById("canvas"+i+"_"+j).getAttribute("clicked") == "false"){
				//if the user hasn't clicked a tile, and that tile isn't a bomb, then the game isn't over yet so return no message.
				if(grid[i][j] != 9){
					playing = true;
					message = "";
				}
			}
		}
	}
	//return the message for the current game state
	return message;
}

newGame();
//when the window loads
window.onload = function() {
	//draw the grid
    drawGrid;
	//start a new game with default parameters
	newGame();
}