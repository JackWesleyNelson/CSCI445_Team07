var dimension = 9;
var maxBombs = 10;
function chooseDifficulty(difficulty) {
	switch(difficulty) {
		case "easy":
			dimension = 9;
			maxBombs = 10;
			newGame();
			drawGrid();
			break;
		case "intermediate":
			dimension = 16;
			maxBombs = 40;
			newGame();
			drawGrid();
			break;
		case "expert":
			dimension = 22;
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
    for(var i =0; i<11; i++) {
        var img = document.createElement("img");
        img.src = "image"+i+".png";
        imgs[i] = (img);
    }
}

function setUp() {
    for(var i=0; i<dimension; i++)
            for(var j=0 ; j<dimension; j++) {
                document.getElementById("canvas"+i+"_"+j).addEventListener('click', function(event)                     {
                    if(!flag) {
                        this.setAttribute("clicked", true)
                        drawGrid();
                    }
                    else {
                        if(this.getAttribute("clicked") == "false" && flags < maxBombs)
                            flags++;
                        document.getElementById('gameMessage').innerHTML = (maxBombs - flags);
                        drawGrid();
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
            if(document.getElementById("canvas"+i+"_"+j).getAttribute("clicked") == "true") {
                document.getElementById("canvas"+i+"_"+j).getContext("2d").drawImage(imgs[grid[i][j]],0,0, 100, 100);
            }
            else {
                document.getElementById("canvas"+i+"_"+j).getContext("2d").drawImage(imgs[10],0,0, 100, 100);
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

function startgame() {
    for(var i=0; i<dimension; i++) {
        grid[i] = new Array(dimension);
        for(var j=0 ; j<dimension; j++) {
            grid[i][j] = 0;
        }
    }
    
    var b = 0;
    while(b < maxBombs) {
        for(var i=0; i<dimension; i++) {
            for(var j=0 ; j<dimension; j++) {
                if(parseInt(Math.floor(Math.random() * 10)) < 2 && grid[i][j] != dimension && b < maxBombs) {
                    grid[i][j] = dimension;
                    b++;
                }
            }
        }
    }
}

function createTable() {
	var s = "<tr>"
    s += "<td colspan = "+ Math.round(dimension/3) + "><button type=\"button\" id =\"flagbutton\">Flag</button></td>";
    s += "<td colspan = "+ Math.round(dimension/3) + "><button type=\"button\" id =\"resetbutton\">Reset</button></td>";
    s += "<td id = \"gameMessage\"colspan = "+ Math.round(dimension/3) + ">"+(maxBombs - flags)+"</td></tr>";
	for(var i =0; i < dimension; i++) {
		s += "<tr>";
		for(var j = 0; j< dimension; j++) {
			s += "<td id = \"block_" + i +"_" + j + "\"><canvas id=\"canvas"+ i + "_" + j + "\" clicked = false></canvas></td>"
		}
		s += "</tr>";
    }
	return s;
}

function newGame() {
    flags = 0;
    flag = false;
    createImages();
    startgame();
    calcNumbers();
    document.getElementById('GameBoard').innerHTML = createTable();
    setUp();
    drawGrid();
}

newGame();
window.onload = function() {
    drawGrid;
}