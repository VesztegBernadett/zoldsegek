<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="{{route('home')}}">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('home')}}">Zöldségek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('vegetables.table')}}">Táblázat</a>
        </li>
      </ul>
    </div>
  </div>
</nav>