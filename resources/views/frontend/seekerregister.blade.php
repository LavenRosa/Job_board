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
                  <input type="text" name="name" class="form-control @error('name') is invalid @enderror" placeholder="Enter Your Name">
                  @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <input type="password" name="password" class="form-control @error('password') is-invalid
                  @enderror" placeholder="Enter Password">
                  @error('password')
                    <div class="invalid-feedback">
                        {{ $message}}
                    </div>
                  @enderror
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
