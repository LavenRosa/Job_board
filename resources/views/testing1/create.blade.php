@extends('testing1.main')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('testing1.create')}}"  method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Item Name</label>
              <input type="text" class="form-control" name="item_name">
            </div>
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" class="form-control" name="detail">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
