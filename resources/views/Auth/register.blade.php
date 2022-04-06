<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/auth.css">

	<style>
		div.warning {
			text-align: center;
			position: absolute;
			top: 30px;
			left: 20%;
			width: 60%;
			height: 150px;
			background: lightblue;
			opacity: 0.8;
			border-radius: 10px;
		}

		@media (max-width: 650px) {
			div.warning {
				height: 45%;
				text-align: center;
			}

			ul.warning li {
				font-family: 'Montserrat';
				font-size: 15px;
				color: red;
				padding-top: 10px;
			}

		}

		ul.warning {
			list-style-type: none;
			padding-left: 0px;
		}
		ul.warning li {
			font-family: 'Montserrat';
			font-size: 20px;
			color: red;
		}
	</style>
</head>
<body>
	<div class="header">
		<ul class="ul1">
			<li><a href="{{ route('home')}}">Главная</a></li>
			<li><a href="{{ route('reviews_user')}}">Отзывы</a></li>
			<li><a href="{{ route('courses')}}">Курсы</a></li>
		</ul>

		@include('inc.messages')

		<form action="{{ route('register_process')}}" method="POST">
			@csrf

			<input type="text" name="name" class="input1" @error('name')
			style="border:red 1px solid;" @enderror placeholder="Имя">

			<input type="text" name="email" class="input1" @error('email')
			style="border:red 1px solid;" @enderror placeholder="E-mail">

			<input type="password" name="password" class="input1" @error('password')
			style="border:red 1px solid;" @enderror placeholder="Пароль">

			<input type="password" name="password_confirmation" class="input1" @error('password_confirmation')
			style="border:red 1px solid;" @enderror placeholder="Пароль (повторно)">

			<input type="submit" name="" class="input2" value="Регистрация"
			style="margin-bottom: 10px;">
			<a href="{{ route('login')}}" class="a2">Авторизация</a>
		</form>
	</div>

</body>
</html>
