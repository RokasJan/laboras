@extends('home')
@section('contentRight')
<div id="contentLeft">
    <h2>Menu</h2>
    <ul>
        <li><a href="{{ 'registruoti' }}" class="active">Užsiregistruoti servisui</a></li>
        <li><a href="priskirti_auto.html" class="active">Priskirti automobili klientui</a></li>
    </ul>
</div>
<div id="contentRight">
    <h2 id="pageTitle">Serviso klientai</h2>
    <table style="width: 50%;" border="2">
        <tbody>
        <tr>
            <td>Data</td>
            <td>Vieta</td>
            <td>Priežastis</td>
        </tr>
        @foreach($allService as $serv)
        <tr>
            <td>{{ $serv->data }}</td>
            <td>{{ $serv->vieta }}</td>
            <td>{{ $serv->priezastis }}</td>
        </tr>
        @endforeach
{{--        <tr>--}}
{{--            <td>Barnis</td>--}}
{{--            <td>Barnaitis</td>--}}
{{--            <td>barnis@email.com</td>--}}
{{--            <td>Penktadienis 6.31</td>--}}
{{--        </tr>--}}
        </tbody>
    </table>

</div>
@endsection
