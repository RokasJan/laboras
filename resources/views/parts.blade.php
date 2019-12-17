@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="dalys_uzs.html">Užsakyti dalis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Dalys</h2>
        <table style="width: 50%;" border="2">
            <tbody>
            <tr>
                <td>Detalė</td>
                <td>Vienetai</td>
            </tr>
            <tr>
                <td>Turbina</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Stabdžių kaladėlės</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Atsarginis ratas</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
