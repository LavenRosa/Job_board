@extends('layouts.frontend')
@section('title','Show Profile')
@section('main')

<section class="profile">
    <div class="container-fluid">
        <div class="row">
            {{-- @foreach ( $profiles as $profile ) --}}
            <div class="card">
                <div class="card-body">
                    <div class="top">
                        <img src="{{ asset('img/profile.png')  }}" alt="" width="100px" height="100px">
                        <div>
                            <span><b>{{ $users->name }}</b></span><br>
                            <small>{{ $users->email }}</small><br>
                            <small>{{ $profiles->phone}}</small>
                        </div>
                    </div>
                    <div class="body">
                        <h5><b>Career Information</b></h5>
                        <div class="career" style="margin-top: 30px;">
                            <span><b>Professional Headline:</b></span> <small>{{ $profiles->skills }}</small><br><br>
                            <span><b>Languages:</b></span> <small>{{ $profiles->languages }}</small><br><br>
                            <span><b>Project:</b></span> <small>{{ $profiles->project }}</small><br><br>
                            <span><b>Year of Experience:</b></span> <small>{{ $profiles->experience }}</small><br><br>
                        </div>
                    </div>
                    <div class="foot">
                        <form class="container-fluid justify-content-start" style="margin-left: 30px;">
                            <a href="{{ route('ProfileEdit', $profiles->id ) }}"><button class="btn btn-sm" style="width: 150px;" type="button">Update Profile</button></a>
                            <a href="{{ route('UserLogout')}}"><button class="btn btn-sm" style="margin-left: 50px; width: 80px;" type="button">Logout</button></a>
                        </form>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</section>
@endsection
