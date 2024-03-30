@extends('layouts.backend')
@section('title', 'Apply Job List')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Applied Job List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Job ID</th>
                        <th>CV Form</th>
                        <th>User Profile ID</th>
                        <th>Status</th>
                        <th>Submitted Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $applyjobs as $apply )
                    <tr>
                        <td>{{ $apply->id }}</td>
                        <td>{{ $apply->job_id }}</td>
                        <td>{{ $apply->cv_form }}</td>
                        <td>{{ $apply->profile_id }}</td>
                        <td>{{ $apply->status }}</td>
                        <td>{{ $apply->submitted_date }}</td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
