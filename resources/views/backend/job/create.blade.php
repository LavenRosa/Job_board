@extends('layouts.backend')
@section('title','CreatePage')
@section('content')
<div class="container-fluid">
    <h3>Job Posting</h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Job</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('JobCreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="job_position" class="form-label">Job Position</label>
                    <input type="text" class="form-control" name="job_position">
                </div>
                <div class="mb-3">
                    <label for="jobfunction" class="form-label">Job Function</label>
                    <select name="jobfunction" id="jobfunction" class="form-control">
                        <option value="0" disabled>-- Choose Job Function --</option>
                        @foreach ($jobfunctions as $jobfunction)
                            <option value="{{ $jobfunction->id }}">{{ $jobfunction->name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="mb-3">
                    <label for="joblocation" class="form-label">Job Location</label>
                    <select name="joblocation" id="joblocation" class="form-control">
                        <option value="0" disabled>-- Choose Job Location --</option>
                        @foreach ( $joblocations as $joblocation)
                            <option value="{{ $joblocation->id }}">{{ $joblocation->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company_name">
                </div>
                <div class="mb-3">
                    <label for="company_location" class="form-label">Company Location</label>
                    <input type="text" class="form-control" name="company_location">
                </div>
                <div class="mb-3">
                    <label for="company_logo" class="form-label">Company Logo</label>
                    <input type="file" class="form-control" name="company_logo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="mb-3">
                    <label for="responsibilities" class="form-label">Responsibilities</label>
                    <input type="text" class="form-control" name="responsibilities">
                </div>
                <div class="mb-3">
                    <label for="requirements" class="form-label">Requirements</label>
                    <input type="text" class="form-control" name="requirements">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>
                <div class="mb-3">
                    <label for="job_type" class="form-label">Job Type</label>
                    <input type="text" class="form-control" name="job_type">
                </div>
                <div class="mb-3">
                    <label for="job_created_date" class="form-label">Job Created Date</label>
                    <input type="date" class="form-control" name="job_created_date">
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
                        <span class="text">Create</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
