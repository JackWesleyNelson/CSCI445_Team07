@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<img src="{{ asset('img/connect.png') }}" class="connectImg">
				<div class="panel-heading">Administrator Page</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                        {!! csrf_field() !!}
						<div class="MaxMinSelect">
							Maximum Team Size:
							<select name="max" class="form-control">
							   <option value="1">1</option>
							   <option value="2">2</option>
							   <option value="3">3</option>
							   <option value="4">4</option>
							</select>
							Minimum Team Size:
							<select name="min" class="form-control">
							   <option value="1">1</option>
							   <option value="2">2</option>
							   <option value="3">3</option>
							   <option value="4">4</option>
							</select>
						</div>
						<br>
						<button type="submit" class="btn btn-primary button">Assign Teams</button>
					</form>
					<br><hr>
					<div class="editLabel">Team Editor</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Teams</div>
							<div class="panel-body">
								@foreach ($teams as $team)
										<input type="button" value="{{$team->name}}" class="btn btn-primary teamButton" onclick="getTeam('{{$team->name}}');"/><br>
						    @endforeach
							</div>
						</div>
					</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Team Info</div>
							<div class="panel-body" id="teamInfoPanel">
								<form class="" action="" method="">

									<div class="form-group" id="nameSection">
								    <label for="teamName">Team Name:</label>
								    <input type="text" class="form-control" id="teamName" value="{{$currentTeam->name}}">
								  </div><br>

									<div class="form-group">
								    <label for="teamLanguage">Team Language:</label>
										<select name="language" class="form-control" aria-describedby="teamLanguage">
												<option value="C/C++">C/C++</option>
												<option value="Java">Java</option>
												<option value="Python">Python</option>
										</select>
								  </div>

									<div class="form-group" id="memberSection">
								    <label for="teamName">Members:</label>
										@for ($i = 0; $i < sizeof($currentStudentName); $i++)
											<button class='btn btn-primary memberButton'>{{$currentStudentName[$i][0]}}</button><a href="">X</a><br>
										@endfor
								  </div>
									<input type="submit" class='btn btn-success update' value="Update Team"/>
								</form>

							</div>
						</div>
					</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">All Students</div>
							<div class="panel-body">
								@foreach ($students as $student)
										<input type="button" value="{{$student->username}}" class="btn btn-primary memberButton"/><a href="">+</a><br>
						    @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function getTeam(name){
	$.ajax({
		type:"GET",
		url:"/admin/getTeam/" + name
	}).success(function(data){
		//console.log(JSON.parse(data))
		data = JSON.parse(data);
		//var teamName = "Team Name: <br>" + data.current.name + "<br><br> Members:<br>";
		var teamName = "<label for='teamName'>Team Name:</label><input type='text' class='form-control' id='teamName' value='" + data.current.name + "'>";
		var members = "<label for='teamName'>Members:</label><br>";
		data.students.forEach(function(entry) {
			//console.log(entry);
			members = members + "<input type='button' value='" + entry + "' class='btn btn-primary memberButton'/><a href=''>X</a><br>";
		});

		$("#nameSection").html(teamName);
		$("#memberSection").html(members);
	});
}

</script>

@endsection
