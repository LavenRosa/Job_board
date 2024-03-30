@extends('backend.job.create')
@section('title', 'Create Page')
@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4 ">
        <div class="card-header">
            <h3 class="m-0 fw-bold text-primary">Job Function Creation</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('JFCreate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="job_function" class="form-label">Job Function Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-sm btn-icon-split mb-3">
                        <span class="text">Create</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
