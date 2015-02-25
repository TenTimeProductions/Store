@extends('app')

@section('header')

	<script>
		$(document).ready(function(){
			$(".form").removeClass("loading");
		});
	</script>

@endsection
@section('content')
	<div class="ui grid">
	<div class="row">
		<div class="two wide column">
		</div>
		<div class="five wide column">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
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
					<!--aquiiiiiiiiiiiiiiiiiiiiiiiiiiiii-->
						<div class="ui loading form segment">
							<form class="form-horizontal" role="form" method="POST" action="/auth/login">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="field four-wide column">
									<div class="field">
										<label>Email</label>
										<input placeholder="Email" type="email" name="email" value="{{ old('email') }}">
									</div>
									<div class="field">
										<label>Password</label>
										<input placeholder="Last Name" type="password" name="password">
									</div>
								</div>
								<div class="inline field">
									<div class="ui checkbox">
										<input type="checkbox" name="remember">
										<label>Remember me?</label>
									</div>
								</div>
								<div class="ui submit button">Login</div>
									<a href="/password/email">Forgot Your Password?</a>
							</form>
						</div>
						<!--AQIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
				<!-- <div class="ui loading form segment">
					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="four wide column ui input">
								<input type="email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
