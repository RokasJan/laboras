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
            <div style="margin-left:15px" class="newsItem">
                <tr>
                    <td>
                        <select name="filter" data-column="0" class="form-control filter-select">
                            <option value="">Pasirinkite markę</option>
                                <option value="Audi">Audi</option>
                                <option value="BMW">BMW</option>
                        </select>
                    </td>
                </tr>
                <table id = "customers">
                    <tr>
                        <th>Numeris</th>
                    <th>Modelis</th>
                    <th>Markė</th>
                    <th>Pagaminta</th>
                    <th>Pavarų dėžės tipas</th>
                    <th>Kuro tipas</th>
                    <th>Kėbulo tipas</th>
                    </tr>
                @foreach($allCars as $car )
                        <tr>
                            <td>{{ $car->id_Automobilis }}</td>
                    <td>{{ $car->marke }}</td>
                    <td>{{ $car->modelis }}</td>
                    <td>{{ $car->pagaminimo_data }}</td>
                    <td>{{ $car->pavdez->name}}</td>
                    <td>{{ $car->kurtip->name }}</td>
                    <td>{{ $car->kebtip->name }}</td>
                    <td><a href="auto_red.html"><button>Redaguoti</button></a></td>
                        </tr>
                @endforeach
                </table>
                <br>
                <a href="{{route('buy')}}"><button>Pirkti</button></a>
                <a href="{{route('reg')}}"><button>Registruotis važiavimui</button></a>&nbsp;
                <a href="komplektacija.html"><button>Komplektuotis automobilį</button></a>
            </div>
        </div>
@endsection
