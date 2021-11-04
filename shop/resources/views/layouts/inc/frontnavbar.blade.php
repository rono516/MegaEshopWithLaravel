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
            <a class="nav-link" href="{{ url('category') }}">Category</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{'login'}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'register'}}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>