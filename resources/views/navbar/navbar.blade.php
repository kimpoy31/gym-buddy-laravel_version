<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Gym Buddy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">

        <div class="navbar-nav">
          <div class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route("home")}}">Home</a>
          </div>

          @auth
            <div class="nav-item">
              <a class="nav-link btn" href="{{route("logout")}}">Logout</a>
            </div>
          @else
            <div class="nav-item">
              <a class="nav-link" href="{{route("login")}}">Login</a>
            </div>
          @endauth
        </div>

      </div>
    </div>
</nav>