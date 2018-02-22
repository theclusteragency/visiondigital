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
            <i class="fa fa-list-alt"></i>
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
                  <i class="fa fa-users"></i>
                  <h3 class="box-title">Administradores del sistema</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="adminRecords" class="records table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Ciudad</th>
                        <th>Edad</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-mobile"></i>
                  <h3 class="box-title">Operadores</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="operadorRecords" class="records table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th class="text-center">Status</th>
                        <th>Teléfono</th>
                        <th>Ciudad</th>
                        <th>Edad</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>



              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart"></i>
                  <h3 class="box-title">Analistas</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <table id="analistaRecords" class="records table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th class="text-center">Status</th>
                        <th>Teléfono</th>
                        <th>Ciudad</th>
                        <th>Edad</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-list-alt"></i>
                      <h3 class="box-title">Categorías</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <table id="categoryRecords" class="records table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Descripción</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-6">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-tasks"></i>
                      <h3 class="box-title">Actividades</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <table id="activityRecords" class="records table table-bordered table-hover display nowrap margin-top-10 table-responsive" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Descripción</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-bar-chart"></i>
                      <h3 class="box-title">Fotografías Capturadas</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div id="graph1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-list-alt"></i>
                      <h3 class="box-title">Porcentaje de usuarios por rol</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div id="graph2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-6">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <i class="fa fa-tasks"></i>
                      <h3 class="box-title">Status de eventos</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div id="graph3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                  </div>
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
    <script src="assets/vendor_components/chart-js/chart.js"></script>

    <!-- Maximum_admin dashboard demo (This is only for demo purposes) -->
    <script src="js/pages/dashboard2.js"></script>
 
    <!-- This is data table -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>

    <!-- Moment -->
    <script src="assets/vendor_components/moment/moment.js"></script>

    <!-- Charts -->
    <script src="js/highcharts.js"></script>
    <script src="js/highcharts-3d.js"></script>
    <script src="js/exporting.js"></script>

    <script>
      $(document).ready(function(){
        showLoader("Cargando registros...");
        getUsers(printRecords);
        getCategories(categoryRecords);
        getActivities(activityRecords);
        getActivities(activityRecords);
        getEvents(eventRecords);
        drawPicsChart();
        setTimeout(function(){
          setOperationGraphs();
          generalInfo(setOperationPies);
        }, 1400);
        
      });
    </script>
@endsection