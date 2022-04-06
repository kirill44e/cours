<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>One Message</title>
  <style>
    @media (min-width: 950px) and (max-width: 2000px) {
      div.block_one {
        width: 35%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
      }
    }
    @media (min-width: 550px) and (max-width: 950px) {
      div.block_one {
        width: 50%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
      }
    }
    @media (min-width: 360px) and (max-width: 550px) {
      div.block_one {
        width: 80%;
        margin-left: 10%;
        border: 2px lightblue solid;
        border-radius: 5px;
        padding: 20px;
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

      <div class="block_one">
        <h3>Имя: {{ $contact->name}}</h3>
        <p>Статус: {{ $contact->status}}</p>
        <p>Продукт: {{ $contact->category}}</p>
        <p>Комментарий к заказу: {{ $contact->message}}</p>
        <p><small>Имя: {{ $contact->created_at}}</small></p>
        <a href="{{ route('admin.contacts.edit', $contact->id)}}"><button class="btn btn-primary">Редактировать</button></a>
        <form action="{{ route('admin.contacts.destroy', $contact->id)}}" method="POST">
          @csrf

          @method('DELETE')

          <button class="btn btn-danger" type="submit" style="margin-top:30px;">Удалить</button>
        </form>
      </div>

</body>
</html>
