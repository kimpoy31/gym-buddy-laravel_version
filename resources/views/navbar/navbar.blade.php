<style>
  .xPadding{
    padding: .5rem 3rem;
  }

  @media(max-width:768px){
    .xPadding{
      padding: .5rem 0;
    }
  }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary xPadding">
  <div class="container-fluid d-flex justify-content-between">

    <a class="navbar-brand" href="#">Gym Buddy</a>

    <span class="navbar-text">
      @auth
        <div class="dropdown">
            <button class="btn btn-danger-outline dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item bg-danger text-white " role="button" type="button" href="{{route("logout")}}">Logout</a>
                </li>
            </ul>
        </div>
      @endauth
    </span>

  </div>
</nav>
