@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="grafiko_sud.html" >Sudaryti darbo grafiką</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Darbo grafikas</h2>
        <table style="width: 50%;" border="2">
            <tbody>
            <tr>
                <td>Vardas</td>
                <td>Pavardė</td>
                <td>Darbo laikas</td>
            </tr>
            <tr>
                <td>Nedas</td>
                <td>Nedaitis</td>
                <td>02/11 - 22/11</td>
            </tr>
            <tr>
                <td>Rokas</td>
                <td>Rokaitis</td>
                <td>23/11 - 24/11</td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
