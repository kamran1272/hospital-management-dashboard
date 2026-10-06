<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hospital Management</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('icons/bootstrap-icons.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{('https://cdn.tailwindcss.com')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Scripts -->
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary text-white shadow-sm">
            <div class="container">
                <i class="fas fa-notes-medical text-4xl mr-3"></i>
                <a class="navbar-brand text-white text-uppercase -ml-48 text-2xl font-bold" href="{{ url('/home') }}">
                    Hospital Management
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-nav text-white" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
        <li class="nav-item hover:bg-blue-300 px-2 py-2 ">
           <a class="nav-link text-white text-uppercase hover:bg-pink-400 " href="/products"> Products </a>
        </li>
        <li class="nav-item hover:bg-blue-300 px-2 py-2 ">
           <a class="nav-link text-white text-uppercase hover:bg-pink-400" href="/services"> Sevices </a>
        </li>
        <li class="nav-item hover:bg-blue-300 px-2 py-2 ">
           <a class="nav-link text-white text-uppercase hover:bg-pink-400" href="/clients"> Clients </a>
        </li>
        <li class="nav-item hover:bg-blue-300 px-2 py-2 ">
            <a class="nav-link text-white text-uppercase hover:bg-pink-400" href="/companies"> Companies </a>
        </li>
        <li class="nav-item hover:bg-blue-300 px-2 py-2 ">
           <a class="nav-link text-white text-uppercase hover:bg-pink-400" href="/demo"> Request For Demo </a> 
        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mt-2 hover:bg-blue-300 text-uppercase  ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-sm-left bg-info" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark text-center m-auto font-bold text-lowercase hover:bg-pink-400" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-primary text-white w-1/5 min-h-fit mt-2">
            <div class="py-4">
                  
                <h2 class="text-2xl font-bold text-center text-uppercase"><i class="fas fa-duotone fa-bars mr-3"></i>System Menu</h2>
            </div>
            <nav class="mt-8">
                <ul>
                    <li class="nav-item dropdown px-4 py-2 hover:bg-blue-300 text-uppercase"><a class="nav-link dropdown-toggle text-white"  data-bs-toggle="dropdown" href="#"  id="navbarDropdown">Dashboard</a>
                        
                                <div class="dropdown-menu  bg-info" >
                                    <a class="dropdown-item text-dark m-auto" href="/appointment-schedule">
                                        Oppointments                           
                                    </a>
                                    <a class="dropdown-item text-dark m-auto" href="/patient-list">
                                        Patients                            
                                    </a>
                                    <a class="dropdown-item text-dark m-auto" href="/">
                                        Invoices
                                    </a>
                                    <a class="dropdown-item text-dark m-auto" href="/">
                                        Medical Records
                                    </a>
                                    <a class="dropdown-item text-dark m-auto" href="/">
                                        Billing
                                    </a>
                                    <a class="dropdown-item text-dark m-auto" href="/">
                                    Reports
                                    </a>
                                </div>
                            </li>
                 <li class="px-4 py-2 hover:bg-blue-300 text-uppercase">
                    <a href="/about" class="">About Us</a>
                </li>
                <li class="px-4 py-2 hover:bg-blue-300 text-uppercase">
                    <a href="/contact" class="">Contact</a>
                </li>
                <li class="px-4 py-2 hover:bg-blue-300 text-uppercase">
                    <a href="/privacy-policy" class="">Privacy Policy</a>
                </li>
                </ul>
            </nav>
        </aside>

        <main class="py-4">
            @yield('content')
        </main>
       
    </div>
</div>
 <footer class="bg-dark mt-2 mb-2">
             <div class="container mx-auto text-center">
            <p class="text-white">&copy; {{ date('d/m/Y') }} Hospital Management. All rights reserved.</p>
            <ul class="flex justify-center mt-0">
                <li class="mx-2">
                    <a href="/about" class="text-white hover:text-gray-400">About Us</a>
                </li>
                <li class="mx-2">
                    <a href="/contact" class="text-white hover:text-gray-400">Contact</a>
                </li>
                <li class="mx-2">
                    <a href="/privacy-policy" class="text-white hover:text-gray-400">Privacy Policy</a>
                </li>
                
            </ul>
        </div>
        </footer>
</body>
</html>
