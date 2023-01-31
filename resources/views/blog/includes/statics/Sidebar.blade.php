        <!-- Start Preloader Area -->
        <div class="preloader preloader-deactivate">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader Area -->
        <!-- Start Navbar Area -->
        <div class="navbar-area is-sticky">
            <div class="techvio-responsive-nav">
                <div class="container">
                    <div class="techvio-responsive-menu">
                        <div class="logo">
                            <a href="http://localhost:8000/index">
                                <ul>
                                    <li><p style="color: white; font-size: 1em;" class="white-logo" alt="logo"><b>NGN</b></p></li>
                                    <li><p style="color: black; font-size: 1em;" class="black-logo" alt="logo">NGN</p></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="techvio-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="http://localhost:8000/index">
                            <ul>
                                <li><p style="color: white; font-size: 1em;" class="white-logo" alt="logo"><b>NGN</b></p></li>
                                <li><p style="color: black; font-size: 1em;" class="black-logo" alt="logo">NGN</p></li>
                            </ul>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="http://localhost:8000/index" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost:8000" class="nav-link">My Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost:8000/index#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/ctf" class="nav-link">Practice CTF</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/code" class="nav-link">Practice Code</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost:8000/index#" class="nav-link">Support</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/support-ctf" class="nav-link">Support CTF</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/support-code" class="nav-link">Support Code</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost:8000/index#" class="nav-link">Problems <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/#" class="nav-link">Problem 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/#" class="nav-link">Problem 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/#" class="nav-link">Problem 3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/#" class="nav-link">Problem 4</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="http://localhost:8000/#" class="nav-link">Problem 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="./project" class="nav-link">Projects</a>
                                </li>

                                <li class="nav-item">
                                    <a href="./coming-soon" class="nav-link">Coming-soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./about" class="nav-link">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./faq" class="nav-link">Faq</a>
                                </li>
                            </ul>
                            <div class="other-option">
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
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
                                                {{ Auth::user()->name }}
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
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
