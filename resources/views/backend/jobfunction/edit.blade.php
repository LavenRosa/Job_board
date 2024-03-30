@extends('backend.job.create')
@section('title', 'Update Page')
@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4 ">
        <div class="card-header">
            <h3 class="m-0 fw-bold text-primary">Job Function Update</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('JFUpdate', $data->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Job Function Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-sm btn-icon-split mb-3">
                        <span class="text">update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
