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
