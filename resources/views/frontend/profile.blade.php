@extends('layouts.frontend')
@section('title', 'Profile')
@section('main')

<section class="profile">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="top">
                        <img src="{{ asset('img/profile.png')  }}" alt="" width="100px" height="100px">
                        <div>
                            <span><b>User Name</b></span><br>
                            <small>user@gmail.com</small><br>
                            <small>0987654321</small>
                        </div>
                    </div>
                    <div class="body">
                        <h5><b>Career Information</b></h5>
                        <div class="career" style="margin-top: 30px;">
                            <span><b>Professional Headline:</b></span> <small>Senior Developer</small><br><br>
                            <span><b>Languages:</b></span> <small>English, Burmese</small><br><br>
                            <span><b>Project:</b></span> <small>PHP project, Laravel Project</small><br><br>
                            <span><b>Year of Experience:</b></span> <small>Senior Developer</small><br><br>
                        </div>
                    </div>
                    <div class="foot">
                        <form class="container-fluid justify-content-start" style="margin-left: 30px;">
                            <button class="btn btn-sm" style="width: 150px;" type="button">Update Profile</button>
                            <button class="btn btn-sm" style="margin-left: 50px; width: 80px;" type="button">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
