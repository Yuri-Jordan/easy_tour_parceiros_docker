
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Easy Tour Brasil - Viaje em novas experiências</title>


    <link href="{{asset('asset/production/css/bootstrap.css')}}" rel="stylesheet">


	<!-- Minhas modificações -->
    <link rel="stylesheet" href="{{asset('asset/production/css/estilo.css')}}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="col-xs-12">

		<form class="form-horizontal" name="loginForm" method="POST"
			  ng-controller="easyTour.AccountCtrlr"
			  ng-submit="login(loginForm)"
			  novalidate>

		  <div class="page-center col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<div class="text-center clearfix">
			  <div>
				  <img class="img-responsive" src="{{asset('asset/production/images/logo-easy-tour-brasil.png')}}" alt="Easy Tour Brasil">
			  </div>
			</div>

			<div class="panel panel-primary">

			  <div class="panel-body">

				<h4 class="text-primary text-center espaco">
				  Seja bem-vindo!
				</h4>

				<div class="form-group" ng-class="{ 'has-error': loginForm.$submitted && loginForm.login.$invalid }">
				  <div class="col-lg-12">
					<div class="input-group">
					  <div class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
					  </div>
					  <input class="form-control" name="login" type="text" ng-model="conta.login" placeholder="Login" autofocus required>
					</div>
				  </div>
				</div>
				<div class="form-group" ng-class="{ 'has-error': loginForm.$submitted && loginForm.senha.$invalid }">
				  <div class="col-lg-12">
					<div class="input-group">
					  <div class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
					  </div>
					  <input class="form-control" name="senha" type="password" ng-model="conta.senha" placeholder="Senha" required>
					</div>
				  </div>
				</div>

				<br />

				<div class="form-group">
				  <div class="col-lg-12">


					<button class="btn btn-success btn-block" type="submit"
							ng-disabled="loginForm.$submitted && loginForm.$invalid">
					  <span></span> <a href="{{route('home')}}"> ACESSAR </a>
					</button>


				  </div>
				</div>
				<div class="form-group">
				  <div class="col-lg-12">
					<button class="btn btn-primary btn-block" type="submit"
							ng-disabled="loginForm.$submitted && loginForm.$invalid">
					  <span></span> ACESSE PELO FACEBOOK
					</button>
				  </div>
				</div>
			  </div>


				<br />

				<div class="text-center">
					<div>
					  <small>
						Não tem uma conta? <a href="#/accounts/new">Crie uma!</a>
					  </small>
					</div>
				  <div>
					<small>
					  <a href="#/accounts/lostPassword">Esqueceu sua senha?</a>
					</small>
				  </div>
				</div>

				<br />

			</div>

		  </div>

		</form>

		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  </body>
</html>
