@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Pasirinkimai</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
            <li><a href="/cars/add">Pridėti automobilį</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 id="pageTitle">Pridėti automobilį</h2>
        <form class="form-horizontal" role="form" method="POST" action="/cars/add/done">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Markė:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="marke" value="{{old('marke')}}"></p>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Modelis:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="modelis" value="{{old('modelis')}}"></p>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Pagaminimo data:</label></p>
                <div class="col-md-12">
                    <p><input type="date" id="start" name="data" value=""></p>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Vietu skaičius:</label></p>
                <div class="col-md-12">
                    <p><input type="text" class="form-control" name="vietos" value="{{old('vietos')}}"></p>
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <p> <label class="col-md-4 control-label">Kaina:</label></p>--}}
{{--                <div class="col-md-12">--}}
{{--                    <p><input type="number" step="0.01" class="form-control" name="kaina" value="{{old('kaina')}}"></p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-group">
                <p> <label class="col-md-4 control-label"></label>Pavarų dėžė:</p>
                <div style="margin-left:15px" class="col-md-12">
                    <select name="pavaros" data-column="0" class="form-control filter-select">
                        @foreach($pavaruDeze as $pavaros)
                            <option value="{{$pavaros->id_Pavaru_dezes}}">{{$pavaros->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Kuro tipas:</label></p>
                <div style="margin-left:15px" class="col-md-12">
                    <select name="kuras" data-column="0" class="form-control filter-select">
                        @foreach($kuroTipas as $kuras)
                        <option value="{{$kuras->id_Kuro_tipas}}">{{$kuras->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <p> <label class="col-md-4 control-label">Kėbulas</label></p>
                <div style="margin-left:15px" class="col-md-12">
                    <select name="kebulas" data-column="0" class="form-control filter-select">
                        @foreach($kebuloTipas as $kebulas)
                            <option value="{{$kebulas->id_Kebulu_tipai}}">{{$kebulas->name}}</option>
                        @endforeach
                    </select>
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
