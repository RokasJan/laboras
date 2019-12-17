@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Pagrindinis</a></li>
        </ul>
    </div>
    <div id="contentRight">
        <h2 class="align">Registruotis į servisą</h2>

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
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('registruotipat') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Data</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" name="data" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Vieta</label>
                                <div class="col-md-12">
                                    <textarea type="text" class="form-control" name="vieta" value=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Priežastis</label>
                                <div class="col-md-12">
                                    <textarea type="text" class="form-control" name="priezastis" value=""></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-refresh"></span>
                                        Registruotis
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
