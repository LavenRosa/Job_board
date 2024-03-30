<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Myanmar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="topnav">
        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-pills" style="display: flex; justify-content:space-evenly;">
                    <img src="{{ asset('../img/logo.png') }}" alt="" width="70px" height="70px">
                    <li class="a nav-item">
                      <a class="nav-link active" href=" {{ route('ShowUserLogin')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="margin-left: 15px;" href="{{ route('ShowUserRegister') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 15px; font-size:25px;" href="{{ route('ProfileShow')}}"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <form action="{{ route('Search') }}" method="GET" class="d-flex" style="margin-left: 30px;">
                <input class="form-control me-2" style="margin-left: 30px; background-color: rgb(74, 176, 239); border-color: rgb(74, 176, 239);" type="search" name="search" placeholder="Title or Keyword">
            </form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown" style="margin-left: 50px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Job Function
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ( $functions as $fun )
                    <a class="dropdown-item" href="#">{{ $fun->name }}</a>
                    @endforeach
                  </div>
                </li>
                <li class="nav-item dropdown" style="margin-left: 130px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Location
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ( $locations as $loc )
                        <a class="dropdown-item" href="#">{{ $loc->name }}</a>
                        @endforeach

                    </div>

                  </li>

            </ul>
            <button class="btn btn-outline-success" style="margin-left: 150px; background-color: white; color:rgb(74, 176, 239); border-color: rgb(74, 176, 239);" type="submit" id="search-btn">Find Jobs</button>
        </div>
    </nav>
    <!-- job offer section -->
    <section class="main">
        <div class="container-fluid">
            <div class="row">
                <h4><b>Featured Jobs Offer</b></h4>
            </div>
            <div class="row1 col-lg-12" style="padding-bottom: 50px;">
                @foreach ( $jobs as $job )
                <div class="col-lg-3">
                    <div class="card" style="width: 16rem;">
                        <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Job Function : {{ $job->function->name }}</h6>
                          <h5 class="card-title" style="margin-top: 10px;"><b>{{ $job->job_position }}</b></h5>
                          <div style="margin-top: 40px;">
                            <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;<span><b>{{ $job->location->name }}</b></span>
                            <small style="margin-left: 30px;">{{ $job->job_type }}</small>
                          </div>
                          <div style="margin-top: 40px; margin-left: 30px;">
                            <span><b>{{ $job->company_name }}</b></span>
                            <img style="margin-left: 10px; width: 100px; height:100px" src="{{ asset( $job->company_logo )}}" alt="" width="70px" height="70px">
                          </div>
                          <a href="{{ route('JobDetail', ['jobId' => $job->id]) }}" style="background-color:rgb(74, 176, 239); margin-left:100px; border-color:rgb(74, 176, 239);" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="job">
      <div class="container-fluid">
        <div class="row">
          <h4><b>How to Get a Job?</b></h4>
        </div>
        <div class="row1">
          <div class="col-lg-3">
            <div class="card" style="width: 16rem;">
                <div class="card-body">

                <h6 class="card-subtitle mb-2 text-muted">Job Function : IT</h6>
                  <h5 class="card-title" style="margin-top: 10px;"><b>PHP/Laravel Developer</b></h5>
                  <div style="margin-top: 40px;">
                    <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;<span><b>Yangon</b></span>
                    <small style="margin-left: 30px;">Full Time</small>
                  </div>
                  <div style="margin-top: 40px; margin-left: 30px;">
                    <span><b>KBZ Bank</b></span>
                    <img style="margin-left: 10px;" src="img/kbz.jfif" alt="" width="70px" height="70px">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="title col-lg-6">
                    <span><b>JobMyanmar</b></span><small>.com.mm</small>
                </div>
                <div class="f col-lg-6">
                  <div class="col-lg-3">
                    <ul  >
                      <li><b>For Candidates</b></li>
                      <li>Find Jobs</li>
                      <li>Register</li>
                      <li>Login to Profile</li>
                    </ul>
                  </div>
                  <div class="col-lg-3">
                    <ul >
                      <li><b>Call Us</b></li>
                      <li>No.12G,55 Road,Panzuntaung Township,Yangon,Myanmar.</li>
                      <li>0987654321, 09263574758</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
