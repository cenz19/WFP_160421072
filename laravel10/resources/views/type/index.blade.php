@extends('layouts.conquer2')
@section('content')
    <div class="page-content">
        <h3 class="page-title">
            Type
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Type</a>
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
        @if(@session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <div class="container">
            <h2>Type Table</h2>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <a href="{{route("type.create")}}" class="btn btn-success">+ New Type</a>
            <table class="table" >
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>
                        <td>{{ $d->deleted_at }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('type.edit', $d->id)}}">Edit</a>
                            <form method="POST" action="{{route('type.destroy',$d->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{$d->id}} - {{$d->name}} ? ');">
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-wide">
                <div class="modal-content" id="msg">
                </div>
            </div>
        </div>
        </div>

@endsection



