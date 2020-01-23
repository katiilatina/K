<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin-left: 30%; width: 40%" align="center">

<form class="needs-validation" action="{{ action('FormBrandsController@form') }}" method="POST" style="width: 50%; margin-left: 25%; margin-top: 10%;">
{{csrf_field()}}
<label>Название</label><br>
  <input class="form-control" type="text" id="name" name="name"><br>
  <label>Страна</label><br>
  <input class="form-control" type="text" id="country" name="country"><br>
  <button class="btn btn-primary" type="submit">Сохранить</button>
</form><br>
<div align="center">
  
  <button class="btn btn-primary" type="button" onclick="window.location='/brands'">Назад</button>
  <button class="btn btn-primary" type="button" onclick="window.location='/'">В главное меню</button>
</div>
</body>
</html>