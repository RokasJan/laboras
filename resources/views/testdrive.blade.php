@extends('home')
@section('contentRight')
<div id="contentLeft">
    <h2>Naujienos</h2>
    <ul>
        <li><a href="automobiliai.html">Automobiliai</a></li>
        <li><a href="Greitai.html">Greitai pasirodys</a></li>
    </ul>
</div>
<div id="contentRight">
    <h2 id="pageTitle">Važiavimai</h2>
    <div class="newsItem">
        <p class="title"><a href="#">Tadas Tadaitis</a></p>
        <p class="description">Sestadienis 15:30 BMW 2002</p>
        <p><button>Patvirtinti</button></p>
        <p><button>Atšaukti</button></p>
    </div>
    <div class="newsItem">
        <p class="title"><a href="#">Grybas Karaitis</a></p>
        <p class="description">Sestadienis 15:31 BMW 2002</p>
        <p><button>Patvirtinti</button></p>
        <p><button>Atšaukti</button></p>
    </div>
</div>
</div>
@endsection
