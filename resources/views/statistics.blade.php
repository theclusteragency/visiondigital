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
        Reportes y Estadísticas
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- div class="row">
        <div class="col-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-line-chart"></i>
              <h3 class="box-title">Generales</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-6 col-xl-3">
                  <div class="small-box bg-admin">
                    <div class="inner">
                      <h3><span id="totalAdmins">-</span></h3>
                      <p>Administradores</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="{{ route('operation') }}" class="small-box-footer">Ir a listados <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-6 col-xl-3">
                  <div class="small-box bg-operador">
                    <div class="inner">
                      <h3><span id="totalOperadores">-</span></h3>
                      <p>Operadores</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-mobile"></i>
                    </div>
                    <a href="{{ route('operation') }}" class="small-box-footer">Ir a listados <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-6 col-xl-3">
                  <div class="small-box bg-analista">
                    <div class="inner">
                      <h3><span id="totalAnalistas">-</span></h3>
                      <p>Analistas</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-bar-chart"></i>
                    </div>
                    <a href="{{ route('operation') }}" class="small-box-footer">Ir a listados <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-6 col-xl-3">
                  <div class="small-box bg-blue2">
                    <div class="inner">
                      <h3><span id="totalEventos">-</span></h3>
                      <p>Eventos registrados</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <a href="{{ route('operation') }}" class="small-box-footer">Ir a listados <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div -->


      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Existencias totales de hombres y mujeres</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="existence-gender" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-12 col-lg-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Grupos totales por grado</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="row px-3">
              <div class="col-12 col-lg-7">
                <div class="box-body chart-responsive">
                  <div class="chart" id="existence-total-group" style="height: 300px; position: relative;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Porcentaje de Estadísticas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="registeredUsersChart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-12 col-lg-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Status de eventos</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="row px-3">
              <div class="col-12 col-lg-7">
                <div class="box-body chart-responsive">
                  <div class="chart" id="eventsStatusChart" style="height: 300px; position: relative;"></div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="col-12 col-lg-5">
                <ul class="chart-legend clearfix">
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #3bc45b;"></i> Programados</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #0291d9;"></i> Iniciados</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #eb2121;"></i> Finalizados</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>





      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Total de Niños</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="totalChildrenChart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-12 col-lg-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Total de Escuelas con alumnos especiales</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="row px-3">
              <div class="col-12 col-lg-7">
                <div class="box-body chart-responsive">
                  <div class="chart" id="specialChildrenChart" style="height: 300px; position: relative;"></div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="col-12 col-lg-5">
                <!-- ul class="chart-legend clearfix">
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #3bc45b;"></i> Programados</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #0291d9;"></i> Iniciados</h5>
                  </li>
                  <li>
                    <h5><i class="fa fa-circle-o" style="color: #eb2121;"></i> Finalizados</h5>
                  </li>
                </ul -->
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>


        
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Bar chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-camera"></i>
              <h3 class="box-title">Imágenes Capturadas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="takenPicsChart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 
</div>
<!-- /.content-wrapper -->
@endsection

@section('page_js')
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk"></script>
    <script src="js/pages/maps.js"></script>
    <!-- script src="assets/vendor_components/gmaps/jquery.gmaps.js"></script -->
    <!-- DataTables -->
    <script src="assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Moment -->
    <script src="assets/vendor_components/moment/moment.js"></script>

    <!-- FLOT CHARTS -->
    <script src="assets/vendor_components/Flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="assets/vendor_components/Flot/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="assets/vendor_components/Flot/jquery.flot.pie.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="assets/vendor_components/Flot/jquery.flot.categories.js"></script>
    <!-- maximum_admin for flot Chart purposes -->
    <script src="js/pages/widget-flot-charts.js"></script>
    <!-- Morris.js charts -->
    <script src="assets/vendor_components/raphael/raphael.min.js"></script>
    <script src="assets/vendor_components/morris.js/morris.min.js"></script>
    <script src="js/pages/widget-morris-charts.js"></script>
    <!-- FastClick -->
    <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- This is data table -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <script src="js/pages/statistics.js"></script>

    <script>
      $(document).ready(function(){

        showLoader("Generando estadísticas...");
      
        generalInfo(setReportTotals);

        generalActivityInfo(setActivitiesReport);
      
        drawPicsChart();

        var donutTotalChildren = new Morris.Donut({
          element: 'totalChildrenChart',
          resize: true,
          colors: ["#0291d9", "#3bc45b", "#eb2121"],
          data: [
            {label: "Iniciados", value: iniciados},
            {label: "Programados", value: programados},
            {label: "Finalizados", value: finalizados}
          ],
          hideHover: 'auto'
        });

        drawPicsChart();
      
      });
    </script>
@endsection