<!DOCTYPE html>
<html>
<head>
	<title>Отзывы</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/reviews.css') }}">
	<style>
	div.warning {
    text-align: center;
    position: absolute;
    top: 30px;
    left: 20%;
    width: 60%;
    background: #7FFF00;
    opacity: 0.9;
    border-radius: 10px;
  }

  ul.warning {
    list-style-type: none;
    padding-left: 0px;
  }
  ul.warning li {
    font-family: 'Montserrat';
    font-size: 20px;
    color: gray;
    padding: 15px;
  }
</style>
</head>
<body>
	<div class="header">
		@include('inc.messages')
		<ul class="ul1">
			<li><a href="{{ route('home')}}">Главная</a></li>
				<li><a href="{{ route('reviews_user')}}">Отзывы</a></li>
				<li><a href="{{ route('courses')}}">Курсы</a></li>
			@guest('web')
				<li class="auth"><a href="{{ route('login')}}">Войти</a></li>
			@endguest
		</ul>
		<p class="header">Выберите подходящий онлайн-курс на нашей платформе и станьте еще умнее</p>
	</div>

	@auth('web')
	<div class="container1">
		<h1>Оставить отзыв:</h1>
		<div class="review">
			<form action="{{ route('review_process')}}" method="POST">
			@csrf

				<p>Имя: <input type="text" name="name" value="{{ Auth::user()->name }}"></p>
				<p>E-mail: <input type="text" name="email" value="{{ Auth::user()->email }}"> </p>
				<p>Сообщение: </p>
				<input type="textarea" name="message" class="text">
				<input type="submit" name="" value="Отправить" class="sub">
			</form>
		</div>
	</div>
	@endauth

	@guest('web')
		<p class="p1" style="width:60%; margin-left:20%; text-align:center;">Чтобы оставить отзыв, <a href="{{ route('login')}}" style="color: #1E5DA6; font-weight: 500;"> Авторизуйтесь </a></p>
	@endguest

	<div class="reviews">
	<h1 style="color: #2C59FA;">Отзывы счастливчиков, <br>
	купивших наши курсы:</h1>

	@foreach($data as $el)
		<div class="reviews1">
			<p>{{ $el->name}}</p>
			<p>{{ $el->email}}</p>
			<a href="{{ route('review-data-one', $el->id)}}" class="a1">Читать</a>
		</div>
	@endforeach

	</div>

	<footer>
		<div class="foot">
			<a class="pfoot_left" href="{{ route('home')}}">Главная</a>
			<a class="pfoot_left" href="{{ route('reviews_user')}}">Отзывы</a>
			<a class="pfoot_left" href="{{ route('courses')}}">Курсы</a>
		</div>
		<p class="pfoot_right">+7-945-345-23-23 <br>
		courses@mail.ru</p>
	</footer>
</body>
</html>
