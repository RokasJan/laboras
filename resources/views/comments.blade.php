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
        <h2 id="pageTitle">Atsiliepimai</h2>
        @foreach($allKomentarai as $com)
        <div class="newsItem">
            <p class="title"><a>Vardas: {{ $com->koment->vardas }}</a></p>
            <p class="description">Atsiliepimas: {{ $com->komentarai }}</p>
            <p class="description">Data: {{ $com->data }}</p>
        </div>
        @endforeach
        <br><br><a class="btn btn-primary" style="margin-left: 15px" href="{{route('comp')}}">
            <span>Pridėti komentarą</span>
        </a>
{{--        <div class="newsItem">--}}
{{--            <p class="title"><a href="#">Ziauriai geras puslapis</a></p>--}}
{{--            <p class="description">Man labai patiko viskas, kas tik cia buvo.</p>--}}
{{--        </div>--}}
{{--        <div class="newsItem">--}}
{{--            <p class="title"><a href="#">Niekada cia negrizciau</a></p>--}}
{{--            <p class="description">Man labai nepatiko viskas, kas tik cia buvo.</p>--}}
{{--        </div>--}}
{{--        <div class="newsItem newsItemLast">--}}
{{--            <p class="title"><a href="#">Patiko darbuotojas</a></p>--}}
{{--            <p class="description">Gal turite jo numeri? Noreciau artimiau susipazinti.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
