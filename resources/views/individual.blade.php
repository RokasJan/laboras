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
        <h2 id="pageTitle">Užsakymai</h2>
        <div class="newsItem">
            <p class="title"><a href="#">Jonas Prancyškus</a></p>
            <p class="description">Noriu galingesnio variklio ir stoglangio</p>
            <p><button>Patvirtinti</button></p>
            <p><button>Atšaukti</button></p>
        </div>
        <div class="newsItem">
            <p class="title"><a href="#">Barakas Obama</a></p>
            <p class="description">Noriu raudono ferrario su zaliu stogu</p>
            <p><button>Patvirtinti</button></p>
            <p><button>Atšaukti</button></p>
        </div>
    </div>
    </div>
@endsection
