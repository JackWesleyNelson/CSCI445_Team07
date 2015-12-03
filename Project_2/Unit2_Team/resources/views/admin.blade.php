@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<img src="{{ asset('img/connect.png') }}" class="connectImg">
				<div class="panel-heading">Administrator Page</div>
				<div class="panel-body">
					<form class="maxMin" action="index.html" method="post">
						<div class="MaxMinSelect">
							Maximum Team Size:
							<select name="max">
							   <option value="1">1</option>
							   <option value="2">2</option>
							   <option value="3">3</option>
							   <option value="4">4</option>
							</select>
							Minimum Team Size:
							<select name="min">
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
					<?php $activeTeam = "Team01";?>
					<div class="editLabel">Team Editor</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Teams</div>
							<div class="panel-body">
								@foreach ($teams as $team)
						        	<button type="submit" class="btn btn-primary teamButton" onClick="<$php $activeTeam = 'Team02'; ?>">{{$team->name}}</button><br>
						    @endforeach
							</div>
						</div>
					</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Team Info</div>
							<div class="panel-body">
								Place Team Info
								<?php echo $activeTeam;?>
							</div>
						</div>
					</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">All Students</div>
							<div class="panel-body">
								List All Students Here
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
