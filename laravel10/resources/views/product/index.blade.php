@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Product
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
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <div class="container">
            @if(@session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <a href="{{route("product.create")}}" class="btn btn-success">+ New Type</a>
            <h2>Product Table</h2>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
{{--                    <th>created_at</th>--}}
{{--                    <th>updated_at</th>--}}
                    <th>Product Image(s)</th>
                    <th>name</th>
                    <th>price</th>
                    <th>hotel_id</th>
                    <th>hotel</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($queryModel as $data)
                  <tr>
                    <td>{{$data ->id}}</td>
                      <td>
                          @if($data->filenames)
                              @foreach ($data->filenames as $filename)
                                  <img width="100" height="100" src="{{asset('product_image/'.$data->id.'/'.$filename)}}"/>
                                  <form style="display: inline" method="POST"
                                        action="{{url('product/delProduct')}}">
                                      @csrf
                                      <input type="hidden" value="{{'product_image/'.$data->id.'/'.$filename}}" name='filepath' />
                                      <input type="submit" value="delete" class="btn btn-danger btn-xs"
                                             onclick="return confirm('Are you sure ? ');">
                                  </form>
                                  <br>
                              @endforeach
                          @endif
                          <a href="{{ url('product/uploadProduct/'.$data->id) }}" class="btn btn-success btn-xs">Add new Picture</a>
                      </td>
                    <td>{{$data ->name}}</td>
                    <td>{{$data ->price}}</td>
                    <td>{{$data ->hotel_id}}</td>
{{--                      hotels disini menuju ke model--}}
                    <td>{{$data ->hotels->name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection


