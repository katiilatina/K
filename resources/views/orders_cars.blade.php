<html>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<h1 class="display-1" align="center">Автосалон</h1>
<body style="margin-left: 30%; width: 40%" align="center">
    <h1 class="cover-heading"  align="center">Список заказов</h1>

    <table border="1" cellspacing="0" class="table table-striped" class="table table-striped">

    <tr>
    <th>ID</th>
    <th>ФИО клиента</th>
    <th>Автомобиль и цена</th>
    <th>ФИО работника</th>
    <th>Статус</th>
    </tr>

    @foreach ($orders as $order)
      <tr>
      <td> {{ $order['id_order_car'] }}</td>
      <td> {{ $order['id_client'] }}</td>
      <td> {{ $order['id_car'] }}</td>
      <td> {{ $order['id_worker'] }}</td>
      <td> {{ $order['status'] }}</td>
      </tr>
    @endforeach

    </table>
    <div align="center">
        <a href="/order" class="btn btn-primary" style="margin-bottom:1%; padding:1%;">Добавить</a><br>
        <a href="/" class="btn btn-primary" style="margin-top:1%; margin-top; padding:1%;">Вернуться на главную</a>
    </div>
</body>
</html>