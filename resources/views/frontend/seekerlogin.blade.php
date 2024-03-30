@extends('layouts.frontend')
@section('main')
<!-- Login -->
<div class="login">
    <div class="card">
        <form action="{{ route('UserLogin')}}" method="POST">
            @csrf
            <h4><b>Login</b></h4>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <small style="outline: none; margin-top: 30px; margin-left: 80px;"><a  href="">Forgot Password?</a></small>
            </div>
            <button type="submit" class="btn">Login</button>
          </form>
    </div>
</div>
@endsection
