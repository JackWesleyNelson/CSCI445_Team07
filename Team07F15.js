var dimension = 9;
var grid = new Array(dimension);
var maxBombs = 10;

function check(row, col) {
    var data = grid[row][col];
    if( data == dimension)
        return;
    if( row > 0 && col > 0 && grid[row-1][col-1] == dimension)
        data ++;
    if( row > 0  && grid[row-1][col] == dimension)
        data ++;
    if( row > 0 && col < dimension-1 && grid[row-1][col+1] == dimension)
        data ++;
    if( col > 0 && grid[row][col-1] == dimension)
        data ++;
    if( col < dimension-1 && grid[row][col+1] == dimension)
        data ++;
    if( row < dimension-1 && col > 0 && grid[row+1][col-1] == dimension)
        data ++;
    if( row < dimension-1 && grid[row+1][col] == dimension)
        data ++;
    if( row < dimension-1 && col < dimension-1 && grid[row+1][col+1] == dimension)
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
	var s = "";
	for(var i =0; i < dimension; i++) {
		s += "<tr>";
		for(var j = 0; j< dimension; j++) {
			s += "<td id = \"block_" + i +"_" + j + "\"></td>"
		}
		s += "</tr>";
	}
	return s;
}

document.getElementById('GameBoard').innerHTML = createTable();
startgame();
calcNumbers();