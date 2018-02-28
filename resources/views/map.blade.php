@extends('layouts.rafagana')

@section('page_css')
    <!-- CSS de cada página -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Mapa de Eventos</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
              <div class="box box-default">
                <div class="box-header with-border">
                    <div class="pull-left">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="filter-state" style="margin-right: 15px;">Filtar por estado</label>
                                <select class="form-control" name="filter-state" id="filter-state" style="width: 400px "></select>
                            </div>
                        </form>
                    </div>
                    <div class="pull-right">
                        <form class="form-inline">
                            <label>Agregar Mapas: </label>
                            <input class="form-control" type="number" name="cols" id="cols" placeholder="+ Columnas" min="1" max="3" width="200" style="width: 150px; margin: 0 5px">
                            <input class="form-control" type="number" name="rows" id="rows" placeholder="+ Filas" min="1" max="5" width="200" style="width: 150px; margin: 0 5px">
                            <button class="btn btn-primary" type="button" id="col-rows">Mostrar</button>
                        </form>
                    </div>
                </div>
                <div class="box-body">
                  <div id="overlayermap" class="gmaps"></div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <section  class="content" id="content-maps"></section>
 
</div>
<!-- /.content-wrapper -->
@endsection

@section('page_js')
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk"></script>
    <script src="{{ secure_asset('js/pages/maps.js', \App::environment() == 'production')}}"></script>
    <!-- script src="assets/vendor_components/gmaps/jquery.gmaps.js"></script -->
    <!-- DataTables -->
    <script src="{{ secure_asset('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js', \App::environment() == 'production') }}"></script>
    <script src="{{ secure_asset('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js', \App::environment() == 'production') }}"></script>
    <!-- Moment -->
    <script src="{{ secure_asset('assets/vendor_components/moment/moment.js', \App::environment() == 'production')}}"></script>
@endsection