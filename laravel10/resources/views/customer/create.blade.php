@extends("layouts.conquer2")
@section('content')
    <div class="page-content" >
        <h3 class="page-title">
            Customer Create
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Customer</a>
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
        <form method="POST" action="{{route("customer.store")}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputType">Name</label>
                <input type="text" class="form-control" id="exampleInputType" name="form_name"
                       aria-describedby="nameHelp" placeholder="Enter your name">
                <small id="nameHelp" class="form-text text-muted">Please write down your name here.</small>
                <br>
                <label for="exampleInputType">Address</label>
                <input type="text" class="form-control" id="exampleInputType" name="form_address"
                       aria-describedby="nameHelp" placeholder="Enter your address">
                <small id="nameHelp" class="form-text text-muted">Please write down your address here.</small>
            </div>
            <a href="{{route("customer.index")}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
