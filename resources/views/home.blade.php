<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
	<style>
		div.warning {
			text-align: center;
			position: absolute;
			top: 30px;
			left: 20%;
			width: 60%;
			height: 100px;
			background: lightblue;
			opacity: 0.8;
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
		}
	</style>
</head>
<body>
	<div class="header">
		<ul class="ul1">
			<li><a href="{{ route('home')}}">Главная</a></li>
			<li><a href="{{ route('reviews_user')}}">Отзывы</a></li>
			<li><a href="{{ route('courses')}}">Курсы</a></li>
			@guest('web')
				<li class="auth"><a href="{{ route('login')}}">Войти</a></li>
			@endguest
		</ul>

		@include('inc.messages')

		<p class="header">Выберите подходящий онлайн-курс на нашей платформе и станьте еще умнее</p>
	</div>

	<div class="container_about">
		<h1>О наших курсах:</h1>
		<p class="about_left"> Наша главная цель — дать возможность каждому стать высококлассным и востребованным специалистом прямо сейчас, вне зависимости от возраста и бюджета.
У нас вы найдете множество курсов по востребованным направлениям для профессионального и личностного развития. Найдите то, что подходит именно вам. Хотите добиться всех целей по саморазвитию в кратчайшие сроки? Получайте новые навыки благодаря нашим курсам от специалистов и компаний высокого уровня.<br><br>
			- Получите необходимые навыки для <font style="color: #25DF2D;">востребованной</font> работы;<br>
			- Выберите <font style="color: #25DF2D;">лучшую</font> для вас программу;<br>
			- Курсы, которые можно пройти <font style="color: #25DF2D;">за день</font>;<br>
			- Начните обучение с <font style="color: #25DF2D;">бесплатными</font> курсами.
		</p>
		<div class="about_right">
			<p>У нас есть курсы по:</p>
			<div class="slider">
			  	<div class="item">
			        <a href="{{ route('courses')}}"><img src="/img/slide1.png" alt="Первый слайд" class="imgslide"></a>
			    </div>

			    <div class="item">
			        <a href="{{ route('courses')}}"><img src="/img/slide2.png" alt="Второй слайд" class="imgslide"></a>
			    </div>

			    <div class="item">
			        <a href="{{ route('courses')}}"><img src="/img/slide3.png" alt="Третий слайд" class="imgslide"></a>
			    </div>

			    <div class="item">
			        <a href="{{ route('courses')}}"><img src="/img/slide4.png" alt="Третий слайд" class="imgslide"></a>
			    </div>

			    <div class="item">
			        <a href="{{ route('courses')}}"><img src="/img/slide5.png" alt="Третий слайд" class="imgslide"></a>
			    </div>
			</div>
			<div class="slide_down">
				<script type="text/javascript">
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlide() {
						showSlides(slideIndex += 1);
				};

				function minusSlide() {
						showSlides(slideIndex -= 1);
				};

				function currentSlide(n) {
						showSlides(slideIndex = n);
				};

				function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("item");
						var dots = document.getElementsByClassName("slider-dots_item");
						if (n > slides.length) {
							slideIndex = 1
						}
						if (n < 1) {
								slideIndex = slides.length
						}
						for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";
						}
						for (i = 0; i < dots.length; i++) {
								dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex - 1].style.display = "block";
						dots[slideIndex - 1].className += " active";
				};
				</script>
				<img src="img/arr_left.png" class="prev" onclick="minusSlide()"></a>
			  <img src="img/arr_right.png" class="next" onclick="plusSlide()"></a>
			</div>
		</div>
	</div>

	<div class="container_plus">
		<h1 style="float: right;">Наши преимущества:</h1>
		<div class="plus">
			<div class="plus1">
				<h2>Постоянный доступ к личному кабинету</h2>
				<img src="img/24.svg">
				<p>Смотрите приобретенные материалы в удобное время</p>
			</div>
			<div class="plus1">
				<h2>Курсы своевременно обновляются</h2>
				<img src="img/arrow_circle.svg">
				<p>Получайте знания, которые отвечают требованиям на рынке труда</p>
			</div>
			<div class="plus2">
				<h2>Проверочные тесты и практические задания</h2>
				<img src="img/done.svg">
				<p>Закрепляете теорию на практике и получаете обратную связь</p>
			</div>
			<div class="plus2">
				<h2>Кураторы — признанные профессионалы</h2>
				<img src="img/doneman.svg">
				<p>Делятся опытом в решении бизнес‑задач и необходимыми инструментами</p>
			</div>
			<div class="plus2">
				<h2>Проекты от реальных заказчиков </h2>
				<img src="img/portf.svg">
				<p>Выполняете задания от крупных брендов</p>
			</div>
		</div>
	</div>

	<div class="container_contacts">
		<h1>Как с нами свзяаться?</h1>
		<div class="contact">
			<img src="img/contact.png">
			<div class="contact_right">
				<div class="contact_right_up">
					<div class="contact_right_up_left">
						<h2>Наши контакты:</h2>
						<p>+7-945-345-23-23<br>
						courses@mail.ru</p>
					</div>
					<div class="contact_right_up_right">
						<img src="img/face.png">
						<img src="img/inst.svg">
						<img src="img/twit.png">
						<img src="img/vk.png">
					</div>
				</div>
				<div class="contact_right_down">
					<div class="contact_right_down_left">
						<p>Закажите звонок, чтобы получить дополнительную информацию по курсам, а также бонус</p>
						<img src="img/arrow_right.svg">
					</div>
					<div class="contact_right_down_right">
						<form method="POST" action="{{ route('callback')}}">
							@csrf
							<input type="tel" name="number" placeholder="79232332323" class="input1"> <br>
							<input type="submit" name="" value="Позвонить мне" class="input2">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<a class="pfoot_left" href="{{ route('home')}}">Главная</a>
		<a class="pfoot_left" href="{{ route('reviews_user')}}">Отзывы</a>
		<a class="pfoot_left" href="{{ route('courses')}}">Курсы</a>
		<p class="pfoot_right">+7-945-345-23-23 <br>
		courses@mail.ru</p>
	</footer>
</body>
</html>
