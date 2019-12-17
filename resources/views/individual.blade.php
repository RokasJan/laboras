@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Naujienos</h2>
        <ul>
            <li><a href="/cars">Automobiliai</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Užsakymai</h2>
        @foreach($allUzsakymai as $uzs)
        <div class="newsItem">
            <p class="description">Norima komplektacija - {{ $uzs->automobilio_komplektacija }}</p>
            <p class="description">Būsena -
                @if( $uzs->busena == 0)
                    Nepatvirtinta
                @else
                    Patvirtinta
                @endif</p>
            <p><button>Patvirtinti</button></p>
            <p><button>Atšaukti</button></p>
        </div>
        @endforeach
    </div>
@endsection
