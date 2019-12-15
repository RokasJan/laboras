@extends('home')
@section('contentRight')
    <div id="contentRight">
            <h2 class="align">Pridėkite komentarą </h2>

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
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('home') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Vardas</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="vardas" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Turinys</label>
                                    <div class="col-md-12">
                                        <textarea type="text" class="form-control" name="turinys" value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Kuriam receptui</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="receptas">
{{--                                            @foreach($allKomentarai as $komentarasData)--}}
{{--                                                <option value="{{$komentarasData->id_Receptas}}">{{$komentarasData->pavadinimas}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
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
@endsection
