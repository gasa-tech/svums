<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-toaster@4.0.1/css/bootstrap-toaster.min.css" />
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <style>
        .row {
            margin-right:0px;
            margin-left:0px;
        }
        .custom_navigation a:hover {
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div id="app">
          <nav class="navbar navbar-dark" style="background-color: #04AA6D;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-grid-three-up"></span>  
                </button>
             
              <ul class="nav justify-content-end">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="text-white">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                
              </ul>
            </div>
            @endguest
          </nav>
         @include('inc.navigation')
        <main class="">
            @yield('content')
        </main>

        <footer class="page-footer font-small special-color-dark pt-2"  style="background-color: #2B475E;left: 0;bottom: 0; width: 100%;">
              
                <div class="text-center py-3">© 2020 Copyright:
                    <a href="https://gasa.tech">GASA.TECH</a>
                </div>
              
        </footer>

        @yield('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-toaster@4.0.1/js/bootstrap-toaster.min.js"></script>
        <script type="text/javascript">
            let success = "{{ Session::get('success') }}"
            if(success) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Success', success,TOAST_STATUS.SUCCESS, 10000);
            }
            let error = "{{ Session::get('error') }}"
            if(error) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Error', error,TOAST_STATUS.DANGER, 10000);
            }
            let info = "{{ Session::get('info') }}"
            if(info) {
                Toast.setTheme(TOAST_THEME.DARK);
                Toast.create('Warning', info,TOAST_STATUS.WARNING, 10000);
            }
        </script>
    </div>
</body>

</html>
