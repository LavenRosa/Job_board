@extends('layouts.backend')
@section('title','CreatePage')
@section('content')
<div class="container-fluid">
    @if(session('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ session('success') }}</li>
                </ul>
            </div>
        @endif
    <h3>Job Posting</h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Job</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('JobUpdate', $data->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="job_position" class="form-label">Job Position</label>
                    <input type="text" class="form-control" name="job_position" value="{{ $data->job_position }}">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Job Function</label>
                    <select name="category" id="category" class="form-control">
                        <option value="0" disabled>-- Choose Job Function --</option>
                        @foreach ($jobfunctions as $jobfunction)
                            <option value="{{ $jobfunction->id }}">{{ $jobfunction->name }}</option>
                            @if ($post->category_id == $category->id)
                                    selected
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Job Location</label>
                    <select name="category" id="category" class="form-control">
                        <option value="0" disabled>-- Choose Job Location --</option>
                        @foreach ($joblocations as $joblocation)
                            <option value="{{ $joblocation->id }}">{{ $joblocation->name }}</option>
                            @if ($post->category_id == $category->id)
                                    selected
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="{{ $data->company_name }}">
                </div>
                <div class="mb-3">
                    <label for="company_location" class="form-label">Company Location</label>
                    <input type="text" class="form-control" name="company_location" value="{{ $data->company_location }}">
                </div>
                <img class="card-image-top" src="{{ asset( $data->company_logo)}}" alt="">
                <div class="mb-3">
                    <label for="company_logo" class="form-label">Company Logo</label>
                    <input type="file" class="form-control" name="company_logo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $data->description }}">
                </div>
                <div class="mb-3">
                    <label for="responsibilities" class="form-label">Responsibilities</label>
                    <input type="text" class="form-control" name="responsibilities" value="{{ $data->reponsibilities}}">
                </div>
                <div class="mb-3">
                    <label for="requirements" class="form-label">Requirements</label>
                    <input type="text" class="form-control" name="requirements" value="{{ $data->requirements }}">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary" value="{{ $data->salary }}">
                </div>
                <div class="mb-3">
                    <label for="job_type" class="form-label">Job Type</label>
                    <input type="text" class="form-control" name="job_type" value="{{ $data->job_type }}">
                </div>
                <div class="mb-3">
                    <label for="job_location" class="form-label">Job Location</label>
                    <input type="text" class="form-control" name="job_location" value="{{ $data->job_location }}">
                </div>
                <div class="mb-3">
                    <label for="job_created_date" class="form-label">Job Created Date</label>
                    <input type="date" class="form-control" name="job_created_date" value="{{ $data->job_created_date }}">
                </div>
                <div class="mb-3">
                    <a href="" class="btn btn-secondary btn-sm btn-icon-split mb-3">
                        <span class="icon text-white-50">
                            <i class="fa fa-arrow-left"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm btn-icon-split mb-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
