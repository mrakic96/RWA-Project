<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('images/logo.png') }}" width="180px" height="36px" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="/services">Usluge</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">O nama</a>
                      </li>           
                    </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                      <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-secondary" style="border-color: #3490dc; color: #3490dc;">{{ __('Prijava') }}</button></a>

                          @if (Route::has('register'))
                          <a href="{{ route('register') }}"><button type="button" class="btn btn-secondary" style="color: #38c172;">{{ __('Registracija') }}</button></a>

                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <h6 class="dropdown-header">Opcije</h6>
                                <!-- Dashboard Link for admins and moderators -->
                                @is('admin')

                                  <a class="dropdown-item" href="/dashboard">
                                      {{ __('Dashboard') }}
                                  </a>
                                    
                                @endis
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Odjava') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>