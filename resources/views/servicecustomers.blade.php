@extends('home')
@section('contentRight')
<div id="contentLeft">
    <h2>Menu</h2>
    <ul>
        <li><a href="reg_klienta_serv.html" class="active">Užregistruoti klientą servisui</a></li>
        <li><a href="priskirti_auto.html" class="active">Priskirti automobili klientui</a></li>
    </ul>
</div>
<div id="contentRight">
    <h2 id="pageTitle">Serviso klientai</h2>
    <table style="width: 50%;" border="2">
        <tbody>
        <tr>
            <td>Vardas</td>
            <td>Pavardė</td>
            <td>El. paštas</td>
            <td>Laikas</td>
        </tr>
        <tr>
            <td>Nedas</td>
            <td>Nedaitis</td>
            <td>Nedas@email.com</td>
            <td>Penktadienis 6.30</td>
        </tr>
        <tr>
            <td>Barnis</td>
            <td>Barnaitis</td>
            <td>barnis@email.com</td>
            <td>Penktadienis 6.31</td>
        </tr>
        </tbody>
    </table>

</div>
@endsection
