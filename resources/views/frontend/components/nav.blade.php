
<!-- navbar -->

    <div class="container-fluid">
        <img src="{{ asset('img/logo.png')}}" alt="" width="70px" height="70px">
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 200px;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" style="color: rgb(74, 176, 239);" aria-current="page" href="{{ route('Index')}}">Home</a>
          </li>
          <li class="nav-item dropdown" style="margin-left: 70px;">
            <a class="nav-link dropdown-toggle" style="color: rgb(74, 176, 239);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Job Function
            </a>
            <ul class="dropdown-menu">
                {{-- @foreach ( $functions as $fun )
                <a class="dropdown-item" href="#">{{ $fun->name }}</a>
                @endforeach --}}
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-left: 70px;">
            <a class="nav-link dropdown-toggle" style="color: rgb(74, 176, 239);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Job Function
            </a>
            <ul class="dropdown-menu">
               {{-- @foreach ( $locations as $loc )
                <a class="dropdown-item" href="#">{{ $loc->name }}</a>
                @endforeach --}}
            </ul>
          </li>
        </ul>
      </div>
      <form class="container-fluid justify-content-start" style="margin-left: 200px;">

        <a href=" {{ route('ShowUserLogin') }}"><button class="btn btn-sm" style="background-color: rgb(74, 176, 239); color: white; width: 80px; margin-left: 10px;" type="button">Login</button></a>

        <a href=" {{ route('ShowUserRegister') }}"><button class="btn btn-sm" style="background-color: rgb(74, 176, 239); color: white; width: 80px; margin-left: 10px;" type="button">Register</button></a>
    </form>
    </div>

