@extends("layouts.conquer2")
@section('content')
    <div class="page-content" >
        <h3 class="page-title">
            Type Edit
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route("type.index")}}">Type</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edit</a>
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
        <form method="POST" action="{{route('type.update', $data->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputType">Name of Type</label>
                <input type="text" class="form-control" id="exampleInputType" name="type_name"
                       aria-describedby="nameHelp" placeholder="Enter Name of Type..." value="{{$data->name}}">
                <small id="nameHelp" class="form-text text-muted">Please write down the name of type here.</small>
            </div>
            <a href="{{route("type.index")}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
