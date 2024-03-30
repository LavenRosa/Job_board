@extends('layouts.backend')
@section('title','Job List')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Job Posting</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Job Position</th>
                        <th>Comapny Name</th>
                        <th>Company Location</th>
                        <th>Company Logo</th>
                        <th>Description</th>
                        <th>Responsibilities</th>
                        <th>Requirements</th>
                        <th>Salary</th>
                        <th>Job Type</th>
                        <th>Job Location</th>
                        <th>Job Created Date</th>
                        <th colspan="2" style="width:100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->job_position }}</td>
                        <td>{{ $job->company_name }}</td>
                        <td>{{ $job->company_location }}</td>
                        <td><img style="width: 100px; height:100px;" src="{{ asset( $job->company_logo )}}" alt=""></td>
                        <td>{{ $job->description }}</td>
                        <td>{{ $job->reponsibilities }}</td>
                        <td>{{ $job->requirements }}</td>
                        <td>{{ $job->salary }}</td>
                        <td>{{ $job->job_type }}</td>
                        <td>{{ $job->job_location }}</td>
                        <td>{{ $job->job_created_date }}</td>
                        <td style="display: flex; justify-content:space-evenly;">
                            <a href="{{ route('JobEdit', $job->id )}}" class="btn btn-primary btn-sm btn-icon-split" style="width:70px;">
                                <span class="text">Edit</span>
                            </a>
                            <a href="{{ route('JobDelete', $job->id )}}" class="btn btn-danger btn-sm btn-icon-split" style="width:70px; margin-left:5px;">
                                <span class="text">Delete</span>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Pagination  --}}
    {{-- {{ $posts->appends(request()->query())->links() }} --}}
</div>

@endsection
