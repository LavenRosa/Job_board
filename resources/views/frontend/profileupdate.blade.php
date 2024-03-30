@extends('layouts.frontend')
@section('title','Profile Update')
@section('main')
<section class="updateprofile">
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('ProfileUpdate', $profile->id ) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="top">
                        <img class="card-image-top" src="{{ asset( $profile->image)}}" alt="">
                        <div class="mb-3">
                            <label for="image" class="form-label">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="body" style="display: flex; justify-content: space-evenly;">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="form-label">Current Password</label>
                                <input id="password" type="password" class="form-control" name="password" value="">
                            </div>
                            <div class="row mb-3">
                                <label for="newpassword" class="form-label">New Password</label>
                                <input id="newpassword" type="password" class="form-control" name="newpassword" value="">
                            </div>
                            <div class="row mb-3">
                                <label for="cnewpassword" class="form-label">Confirm New Password</label>
                                <input id="cnewpassword" type="password" class="form-control" name="cnewpassword" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $profile->phone) }}">
                            </div>
                            <div class="mb-3">
                                <label for="skills" class="form-label">Skills</label>
                                <input type="text" name="skills" class="form-control" value="{{ old('skills', $profile->skills) }}">
                            </div>
                            <div class="mb-3">
                                <label for="languages" class="form-label">Languages</label>
                                <input type="text" name="languages" class="form-control" value="{{ old('languages', $profile->languages) }}">
                            </div>
                            <div class="mb-3">
                                <label for="project" class="form-label">Project</label>
                                <input type="text" name="project" class="form-control" value="{{ old('project', $profile->project) }}">
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">Year of Experience</label>
                                <input type="text" name="experience" class="form-control" value="{{ old('experience', $profile->experience) }}">
                            </div>
                        </div>
                    </div>
                    <div class="foot">
                        <div class="container-fluid justify-content-start" style="margin-left: 30px;">
                            <button class="btn btn-sm" style="margin-left: 250px; width: 100px;" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
