@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Pasirinkimai</h2>
        <ul>
            <li><a href="/workers" >Sąrašas</a></li>
            <li><a href="/workers/register">Registravimas</a></li>
        </ul>
    </div>

    <div id="contentRight">
        <h2 id="pageTitle">Redaguoti darbuotoją</h2>
        <br>
        <a href="/workers/atleisti/{{$darb->id_Darbuotojas}}"><button>Atleisti darbuotoją</button></a><br>
        <form class="form-horizontal" role="form" method="POST" action="/workers/redaguoti/{{$darb->id}}/done">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Vardas:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="vardas" value="{{$darb->vardas}}"></p>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Pavardė:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="pravarde" value="{{$darb->pravarde}}"></p>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Darbuotojo el. paštas:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="pastas" value="{{$darb->email}}"></p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <p> <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-refresh"></span>
                            Redaguoti
                        </button></p>
                </div>
            </div>

        </form>


    </div>
@endsection
