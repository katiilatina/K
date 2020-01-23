<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin-left: 30%; width: 40%" align="center">

<form class="needs-validation" action="{{ action('FormOrdersController@form') }}" method="POST" style="width: 50%; margin-left: 25%; margin-top: 10%;">
{{csrf_field()}}
<label>ФИО клиента</label><br>
  <select id="id_client" name="id_client" class="form-control">
  @foreach($clients as $client)
    <option value="{{ $client['id_client'] }}">{{ $client['full_name'] }}</option>
  @endforeach
  </select>
  <!-- <input class="form-control" type="text" id="id_client" name="id_client">--><br>
  <label>Автомобиль и цена</label><br>
  <select id="id_car" name="id_car" class="form-control">
  @foreach($cars as $car)
    <option value="{{ $car['id'] }}">{{$car['brand'] }} {{ $car['price']}}</option>
  @endforeach
  </select>
  <!--<input class="form-control" type="text" id="id_car" name="id_car">--><br>
  <label>ФИО работника</label><br>
  <select id="id_worker" name="id_worker" class="form-control">
  @foreach($workers as $worker)
    <option value="{{ $worker['id_worker'] }}">{{ $worker['full_name'] }}</option>
  @endforeach
  </select>
  <!--<input class="form-control" type="text" id="id_worker" name="id_worker">--><br>
  <label>Статус</label><br>
  <input class="form-control" type="text" id="status" name="status"><br>
  <button class="btn btn-primary" type="submit">Сохранить</button>
</form><br>
<div align="center">
  
  <button class="btn btn-primary" type="button" onclick="window.location='/orders_cars'">Назад</button>
  <button class="btn btn-primary" type="button" onclick="window.location='/'">В главное меню</button>
</div>
</body>
</html>