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
        <h2 id="pageTitle">Atsiliepimai</h2>
        <table style="width: 50%;" border="2">
            <tbody>
            <tr>
                <td>Vardas</td>
                <td>Pavardė</td>
                <td>Data</td>
                <td>Priežastis</td>
            </tr>
            <tr>
                <td>Andrius</td>
                <td>Andraitis</td>
                <td>2018/04/23</td>
                <td>Variklis keista garsa skleidė</td>
            </tr>
            <tr>
                <td>Lukas</td>
                <td>Lukaitis</td>
                <td>2015/01/01</td>
                <td>Automobilis nebevažiavo</td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection
