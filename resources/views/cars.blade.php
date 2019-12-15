@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/cars">Automobiliai</a></li>
            <li><a href="Greitai.html">Greitai pasirodys</a></li>
        </ul>
    </div>
        <div id="contentRight">
            <h2 id="pageTitle">Automobiliai</h2>
            <div class="newsItem">
                <br>
                <table style="margin-left:15px" id = "customers">
                    <tr>
                    <th>Modelis</th>
                    <th>Markė</th>
                    <th>Pagaminta</th>
                    <th>Pavarų dėžės tipas</th>
                    <th>Kuro tipas</th>
                    <th>Kėbulo tipas</th>
                        <th>Galimi veiksmai</th>
                    </tr>
{{--                <table style = 'border: 1px solid black;'>--}}
                @foreach($allCars as $car )
                        <tr>
                    <td>{{ $car->marke }}</td>
                    <td>{{ $car->modelis }}</td>
                    <td>{{ $car->pagaminimo_data }}</td>
                    <td>{{ $car->pavdez->name}}</td>
                    <td>{{ $car->kurtip->name }}</td>
                    <td>{{ $car->kebtip->name }}</td>
                    <td><a href="pirkti.html"><button>Pirkti</button></a><a href="registracija_vaz.html"><button>Registruotis vaziavimui</button></a>&nbsp;<a href="komplektacija.html"><button>Komplektuotis automobili</button></a>&nbsp;<a href="auto_red.html"><button>Redaguoti</button></a></td>
                        </tr>
                @endforeach
                </table>
{{--                <p class="title"><a href="#">BMW 2002</a></p>--}}
{{--                <img src="bmw.jpg" alt="bmw" width="500" height="275">--}}
{{--                <p class="description">Kaina: 3 barankos</p>--}}
{{--                <a href="pirkti.html"><button>Pirkti</button></a>--}}
{{--                <a href="registracija_vaz.html"><button>Registruotis vaziavimui</button></a>--}}
{{--                <a href="komplektacija.html"><button>Komplektuotis automobili</button></a>--}}
{{--                <a href="auto_red.html"><button>Redaguoti</button></a>--}}
{{--            </div>--}}
{{--            <div class="newsItem">--}}
{{--                <p class="title"><a href="#">Ferrari Juoda</a></p>--}}
{{--                <img src="ferrari.jpg" alt="bmw" width="500" height="275">--}}
{{--                <p class="description">Kaina: 30 barankų</p>--}}
{{--                <a href="pirkti.html"><button>Pirkti</button></a>--}}
{{--                <a href="registracija_vaz.html"><button>Registruotis vaziavimui</button></a>--}}
{{--                <a href="komplektacija.html"><button>Komplektuotis automobili</button></a>--}}
{{--                <a href="auto_red.html"><button>Redaguoti</button></a>--}}
            </div>
@endsection
