@extends('layouts.frontend')
@section('main')
<section class="jobdetail">
    <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card mt-5">
                @if(session('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                @endif

                <form action="{{ route('ApplyCreate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job_id" class="form-control" value="{{ $job->id }}">
                    <div class="card-body" id="jobDetails{{ $job->id }}">
                        <div class="d-flex align-items-center">
                            <img style="width: 100px; height:100px" src="{{ asset( $job->company_logo )}}" alt="Company Logo"  width="150px" height="150px" class="me-3">
                            <h3 class="mb-0">{{ $job->job_position }}</h3>
                        </div>
                        <span>{{ $job->company_name }}</span>
                        <hr>
                        <h4>Job Description</h4>
                        <p>{{ $job->description }}</p>
                        <hr>
                        <h4>Responsibilities</h4>
                        <ul>
                          <li>{{ $job->reponsibilities }}</li>
                        </ul>
                        <hr>
                        <h6>Open To</h6>
                        <i class="fa-solid fa-check"></i>&nbsp;&nbsp;<span class="text-muted">Male/Female</span>
                        <hr>
                        <div class="cv">
                          <div class="col-lg-6">
                            <h4>Requirements</h4>
                          <ul>
                            <li>{{ $job->requirements}}</li>
                          </div>
                          <div class="col-lg-6">
                            <div class="card">
                              <div class="card-body">
                                <h5>Apply this Job Here!</h5>
                                <hr>
                                <input type="hidden" name="user_id" value="{{ $user->id }}" class="form-control">
                                <input type="text" class="form-control" value="{{ $user->name }}">
                                <input type="email" name="" id="" class="form-control" value="{{ $user->email }}">
                                <span style="margin-top: 30px;">CV Upload</span>
                                <input type="file" class="form-control" name="cv_form">
                                <button type="submit" class="btn-sm">Apply Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                          <div class="col-md-6">
                            <span>Salary : </span><small>400000mmk-800000mmk</small><br>
                            <span>Job Type : </span><small>Full Time</small>
                          </div>
                        </div>
                    </div>
                </form>

            </div>
          </div>
        </div>
    </div>
</section>


@endsection
