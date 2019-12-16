@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
<div id="contentRight">
    <h2 class="align">Redaguoti automobilio duomenis </h2>

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
                    <form class="form-horizontal" role="form" method="POST" action="/redaguotipatv/{{$automobilis->id_Automobilis}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Vardas</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="marke" value="{{$automobilis->marke}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Modelis</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="modelis" value="{{$automobilis->modelis}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pagaminimo data</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control" name="pagaminimo_data" value="{{$automobilis->pagaminimo_data}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Vietų skaičius</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="vietu_skaicius" value="{{$automobilis->vietu_skaicius}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Modifikacija</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="modifikacija" value="{{$automobilis->modifikacija}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ar yra naudojamas kaip pakaitinis?</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="pozymis" value="{{$automobilis->pozymis}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pavarų dėžės tipas</label>
                            <div class="col-md-12">
                                <select class="form-control" name="pavaru_deze">
                                    @foreach($deze as $dez)
                                    <option value="{{$dez->id_Pavaru_dezes}}">{{$dez->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kuro tipas</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kuro_tipas">
                                    @foreach($kuras as $kur)
                                        <option value="{{$kur->id_Kuro_tipas}}">{{$kur->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kėbulo tipas</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kebulas">
                                    @foreach($kebulai as $dez)
                                        <option value="{{$dez->id_Kebulu_tipai}}">{{$dez->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-refresh"></span>
                                    Redaguoti
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
