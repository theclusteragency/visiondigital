@extends('layouts.rafagana')

@section('page_css')
    <!-- CSS de cada página -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
      <h1>Localización de Escuelas</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Total de Escuelas: <span id="total-schools"></span></h3>
                </div>
                <div class="box-body">
                  <div id="overlayermap" class="gmaps"></div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection

@section('page_js')
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="js/pages/maps-schools.js"></script>
    <!-- script src="assets/vendor_components/gmaps/jquery.gmaps.js"></script -->
    <!-- DataTables -->
    <script src="assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Moment -->
    <script src="assets/vendor_components/moment/moment.js"></script>
@endsection