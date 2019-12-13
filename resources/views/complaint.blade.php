@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="auto_reg.html" class="active">Pridėti automobilį</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Automobiliai</h2>
        <div class="newsItem">
            <form style="margin-left:50px;">
                Kam skirtas<br>
                <input type="text" name="name"><br>
                Skundas
                <textarea rows="10" cols="40"></textarea>
                <p><a href="pagrindinis.html"><button>Išsaugoti</button></a></p>
            </form>
        </div>
    </div>
@endsection
