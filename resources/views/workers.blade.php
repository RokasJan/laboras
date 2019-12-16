@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Pasirinkimai</h2>
        <ul>
            <li><a href="/workers" class="active">Sąrašas</a></li>
            <li><a href="/workers/register">Registravimas</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Darbuotojai</h2>
        <br>
        <a href="/workers/register"><button>Registruoti darbuotoją</button></a><br>
        <br><br>
        @foreach($darbuotojai as $darb)
        <div class="newsItem">
            {{$darb -> vardas}}  {{$darb -> pravarde}}
            <a href="/workers/redaguoti/{{$darb -> id_Darbuotojas}}"><button>Redaguoti</button></a>
        </div>
        <br>
            @endforeach
    </div>
@endsection
