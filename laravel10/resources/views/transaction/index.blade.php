@extends('layouts.conquer2')
@section('content')
    <div class="page-content">
        <h3 class="page-title">
            Transaction
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('transaction.index')}}">Transaction</a>
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
            <h2>Transaction Table</h2>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <a href="{{route("transaction.create")}}" class="btn btn-success">+ New Transaction</a>
            <table class="table" >
                      <thead>
                      <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Kasir</th>
                            <th>Tanggal Transaction</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $d)
                          <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->customer->name }}</td>
                                <td>{{ $d->user->name }}</td>
                                <td>{{ $d->created_at }}</td>
                                <td><a class="btn btn-default" data-toggle="modal" href="#myModal" onclick="getDetailData({{ $d->id}});">Lihat Rincian Pembelian</a></td>
                              </tr>
                      @endforeach
                </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-wide">
            <div class="modal-content" id="msg">
                <!--loading animated gif can put here-->
            </div>
        </div>
    </div>

@endsection
@section('javascript')
    <script>
        function getDetailData(id) {
            $.ajax({
                type:'POST',
                url:'{{route("transaction.showAjax")}}',
                data:'_token= <?php echo csrf_token() ?> &id='+id,
                success:function(data) {
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
@endsection



