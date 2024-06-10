@extends('layouts.conquer2')
@section('content')
    <div class="page-content">
        <h3 class="page-title">
            Customer
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
        <div class="container">
            @if(@session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <h2>Customer Table</h2>
                <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <a href="{{route("customer.create")}}" class="btn btn-success">+ New Type</a>

            <table class="table" >
                <thead>
                <tr>
                    <th>name</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->address }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                    </tr>
                @endforeach
            </table>
            <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-wide">
                    <div class="modal-content" id="msg">
                    </div>
                </div>
            </div>
        </div>
@endsection



