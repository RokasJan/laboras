@extends('home')
@section('contentRight')
    <div id="contentLeft">
        <h2>Menu</h2>
        <ul>
            <li><a href="/cars">Automobiliai</a></li>
            <li><a href="Greitai.html">Greitai pasirodys</a></li>
        </ul>
    </div>
        <div id="contentRight">
            <h2 id="pageTitle">Automobiliai</h2>
            <div style="margin-left:15px" class="newsItem">
                <tr>
                    <td>
                        <select data-column="0" class="form-control filter-select">
                            <option value="">Pasirinkite modelį</option>
                            @foreach($modeliai as $model)
                                <option value="{{ $model }}">{{ $model }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select data-column="0" class="form-control filter-select">
                            <option value="">Pasirinkite markę</option>
                            @foreach($markes as $mark)
                                <option value="{{ $mark }}">{{ $mark }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <table id = "customers">
                    <tr>
                        <th>Numeris</th>
                    <th>Modelis</th>
                    <th>Markė</th>
                    <th>Pagaminta</th>
                    <th>Pavarų dėžės tipas</th>
                    <th>Kuro tipas</th>
                    <th>Kėbulo tipas</th>
                    </tr>
                @foreach($allCars as $car )
                        <tr>
                            <td>{{ $car->id_Automobilis }}</td>
                    <td>{{ $car->marke }}</td>
                    <td>{{ $car->modelis }}</td>
                    <td>{{ $car->pagaminimo_data }}</td>
                    <td>{{ $car->pavdez->name}}</td>
                    <td>{{ $car->kurtip->name }}</td>
                    <td>{{ $car->kebtip->name }}</td>
                    <td><a href="auto_red.html"><button>Redaguoti</button></a></td>
                        </tr>
                @endforeach
                </table>
                <br>
                <a href="{{route('buy')}}"><button>Pirkti</button></a>
                <a href="/registerfortestdrive"><button>Registruotis važiavimui</button></a>&nbsp;
                <a href="komplektacija.html"><button>Komplektuotis automobilį</button></a>
            </div>
        </div>
@endsection

@section('javascripts')

    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js">
        $(document).ready(function () {
            var table = $('#datatable').DataTable({
                'processing': true,
                'serverSide': true,
                'ajax': "{{ route('cars') }}",
                'columns': [
                    {'data': 'marke'},
                    {'data': 'modelis'}
                ],
            })
        });

        // $('.filter-input').keyup(function () {
        //     table.column( $(this).data('column'))
        //     .search( $(this).val() )
        //     .draw();
        // });

        $('.filter-select').change(function () {
            table.column( $(this).data('column'))
                .search( $(this).val() )
                .draw();
        });
    </script>

@endsection
