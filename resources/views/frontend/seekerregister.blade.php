@extends('layouts.frontend')
@section('main')
<!-- Register -->
<section class="register">
    <div class="card">
        <form action=" {{ route('UserRegister')}}" method="POST">
            @csrf
            <h4><b>Register</b></h4>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input id="confirmpassword" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmed Password">
                </div>
            </div>
            <button type="submit" class="btn">Register</button>
          </form>
    </div>
</section>
@endsection
