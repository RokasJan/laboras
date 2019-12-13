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
        <h2 id="pageTitle">Klientai</h2>
        <table style="width: 50%;" border="2">
            <tbody>
            <tr>
                <td>Vardas</td>
                <td>Pavardė</td>
                <td>El. paštas</td>
            </tr>
            <tr>
                <td>Andrius</td>
                <td>Andraitis</td>
                <td>Andrius@email.com</td>
            </tr>
            <tr>
                <td>Lukas</td>
                <td>Lukaitis</td>
                <td>Lukas@email.com</td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
