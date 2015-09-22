function createTable() {
	var s = "";
	for(var i =0; i < 9; i++) {
		s += "<tr>";
		for(var j = 0; j< 9; j++) {
			s += "<td id = \"block_" + i +"_" + j + "\"></td>"
		}
		s += "</tr>";
	}
	return s;
}

document.getElementById('GameBoard').innerHTML = createTable();