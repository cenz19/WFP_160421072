@extends("layouts.conquer2")
@section('content')
    <div class="page-content" >
        <h3 class="page-title">
            Product Create
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Product</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Create</a>
                </li>
                <li >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" onclick="showInfo()">
                        <i class="icon-bulb"></i></a>
                </li>

            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        {{--        route ini dari php artisan route:list ya--}}
        <form method="POST" action="{{route("product.store")}}">
            @csrf
            <div class="form-group">
                <label for="name">Room Name</label>
                <input type="text" class="form-control" id="name" name="form_name"
                       aria-describedby="nameHelp" placeholder="Enter your Room Name">
                <br>
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="form_price"
                       aria-describedby="nameHelp" placeholder="Enter your price">
                <br>
                <label for="available_room">available room</label>
                <input type="number" class="form-control" id="available_room" name="form_available_room"
                       aria-describedby="nameHelp" placeholder="Enter your available room">
                <br>
                <label for="images">images</label>
                <input type="url" class="form-control" id="images" name="form_images"
                       aria-describedby="nameHelp" placeholder="Enter your image link">
                <br>
{{--                <label for="hotel_id">hotel id</label>--}}
{{--                <input type="number" class="form-control" id="hotel_id" name="form_hotel_id"--}}
{{--                       aria-describedby="nameHelp" placeholder="Enter your hotel id">--}}

                <label for="hotel_id">hotel id</label>
                <select name="form_hotel_id" id="hotel_id" class="form-control">
                    @foreach ($queryModel as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>

            </div>
            <a href="{{route("product.index")}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
