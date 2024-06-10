@extends("layouts.conquer2")
@section('content')
    <div class="page-content" >
        <h3 class="page-title">
            Transaction Create
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Transaction</a>
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
        <form method="POST" action="{{route("transaction.store")}}">
            @csrf
            <div class="form-group">
                <label for="hotel_id">Customer</label>
                <select name="form_customer_id" id="hotel_id" class="form-control">
                    @foreach ($customer as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
                <br>
                <label for="form_user_id">User</label>
                <select name="form_user_id" id="form_user_id" class="form-control">
                    @foreach ($user as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
                <br>
                <label for="form_product_id">Product</label>
                <select name="form_product_id" id="form_product_id" class="form-control">
                    @foreach ($product as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
                <br>
                <label for="form_quantity">quantity</label>
                <input type="number" class="form-control" id="form_quantity" name="form_quantity"
                       aria-describedby="nameHelp" placeholder="Enter your quantity" min="0">
                <br>
                <label for="form_subtotal">Subtotal</label>
                <input type="number" class="form-control" id="form_subtotal" name="form_subtotal"
                       aria-describedby="nameHelp" placeholder="Enter your subtotal" min="1" step="0.1">
            </div>
            <a href="{{route("transaction.index")}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
