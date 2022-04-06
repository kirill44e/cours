<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Личный кабинет</title>
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

  header {
    width: 100%;
    height: 70px;
    box-shadow: 2px 4px 5px silver;
    margin-bottom: 50px;
  }
    ul.navv {
      width: 70%;
      float: right;
      list-style-type: none;
    }
    ul.navv li {
      margin-right: 5%;
      font-size: 20px;
      padding: 25px;
      float: right;
    }
    a {
      text-decoration: none;
      color: black;
    }
    button.btn_logout {
      width: 70px;
      height: 35px;
      border: none;
      background: lightblue;
      color: white;
      font-size: 18px;
      text-align: center;
      border-radius: 5px;
    }

    button.btn_logout:hover {
      background: blue;
    }

    select.sel {
      width: 100%;
      height: 45px;
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px silver solid;
    }
    @media (min-width: 950px) and (max-width: 2000px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 20px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      form {
        width: 35%;
        margin-left: 10%;
      }
    }
    @media (min-width: 550px) and (max-width: 950px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 15px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      form {
        width: 50%;
        margin-left: 10%;
      }
    }
    @media (min-width: 360px) and (max-width: 550px) {
      ul.navv li {
        margin-right: 5%;
        font-size: 14px;
        padding: 0px;
        padding-top: 25px;
        float: right;
      }
      ul.navv {
        width: 100%;
        float: right;
        list-style-type: none;
      }
      form {
        width: 80%;
        margin-left: 10%;
      }
    }
  </style>
</head>
<body>
  <header>
      <a href="{{ route('home')}}"><img src="/img/home.svg" style="width:30px; height:30px; position:absolute; top:20px; left:10px;" alt=""></a>
      <ul class="navv">
        <li><a href="{{ route('logout')}}"><button type="button" class="btn_logout">Выйти</button></a></li>
        <li><a href="{{route('order-data')}}">Мои курсы</a></li>
        <li><a href="{{route('user')}}" style="color: lightblue;">Оформить курс</a></li>

      </ul>
    </header>

    @include('inc/messages')

    <form action="{{route('order-form')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="name">Ваше имя:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
      </div>

      <div class="form-group">
        <label for="email">Ваш email:</label>
        <input type="text" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
      </div>

      <div class="form-group">
        <select name="category" id="category" class="sel">
				 	<option>Выбрать курс:</option>
				 	<option>Изучение английского с нуля</option>
				 	<option>Изучение немецкого с нуля.</option>
          <option>Изучение французского с нуля.</option>
          <option>Создание электронной музыки</option>
          <option>Базовый курс: Рисунок и живопись</option>
          <option>Линейная перспектива без линейки</option>
          <option>Инженер по тестированию</option>
          <option>Специалист по кибербезопасности</option>
          <option>Графический дизайнеры</option>
				</select>
      </div>

      <div class="form-group">
        <label for="message">Комментарий к заказу:</label>
        <textarea name="message" rows="8" cols="80" id="message" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-success" style="margin-top:20px;">Отправить</button>
    </form>
</body>
</html>
