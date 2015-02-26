@extends('app')

@section('header')

	<script>
		$(document).ready(function(){
			$(".form").removeClass("loading");

		});
	</script>

@endsection
@section('content')
	<div class="grayscale">
	</div>
	<div class="ui page grid">
		<div class="two wide column">
		</div>

		<div class="five wide column">
			<div class="wow fadeInUp" data-wow-duration="0.7s">
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
											<div class="checkbox">
												<label><input type="checkbox" name="remember">
												Lembrar-me?</label>
											</div>
										</div>
										<div class="ui submit button">Login</div>
											<a href="/password/email">Esqueceu a sua password?</a>
									</form>
									<div class="field"></div>
									<div class="field">
										<div class="ui facebook button">
											<i class="facebook icon"></i>

										</div>
										<div class="ui twitter button">
											<i class="twitter icon	"></i>

										</div>
										<div class="ui google plus button">
											<i class="google plus icon"></i>

										</div>
									</div>
								</div>
						</div>
					</div>
			</div>
		</div>
				<!--LADO ESQUERDO REGISTAR-->

		<div class="two wide column"></div>

			<div class="five wide column">
				<div class="wow fadeInUp" data-wow-duration="0.7s">

				<div class="panel panel-default">
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
						<div class="ui loading form segment">
							<form class="form-horizontal" role="form" method="POST" action="/auth/login">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="field four-wide column">
									<div class="field">
										<label>Username</label>
										<input placeholder="Username" type="text" name="email" value="{{ old('email') }}">
									</div>
									<div class="field">
										<label>Email</label>
										<input placeholder="Email" type="email" name="email" value="{{ old('email') }}">
									</div>
									<div class="field">
										<label>Password</label>
										<input type="password" name="password">
									</div>
									<div class="field">
										<label>Verificar Password</label>
										<input type="password" name="verify_password">
									</div>
								</div>
								<div class="inline field">
									<div class=" checkbox">
										<label><input type="checkbox" class="vendedor" name="remember">
										Sou Vendedor</label>
									</div>
									<div class="ui teal test labeled icon button">
										<i class="icon user"></i> Sign-up
									</div>

								</div>
								<div class="ui test submit button">Registar</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

@endsection
