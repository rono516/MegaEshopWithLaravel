<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">Mega E-Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('category') }}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cart') }}">Cart</a>
          </li>

          @guest



          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('register')}}">Register</a>
          </li>
          @endguest

          @auth

              @if(auth()->user()->role_as == '1')

                <li class="nav-item">
                    <a class="nav-link" href="{{'/dashboard'}}">Dashboard</a>
                </li>


                @endif


          <li class="nav-item">
                {{-- <a class="nav-link" href="{{'/'}}">{{auth()->user()->name}}</a> --}}
                <a class="nav-link" href="#">{{auth()->user()->email}}</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'logout'}}">Logout</a>
          </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{'orders'}}">My orders</a>
                  </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
