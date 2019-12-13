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
        <a href="darbuotojai_reg.html"><button>Registruoti darbuotoją</button></a><br>
        <div class="newsItem">
            Nedas Nedaitis Nedas@email.com
            <a href="darbuotojai_red.html"><button>Redaguoti</button></a>
        </div>
        <div class="newsItem">
            Rokas Rokaitis Rokas@email.com
            <a href="darbuotojai_red.html"><button>Redaguoti</button></a>
        </div>
@endsection
