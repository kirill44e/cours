<!DOCTYPE html>
<html>
<head>
	<title>Курсы</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/courses.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/courses.js"></script>
</head>
<body>
	<div class="header">
		<ul class="ul1">
			<li><a href="{{ route('home')}}">Главная</a></li>
			@auth('web')
				<li><a href="{{ route('reviews_user')}}">Отзывы</a></li>
			@endauth
			@guest('web')
				<li><a href="{{ route('reviews_user')}}">Отзывы</a></li>
			@endguest
			<li><a href="{{ route('courses')}}">Курсы</a></li>
			@guest('web')
				<li class="auth"><a href="{{ route('login')}}">Войти</a></li>
			@endguest
		</ul>
		<p class="header">Выберите подходящий онлайн-курс на нашей платформе и станьте еще умнее</p>
	</div>

	<div class="panel">
		<div class="pan1"><a class="panel1">Языки</a></div>
		<div class="pan1"><a class="panel2">Музыка</a></div>
		<div class="pan1"><a class="panel3">Живопись</a></div>
		<div class="pan1"><a class="panel4">ИТ</a></div>
		<div class="pan1"><a class="panel5" style="margin-right: 0px;">Дизайн</a></div>
	</div>

	<p class="p1">Чтобы оформить курс, <a href="{{ route('login')}}" style="color: #1E5DA6; font-weight: 500;"> Авторизуйтесь </a></p>
	<div class="courses">
		<div class="courses_panel1">
			<div class="courses_panel1_cours1">
				<div class="imgcours"></div>
				<h2>Изучение английского с нуля.</h2>
				<p class="p1">Курс подойдёт для тех, кто хотел был познакомиться с английским языком: выучить определенную базу слов, грамотно писать и использовать в речи стандартные фразы. Для более углубленного изучения можете рассмотреть другие курсы. </p>
				<p class="p2">Длительность: 4 недели.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">1999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
			<div class="courses_panel1_cours2">
				<div class="imgcours"></div>
				<h2>Изучение немецкого с нуля.</h2>
				<p class="p1">Курс подойдёт для тех, кто хотел был познакомиться с немецким языком: выучить определенную базу слов, грамотно писать и использовать в речи стандартные фразы. Для более углубленного изучения можете рассмотреть другие курсы. </p>
				<p class="p2">Длительность: 4 недели.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">1999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
			<div class="courses_panel1_cours3">
				<div class="imgcours"></div>
				<h2>Изучение французского с нуля.</h2>
				<p class="p1">Курс подойдёт для тех, кто хотел был познакомиться с французским языком: выучить определенную базу слов, грамотно писать и использовать в речи стандартные фразы. Для более углубленного изучения можете рассмотреть другие курсы. </p>
				<p class="p2">Длительность: 4 недели.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">1999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
		</div>

		<div class="courses_panel2">
			<div class="courses_panel2_cours1">
				<div class="imgcours"></div>
				<h2>Создание электронной музыки.</h2>
				<p class="p1">Вы освоите музыкальную теорию, научитесь работать в Ableton Live, создавать треки в разных жанрах и профессионально их обрабатывать. Узнаете, как заключать договоры с музыкантами и лейблами и строить бизнес-модель проекта. </p>
				<p class="p2">Длительность: 2 месяца.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">4999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
		</div>

		<div class="courses_panel3">
			<div class="courses_panel3_cours1">
				<div class="imgcours"></div>
				<h2>Базовый курс: Рисунок и живопись.</h2>
				<p class="p1">Курс для тех, кто хочет сосредоточиться на изучении двух главных художественных дисциплин: рисунке и живописи. Вместе мастерами вы освоите академический рисунок простыми карандашами и мягкими графическими материалами, покорите акварель. </p>
				<p class="p2">Длительность: 3 месяца.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">3999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
			<div class="courses_panel3_cours2">
				<div class="imgcours"></div>
				<h2>Линейная перспектива без линейки.</h2>
				<p class="p1">Универсальный курс, на котором вы научитесь рисовать архитектуру без линейки и каких-либо еще вспомогательных инструментов. А проходить его можно с любыми материалами! Вас ждет практика с самых первых занятий. Окунитесь в мир искусства. </p>
				<p class="p2">Длительность: 1 месяц.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">1999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
		</div>

		<div class="courses_panel4">
			<div class="courses_panel4_cours1">
				<div class="imgcours"></div>
				<h2>Инженер по тестированию.</h2>
				<p class="p1">Вы научитесь находить ошибки в работе сайтов и приложений с помощью Java, JavaScript или Python. С первого занятия погрузитесь в практику и сможете начать зарабатывать уже через 4 месяца. Уже джуниоры очень востребованы на рынке, а наш курс позволит достичь middle-уровня. </p>
				<p class="p2">Длительность: 3 месяца.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">7999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
			<div class="courses_panel4_cours2">
				<div class="imgcours"></div>
				<h2>Специалист по кибербезопасности.</h2>
				<p class="p1">Вы научитесь искать уязвимости, предотвращать угрозы и обеспечивать безопасность IT-систем. Освоите востребованную профессию даже с нулевым опытом в программировании. Будете на законных основаниях взламывать сайты и получать за это достойную зарплату. </p>
				<p class="p2">Длительность: 5 месяца.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">4999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
		</div>

		<div class="courses_panel5">
			<div class="courses_panel5_cours1">
				<div class="imgcours"></div>
				<h2>Графический дизайнер.</h2>
				<p class="p1">Вы узнаете, как создавать айдентику бренда в вебе и для печати. Научитесь работать в Illustrator, Photoshop, InDesign и Figma. Добавите в портфолио плакаты, логотипы, дизайн мерча и другие сильные проекты. Начнёте карьеру в студии или на фрилансе. </p>
				<p class="p2">Длительность: 2 месяца.</p>
				<p class="p2">Стоимость: <font style="font-size: 24px; color: #33C130;">3999 р.</font></p>
				<a href="{{ route('user')}}" class="a1">Оформить</a>
			</div>
		</div>
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
