@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<img src="{{ asset('img/connect.png') }}" class="connectImg">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You have been logged out.
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
