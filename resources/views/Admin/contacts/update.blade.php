<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Update</title>
  <style>
    select.sel {
      width: 100%;
      height: 45px;
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px silver solid;
    }
    @media (min-width: 950px) and (max-width: 2000px) {
      form {
        width: 35%;
        margin-left: 10%;
      }
    }
    @media (min-width: 550px) and (max-width: 950px) {
      form {
        width: 50%;
        margin-left: 10%;
      }
    }
    @media (min-width: 360px) and (max-width: 550px) {
      form {
        width: 80%;
        margin-left: 10%;
      }
    }
  </style>
</head>
<body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <div class="col-md-3 text-end" style="margin-right:10%;">
          <a href="{{ route('admin.logout')}}"><button type="button" class="btn btn-primary">Выйти</button></a>
      </div>
    </header>

    @include('inc/messages')

    <form action="{{route('admin.contacts.update', $contact->id)}}" method="POST" >
      @csrf

      @method('PUT')

      <div class="form-group">
        <label for="name">Ваше имя: </label>
        <input type="text" name="name" id="name" class="form-control" value="{{$contact->name}}">
      </div>

      <div class="form-group">
        <label for="status">Статус заказа: </label>
        <input type="text" name="status" class="form-control" id="status" value="{{$contact->status}}">
      </div>

      <div class="form-group">
        <label for="email">Ваш email: </label>
        <input type="text" name="email" class="form-control" id="email" value="{{$contact->email}}">
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
        <textarea name="message" rows="8" cols="80" id="message" class="form-control"> {{$contact->message}} </textarea>
      </div>

      <button type="submit" class="btn btn-success" style="margin-top: 30px;">Обновить</button></a>
      </form>
</body>
</html>
