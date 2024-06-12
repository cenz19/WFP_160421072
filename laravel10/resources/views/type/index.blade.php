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
            <a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ New Type(with Modals)</a>
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
                            <a href="#modalEditA" class="btn btn-warning" data-toggle="modal" onclick="getEditForm({{$d->id}})">Edit Type A</a>
                            @can('delete-permission',Auth::user())
                            <form method="POST" action="{{route('type.destroy',$d->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{$d->id}} - {{$d->name}} ? ');">
                            </form>
                            @endcan
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>

{{--        MODALS--}}
        <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-wide">
                <div class="modal-content" id="msg">
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add New Type</h4>
                    </div>
                    <form method="POST" action="{{route("type.store")}}">
                        @csrf
                    <div class="modal-body">
{{--                        //the  new type form goes here--}}

                            <div class="form-group">
                                <label for="exampleInputType">Name of Type</label>
                                <input type="text" class="form-control" id="exampleInputType" name="type_name"
                                       aria-describedby="nameHelp" placeholder="Enter Name of Type...">
                                <small id="nameHelp" class="form-text text-muted">Please write down the name of type here.</small>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEditA" tabindex="-1" role="basic" aria-hidden="true">
             <div class="modal-dialog modal-wide">
                   <div class="modal-content" >
                          <div class="modal-body" id="modalContent">
                                  You can put animated loading image here...
                          </div>
                   </div>
             </div>
        </div>

    </div>
@endsection
@section('javascript')
    <script>
        function getEditForm(type_id)
        {
            $.ajax({
                type:'POST',
                url:'{{route("type.getEditForm")}}',
                data: {
                    '_token' : '<?php echo csrf_token() ?>',
                    'id': type_id
                },
                success: function(data){
                    $('#modalContent').html(data.msg)
                }
            });
        }
    </script>
@endsection



