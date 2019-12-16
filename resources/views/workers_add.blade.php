@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Pasirinkimai</h2>
        <ul>
            <li><a href="/workers" >Sąrašas</a></li>
            <li><a href="darbuotojai_red.html">Redagavimas</a></li>
            <li><a href="/workers/register"class="active">Registravimas</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Pridėti darbuotoją</h2>
        <form class="form-horizontal" role="form" method="POST" action="/workers/register/done">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Vartotojo el. paštas</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="pastas" value="{{old('pastas')}}"></p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <p> <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-refresh"></span>
                            Pridėti
                        </button></p>
                </div>
            </div>

        </form>


    </div>
@endsection
