
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>function availablehotelroom()</h2>
  <p>Route::get('report/availablehotelrooms', [HotelController::class, 'availablehotelroom']);</p>
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>city</th>
        <th>Kamar Tersedia</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($queryModel as $data)
      <tr>
        <td>{{$data ->name}}</td>
        <td>{{$data ->city}}</td>
        <td>{{$data->kamar_tersedia}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
