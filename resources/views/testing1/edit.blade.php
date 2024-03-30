@extends('testing1.main')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('testing1.update', $data->id)}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="postid" value="{{$data->id}}">
            <div class="mb-3">
              <label class="form-label">Item Name</label>
              <input type="text" class="form-control" name="item_name" value="{{ $data->item_name }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="text" class="form-control" name="price" value="{{ $data->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category" value="{{ $data->category }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" class="form-control" name="detail" value="{{ $data->detail }}">
            </div>
            <img style="width: 100px; height:100px;" src="{{asset('storage/'.$data->image)}}" alt="">
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image" >
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
</div>
@endsection
