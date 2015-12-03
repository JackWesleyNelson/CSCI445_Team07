@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<img src="{{ asset('img/connect.png') }}" class="connectImg">
				<div class="panel-heading">Administrator Page</div>
				<div class="panel-body">
					<button type="submit" class="btn btn-primary button">Assign Teams</button><br><hr>
					<div class="editLabel">Team Editor</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Teams</div>
							<div class="panel-body">
								List Teams here
							</div>
						</div>
					</div>
			    <div class="col-md-4 edit">
						<div class="panel panel-default">
							<div class="panel-heading">Team Info</div>
							<div class="panel-body">
								Place Team Info
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
