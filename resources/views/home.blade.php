<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Automasina</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // čia rašomas JQuery kodas
            $('#contentLeft h2').mouseover(function() { // užvedus pelyte
                $(this).css('cursor', 'pointer'); // pakeičiamas pelytės žymeklis
            });

            $('#contentLeft h2').click(function() { // paspaudus contentLeft h2 elem.
                $('#contentLeft ul').slideToggle(); // slepiamas/rodomas ul meniu elem.
            });
        });
    </script>
</head>
<body>
<div id="body">
    <div id="header">
        <h3 id="slogan">Automašina</h3>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    <div id="content">
        <div id="topMenu">
            <ul>
                <li><a href="/" title="Pagrindinis">Pagrindinis</a></li>
                <li><a href="/cars" title="Automobiliai">Automobiliai</a></li>
                <li><a href="/map" title="Salonu_zemelapis">Salonų žemelapis</a></li>
                <li><a href="/comments" title="Atsiliepimai">Atsiliepimai</a></li>
                <li><a href="/contracts" title="Sutartys">Sutartys</a></li>
                <li><a href="/customers" title="Klientai">Klientai</a></li>
                <li><a href="/workers" title="Darbuotojai">Darbuotojai</a></li>
                <li><a href="/worktime" title="Grafikas">Darbo grafikai</a></li>
            </ul>
        </div>
        @section('contentRight')
        <div id="contentLeft">
            <h2>Menu</h2>
            <ul>
                <li><a href="/complaint">Skundu registracija</a></li>
                <li><a href="Greitai.html">Greitai pasirodys</a></li>
            </ul>
        </div>
        <div id="contentRight">
            <p>Čia pati puikiausia įmonė</p>
            <p><a href="/complaint"><button>Skundų registracija</button></a></p>
            <p><a href="/individual"><button>Individualūs užsakymai</button></a></p>
            <p><a href="/testdrive"><button>Bandomieji važiavimai</button></a></p>
            <p><a href="/tahistory"><button>TA istorija</button></a></p>
            <p><a href="/parts"><button>Dalių sąrašas</button></a></p>
            <p><a href="/servicecustomers"><button>Užregistruoti klientai</button></a></p>
        </div>
        @show
    </div>
    <div id="footer">
        All rights reserved to me
    </div>
</div>
</body>
</html>
