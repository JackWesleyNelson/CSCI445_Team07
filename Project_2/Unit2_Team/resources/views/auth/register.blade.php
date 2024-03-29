@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
					<img src="{{ asset('img/connect.png') }}" class="connectImg">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						{!! csrf_field() !!}

                        <div class="form-group">
							<label class="col-md-4 control-label">CWID</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="cwid" value="{{ old('cwid') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Favorite</label>
                            <select name="language" class="form-control" aria-describedby="languageLabel">
                                <option value="C/C++">C/C++</option>
                                <option value="Java">Java</option>
                                <option value="Python">Python</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Team Style Preference</label>
                            <select name="preference" class="form-control" aria-describedby="preferenceLabel">
                                <option value="Social">Social Team</option>
                                <option value="Competetive">Competitive Team</option>
                                <option value="Dont Care">No Preference</option>
                            </select>
                        </div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
