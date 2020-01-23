<html>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<h1 class="display-1" align="center">Автосалон</h1>
<body style="margin-left: 30%; width: 40%" align="center">
    <h1 class="cover-heading"  align="center">Список брендов</h1>

    <table border="1" cellspacing="0" class="table table-striped" class="table table-striped">

    <tr>
    <th>ID</th>
    <th>Название</th>
    <th>Страна</th>
    </tr>

    @foreach ($brands as $brand)
      <tr>
      <td> {{ $brand['id_brand'] }}</td>
      <td> {{ $brand['name'] }}</td>
      <td> {{ $brand['country'] }}</td>
      </tr>
    @endforeach

    </table>
    <div align="center">
        <a href="/brand" class="btn btn-primary" style="margin-bottom:1%; padding:1%;">Добавить</a><br>
        <a href="/" class="btn btn-primary" style="margin-top:1%; margin-top; padding:1%;">Вернуться на главную</a>
    </div>
</body>
</html>