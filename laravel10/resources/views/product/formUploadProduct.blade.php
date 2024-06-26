@extends('layouts.conquer2')
@section('content')
    <div class="page-content">
        <h3 class="page-title">Upload Product Image untuk hotel {{$product->name}}</h3>
        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="{{url('product/simpanProduct')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputType">Pilih Logo</label>
                    <input type="file" class="form-control" name="file_photo"/>
                    <input type="hidden" name='product_id' value="{{$product->id}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
