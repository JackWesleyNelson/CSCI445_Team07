<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">
	h1 {
		text-align: center;
	}
	.connectImg {
		width: 30%;
		margin-left: 35%;
		margin-top: 50px;
	}
	form {
		width: 30%;
		margin-left: 35%;
	}
	.checkboxes {
		height: auto;
		text-align: center;
	}
	.box {
		padding: 10px 10px 10px 10px;
	}
	.btn {
		width: 100%;
	}
	</style>
</head>
<body>
	<img src="img/connect.png" class="connectImg">
	<h1>Tell Us About Yourself</h1><br>
	<form>
		<div class="input-group">
  			<span class="input-group-addon" id="firstnameLabel">First Name</span>
  			<input type="text" class="form-control" name="firstName" aria-describedby="firstnameLabel">
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="lastnameLabel">Last Name</span>
  			<input type="text" class="form-control" name="lastName" aria-describedby="lastnameLabel">
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="languageLabel">Favorite Programming Language</span>
  			<select name="language" class="form-control" aria-describedby="languageLabel">
    			<option value="cpp">C/C++</option>
    			<option value="java">Java</option>
    			<option value="python">Python</option>
  			</select>
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="coursesLabel">CS Courses Taken</span>
  			<div class="form-control checkboxes">
  			<input type="checkbox" class="box" name="coursesTaken" value="CSCI261" aria-describedby="coursesLabel">CSCI 261<br>
  			<input type="checkbox" class="box" name="coursesTaken" value="CSCI262" aria-describedby="coursesLabel">CSCI 262<br>
  			<input type="checkbox" class="box" name="coursesTaken" value="CSCI306" aria-describedby="coursesLabel">CSCI 306<br>  
  			<input type="checkbox" class="box" name="coursesTaken" value="CSCI406" aria-describedby="coursesLabel">CSCI 406<br>  
  			</div>
  			
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="languageLabel">Team Style Preference</span>
  			<select name="language" class="form-control" aria-describedby="languageLabel">
    			<option value="social">Social Team</option>
    			<option value="competitive">Competitive Team</option>
    			<option value="noPref">No Preference</option>
  			</select>
		</div>
		<br>
		<input type="submit" value="Submit" class="btn btn-primary">
	</form>
</body>
</html>