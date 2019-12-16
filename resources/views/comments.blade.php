@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Atsiliepimai</h2>
        @foreach($allKomentarai as $com)
        <div class="newsItem">
            <p class="title"><a>Slapyvardis: {{ $com->slapyvardis }}</a></p>
            <p class="description">Atsiliepimas: {{ $com->komentarai }}</p>
            <p class="description">Data: {{ $com->data }}</p>
            <p class="description">Data: {{ $com->koment->gimimo_data }}</p>
        </div>
        @endforeach
        <br><br><a class="btn btn-primary" style="margin-left: 15px" href="{{route('comp')}}">
            <span>Pridėti komentarą</span>
        </a>
@endsection
