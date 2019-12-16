@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Klientai</h2>
        <table style="width: 50%;" border="2">
            <tbody>
            <tr>
                <td>Vardas</td>
                <td>Pavardė</td>
                <td>El. paštas</td>
            </tr>
            @foreach($allKlientai as $kli)
            <tr>
                @foreach($kli->paskyra as $pask)
                    <td>{{ $pask->vardas }}</td>
                    <td>{{ $pask->pavarde }}</td>
                    <td>{{ $pask->email }}</td>
                @endforeach
{{--                <td>{{ $kli->id_Klientas }}</td>--}}
{{--                <td>{{ $kli->paskyra->email }}</td>--}}
            </tr>
            @endforeach
{{--            <tr>--}}
{{--                <td>Andrius</td>--}}
{{--                <td>Andraitis</td>--}}
{{--                <td>Andrius@email.com</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Lukas</td>--}}
{{--                <td>Lukaitis</td>--}}
{{--                <td>Lukas@email.com</td>--}}
{{--            </tr>--}}
            </tbody>
        </table>

    </div>
@endsection
