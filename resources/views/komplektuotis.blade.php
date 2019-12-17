@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        @auth
            <h2 class="align">Automobilio komplektavimas</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('komplektpatv') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="control-label">Pasirinkite automobolį</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="auto">
                                            @foreach($allAutomobiliai as $masina)
                                                <option value="{{$masina->id_Automobilis}}">Automobilio Nr. {{$masina->id_Automobilis}}, Marke - {{$masina->marke}},  Modelis -{{$masina->modelis}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Norima automobilio komplektacija</label>
                                    <div class="col-md-12">
                                        <textarea type="text" class="form-control" name="automobilio_komplektacija" value=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-refresh"></span>
                                                Pridėti
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endauth
@endsection
