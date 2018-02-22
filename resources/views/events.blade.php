@extends('layouts.rafagana')

@section('page_css')
    <!-- CSS de cada página -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-calendar"></i>
            Registros
          </h1>
        </section>
       <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-12">
              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Eventos</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="eventRecords" class="events-table table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Encargado</th>
                        <th>Operadores</th>
                        <th>Analistas</th>
                        <th>Dirección</th>
                        <th>Fecha</th>
                        <th class="hide">Fecha ordenamiento</th>
                        <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </section>
        <!-- /.content -->
 
</div>
<!-- /.content-wrapper -->
@endsection

@section('page_js')


    <!-- ChartJS -->
    <script src="{{ secure_asset('assets/vendor_components/chart-js/chart.js') }}"></script>

    <!-- Maximum_admin dashboard demo (This is only for demo purposes) -->
    <script src="{{ secure_asset('js/pages/dashboard2.js') }}"></script>
 
    <!-- This is data table -->
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js') }}"></script>

    <script src="{{ secure_asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js') }}"></script>
    <!-- Moment -->
    <script src="{{ secure_asset('assets/vendor_components/moment/moment.js') }}"></script>

    <script>
      $(document).ready(function(){
        showLoader("Cargando registros...");
        getEvents(eventRecords);
        setInterval(function(){
          eventsRecors.clear();
          eventsRecors.destroy();
          getEvents(eventRecords);
        }, 25000);
      });
    </script>
@endsection