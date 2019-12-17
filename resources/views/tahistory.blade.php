@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Naujienos</h2>
        <ul>
            <li><a href="/cars">Automobiliai</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Techninės apžiūros istorija</h2>
        <table style="width: 50%;margin-left: 15px" border="2">
            <tbody>
            <tr>
                <td>Automobilio valstybinis Nr.</td>
                <td>Data</td>
                <td>Priežastis</td>
            </tr>
            @foreach($allHistory as $hist)
            <tr>
                <td>{{ $hist->Automobilio_Valst_Nr }}</td>
                <td>{{ $hist->Data }}</td>
                <td>{{ $hist->Problema }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
