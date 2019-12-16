@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Skundai</h2>
        @foreach($allSkundai as $skundas)
        <div class="newsItem">
            <p class="title"><a>Priežastis: {{ $skundas->priezastis }}</a></p>
            <p class="description">Informacija: {{ $skundas->informacija }}</p>
            <p class="description">Data: {{ $skundas->data }}</p>
        </div>
        @endforeach
        <br><br><a class="btn btn-primary" style="margin-left: 15px" href="{{route('skund')}}">
            <span>Pridėti skundą</span>
        </a>
@endsection
