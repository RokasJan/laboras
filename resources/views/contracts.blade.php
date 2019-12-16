@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Naujienos</h2>
        <ul>
            <li><a href="/cars">Automobiliai</a></li>
            <li><a href="Greitai.html">Greitai pasirodys</a></li>
        </ul>
    </div>
    <div id="contentRight">
    <h2 id="pageTitle">Sutartys</h2>
    @foreach($allSutartis as $sut)
    <div class="newsItem">
        <p class="title"><a>Sutarties Nr.: {{ $sut->id_Sutartis }}</a></p>
        <p class="description">Automobilio informacija: Markė - {{ $sut->automob->marke }}, Modelis - {{ $sut->automob->marke }}, Pagaminimo data - {{ $sut->automob->pagaminimo_data }}, Vietų skaičius - {{ $sut->automob->vietu_skaicius }},
            Modifikacija - {{ $sut->automob->modifikacija }},
            Busena -
            @if($sut->busena == 0)
            Neapmokėta
            @else
                Apmokėta
            @endif.</p>
        <p><a href="https://www.paypal.com/lt/home"><button>Mokėti</button></a></p>
    </div>
    @endforeach
    </div>
{{--    <div class="newsItem">--}}
{{--        <p class="title"><a href="#">BMW 2002</a></p>--}}
{{--        <img src="bmw.jpg" alt="bmw" width="500" height="275">--}}
{{--        <p class="description">Susimokėti: 3 barankos</p>--}}
{{--        <p><a href="https://www.paypal.com/lt/home"><button>Mokėti</button></a></p>--}}
{{--    </div>--}}
{{--    <div class="newsItem">--}}
{{--        <p class="title"><a href="#">Audi TT</a></p>--}}
{{--        <img src="auditt.jpg" alt="auditt" width="500" height="275">--}}
{{--        <p class="description">Susimokėti: Dovanojam, tiesiog imkit</p>--}}
{{--        <p><a href="https://www.paypal.com/lt/home"><button>Mokėti</button></a></p>--}}
{{--    </div>--}}
@endsection
