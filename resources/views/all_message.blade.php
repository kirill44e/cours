<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Мои Курсы</title>
  <style>
  div.warning {
    text-align: center;
    position: absolute;
    top: 30px;
    left: 20%;
    width: 60%;
    background: #FA8072;
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
    color: white;
    padding: 15px;
  }
    * {
      background-size: border-box;
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
      @media (min-width: 950px) and (max-width: 2000px) {
        ul.navv li {
          margin-right: 5%;
          font-size: 20px;
          padding: 0px;
          padding-top: 25px;
          float: right;
        }
        div.block {
          width: 30%;
          margin-left:10%;
          float:left;
          border: 2px lightblue solid;
          border-radius: 5px;
          padding: 20px;
          margin-top: 15px;
          margin-bottom: 15px;
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
        div.block {
          width: 48%;
          margin-left:2%;
          float:left;
          border: 2px lightblue solid;
          border-radius: 5px;
          padding: 20px;
          margin-top: 15px;
          margin-bottom: 15px;
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
        div.block {
          width: 48%;
          height: 360px;
          margin-left:2%;
          float:left;
          border: 2px lightblue solid;
          border-radius: 5px;
          padding: 20px;
          margin-top: 15px;
          margin-bottom: 15px;
        }

        div.block h3 {
          font-size: 17px;
        }

        div.block p {
          font-size: 15px;
        }
      }

  </style>
</head>
<body>
  <header>
    <a href="{{ route('home')}}"><img src="/img/home.svg" style="width:30px; height:30px; position:absolute; top:20px; left:10px;" alt=""></a>
    <ul class="navv">
      <li><a href="{{ route('logout')}}"><button type="button" class="btn_logout">Выйти</button></a></li>
      <li><a href="{{route('order-data')}}" style="color: lightblue;">Мои курсы</a></li>
      <li><a href="{{route('user')}}">Оформить курс</a></li>
    </ul>
  </header>

    @include('inc/messages')

    @foreach($data as $el)
      <div class="block">
        <h3 style="text-align:center;">Имя: <br>{{ $el->name}}</h3>
        <p><font style="color:green;">Статус:</font> {{ $el->status}}</p>
        <p>E-mail: {{ $el->email}}</p>
        <p><small>Дата создания: {{ $el->created_at}}</small></p>
        <a href="{{ route('order-data-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
      </div>

    @endforeach

</body>
</html>
