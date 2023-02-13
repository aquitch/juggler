<nav class="mb-3 navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#ff8b00" href="{{ route('welcome') }}">Juggler</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;color:white">
        <li class="nav-item">
          <a class="nav-link active" style="color:#feae4e" aria-current="page" href="{{ route('juggler') }}">Главная</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#feae4e" href="{{ route('juggler') }}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Altium Database
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" style="color:#feae4e" href="{{ route('devices.index') }}">DUT</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы постоянные</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы подстроечные</a></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="#">Резиторы регулировочные</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" style="color:#feae4e" href="{{ route('libs.index') }}">Менеджер библиотек</a></li> 
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#feae4e" href="{{ route('boards.index') }}">Тестовые решения</a>
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
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
              <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                  <div>{{ Auth::user()->name }}</div>

                  <div class="ml-1">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </div>
              </button>
          </x-slot>

          <x-slot name="content">
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-dropdown-link>
              </form>
          </x-slot>
        </x-dropdown>
      </div>
      <button id="theme" class="btn btn-dark"><i id="moon" class="bi bi-moon"></i></button> 
    </div>
  </div>
</nav>