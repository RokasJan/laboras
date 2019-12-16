@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Pasirinkimai</h2>
        <ul>
            <li><a href="darbuotojai.html" class="active">Sąrašas</a></li>
            <li><a href="darbuotojai_red.html">Redagavimas</a></li>
            <li><a href="darbuotojai_reg.html">Registravimas</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Darbuotojai</h2>
        <br>
        <a href="/workers/register"><button>Registruoti darbuotoją</button></a><br>
        <br><br>
        @foreach($darbuotojai as $darb)
        <div class="newsItem">
            {{$darb -> id_Darbuotojas}}
            <a href="darbuotojai_red.html"><button>Redaguoti</button></a>
        </div>
        <br>
            @endforeach
    </div>
@endsection
