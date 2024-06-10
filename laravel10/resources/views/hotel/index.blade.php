
@extends('layouts.conquer2')

@section('content')
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
     <div class="modal-content" id="showproducts">
       <!--loading animated gif can put here-->
     </div>
  </div>
</div>
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        
        <h3 class="page-title">
            Hotel
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Hotel</a>
                </li>
                <li >
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="#" onclick="showInfo()">
                  <i class="icon-bulb"></a></i>
               </li>        
  
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>

<div class="container">
  <h2>Hotel Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
  <a class="btn btn-warning" data-toggle="modal" href="#disclaimer">Disclaimer</a>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        {{-- <th>created_at</th>
        <th>updated_at</th> --}}
        <th>name</th>
        <th>address</th>
        <th>postcode</th>
        <th>city</th>
        <th>Detail</th>
        <th>Available Products</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($queryModel as $data)
      <tr>
        <td>{{$data ->id}}</td>
        {{-- <td>{{$data ->created_at}}</td>
        <td>{{$data ->updated_at}}</td> --}}
        <td>{{$data ->name}}</td>
        <td>{{$data ->address}}</td>
        <td>{{$data ->postcode}}</td>
        <td>{{$data ->city}}</td>
        <td>
          <a class="btn btn-info"  href="#detail_{{$data->id}}" data-toggle="modal">{{ $data->name }}</a>
  
                    <div class="modal fade" id="detail_{{$data->id}}" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$data->name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src={{ asset('images/'.$data->image)}} height='200px' width='200px'/>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                        </div>
                    </div>

        </td>
        <td>
          <ul>
            @foreach ($data->products as $item)
            <li>{{$item->name}}</li>
            @endforeach
            <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'onclick='showProducts({{ $data->id }})'>List Product</a>
          </ul>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <br>

    <div class="row">
        @foreach ($queryModel as $d )
            <div class="col-sm-3"
                 style="border:1px solid #999;padding:10px;margin:10px;text-align:center;
            border-radius:10px">
                <img height="100px" src="{{ asset('images/'.$d->image) }}" />
                <br>{{$d->name}}
                <br>{{$d->address}}, {{$d->city}}
            </div>
        @endforeach
    </div>

</div>
@endsection

@section('javascript')
<script>
function showProducts(hotel_id)
{
  $.ajax({
    type:'POST',
    url:'{{route("hotel.showProducts")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'hotel_id':hotel_id
         },
    success: function(data){
       $('#showproducts').html(data.msg)
    }
  });
}
</script>
@endsection
{{--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
    * {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .header{
      color:  #007bff;
    }
    .header-title{
      font-weight: bolder;
    }
    .title{
      margin-bottom: 30px;

    }
    .container-item{
      max-width: 1100px;
      padding: 20px;
      margin: 0 auto;

    }
    .container-items {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;

    }
    .item{
      background: #f1f1f1;
      border-radius: 10px;
      overflow: hidden;
      max-width: 400px;
      box-shadow: 10px 10px 10px rgba(0,0,0,0.1);
    }


    .img{
      width:100%;
      height: 150px;
    }
    .title-item{
      padding: 10px 20px;
      display: flex;
      flex-direction: column;
      /* align-items: center; */
      justify-content: space-between;
      min-height: 50px;
      gap: 20px;
      /* align-: space-between; */
    }

    p {
      font-size: 18px;
      font-weight: bold;
    }
    a{
      color: white;
    }

    .btn-deskripsi {
      padding: 10px 20px;
      width: 100%;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .btn-deskripsi:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <section class="container-title">

    </section>
    <section class="container-item">
      <div class="title">
        <h5 class='header'>HOTEL</h5>
        <h1 class='header-title'>Find your perfect hotel here</h1>
      </div>

      <div class="container-items">
        @foreach ($queryBuilder as $data)
        <div class="item">
          <img class='img' src="https://picsum.photos/{{rand(100,200)}}/203" alt="">
          <div class="title-item">
            <p>{{$data -> name}}</p>
            <span><ion-icon name="location-outline"></ion-icon> {{$data -> address}}</span>
            <span><ion-icon name="call-outline"></ion-icon> {{$data -> fax}}</span>
            <span><ion-icon name="mail-outline"></ion-icon> {{$data -> email}}</span>
            <a href="{{url('/kategori/0')}}"><button class='btn-deskripsi'>Deskripsi</button></a>
          </div>
        </div>
        @endforeach
      </div>

    </section>
  </div>
</body>
</html> --}}
