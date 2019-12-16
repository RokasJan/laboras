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
                    <td>{{ $pask->pravarde }}</td>
                    <td>{{ $pask->email }}</td>
                @endforeach
                    <td><a class="btn btn-danger" onclick="javascript:return confirm('Do you really want to delete this?')" href="/salinti/{{ $kli->id_Klientas }}" >
                        <span>Pašalinti</span>
                    </a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
