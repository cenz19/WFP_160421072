
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
    <h2>avgPriceByHotelType</h2>
    <p>Route::get('report/hotel/avgPriceByHotelType', [HotelController::class, 'averagePriceByHotelType']);</p>
    <table class="table">
        <thead>
        <tr>
            <th>Type</th>
            <th>name</th>
            <th>Average Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($hotelData as $data)
            <tr>
                <td>{{$data ->type_name}}</td>
                <td>{{$data ->hotel_name}}</td>
                <td>{{$data->average_price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
