@extends('app')

@section('header')

@endsection
@section('content')
	<div class="grayscale">
	</div>
	<div class="ui page grid">
		<div class="two wide column">
		</div>

		<div class="six wide column">
			<div class="wow fadeInUp" data-wow-duration="0.7s">
					<div class=" faded">
					<div class="heading2">Login</div>
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

								<div class="ui form segment">
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
													<label>Lembrar-me?</label>
											</div>
										</div>

                                        <button type="submit" class="fluid ui teal submit button">
                                            Login
                                        </button>
                                        <a class="ui centered" href="/password/email">Esqueceu a sua password?</a>
									</form>
									<div class="field"></div>
									<div class="ui grid  centered row">
										<div class="five wide column">
											<div class="ui facebook button">
												<i class="facebook icon"></i>
											</div>
										</div>
										<div class="five wide column">
											<div class="ui twitter button">
												<i class="twitter icon	"></i>
											</div>
										</div>
										<div class="five wide column">
											<div class="ui google plus button">
												<i class="google plus icon"></i>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
			</div>
		</div>
				<!--LADO ESQUERDO REGISTAR-->

		<div class="one wide column"></div>

			<div class="six wide column">
				<div class="wow fadeInUp" data-wow-duration="0.7s">

				<div class="panel faded">
					<div class="panel-heading heading2">Register</div>
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
						<div class="ui form segment">
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
										<div class="ui test labeled icon button">
											<i class="icon user"></i><div class="ui checkbox paddingo"><input type="checkbox"><label>Sou Vendedor</label></div>
										</div>
											<input type="text" placeholder="O seu ID de Vendedor" id="id_vendedor">
								</div>
								<div class="fluid ui test teal submit button">Registar</div>
							</form>

						</div>
					</div>
				</div>
		</div>
	</div>
</div>
	<script>
		$('.ui.checkbox').checkbox();
		$(document).ready(function(){

		});
	</script>
@endsection
