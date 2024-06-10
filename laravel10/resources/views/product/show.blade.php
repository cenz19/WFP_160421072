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
{{--<div class="container">--}}
{{--  <h2>Product Table</h2>--}}
{{--  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>--}}
{{--  <table class="table">--}}
{{--    <thead>--}}
{{--      <tr>--}}
{{--        <th>id</th>--}}
{{--        <th>created_at</th>--}}
{{--        <th>updated_at</th>--}}
{{--        <th>name</th>--}}
{{--        <th>price</th>--}}
{{--        <th>hotel_id</th>--}}
{{--        <th>Hotel Name</th>--}}
{{--      </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--      <tr>--}}
{{--        <td>{{$data ->id}}</td>--}}
{{--        <td>{{$data ->created_at}}</td>--}}
{{--        <td>{{$data ->updated_at}}</td>--}}
{{--        <td>{{$data ->name}}</td>--}}
{{--        <td>{{$data ->price}}</td>--}}
{{--        <td>{{$data ->hotel_id}}</td>--}}
{{--        <td>{{$data ->hotels->name}}</td>--}}
{{--      </tr>--}}
{{--    </tbody>--}}
{{--  </table>--}}
{{--</div>--}}
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card" style="border-radius: 15px;">
                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/12.webp"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                             alt="Laptop" />
                        <a href="#!">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p><a href="#!" class="text-dark">{{$data ->name}}</a></p>
                                <p class="small text-muted">{{$data ->hotels->name}}</p>
                            </div>
                            <div>
                                <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="small text-muted">{{$data ->created_at}}</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                            <p><a href="#!" class="text-dark">${{$data ->price}}</a></p>
                            <p class="text-dark">#### 8787</p>
                        </div>
                        <p class="small text-muted">VISA Platinum</p>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                            <a href="#!" class="text-dark fw-bold">Cancel</a>
                            <button type="button" class="btn btn-primary">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
