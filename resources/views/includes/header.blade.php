<nav class="mb-3 navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#ff8b00" href="#">Juggler</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;color:white">
        <li class="nav-item">
          <a class="nav-link active" style="color:#feae4e" aria-current="page" href="{{ route('devices.index') }}"">Главная</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#feae4e" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Altium Database
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" style="color:#feae4e" href="{{ route('devices.create') }}">Новый компонент</a></li>
          <li><hr class="dropdown-divider"></li> 
          <li><a class="dropdown-item" style="color:#feae4e" href="#">DUT</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы постоянные</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы подстроечные</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы регулировочные</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#feae4e" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#feae4e" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Action</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>