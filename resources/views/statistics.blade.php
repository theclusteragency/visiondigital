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
      <div class="row">
        <div class="col-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>EXISTENCIA Y PROMOVIDOS</h3>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Existencias totales de niños y niñas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="myChart" style="height: 300px; width: 100%"></canvas>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
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
              <div class="col-12 col-lg-8">
                <div class="box-body chart-responsive">
                  <canvas id="myChart2" style="height: 300px; width: 100%"></canvas>
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
              <h3 class="box-title">Existencias totales de niños y niñas</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="special-kids" style="height: 300px; width: 100%"></canvas>
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
              <h3 class="box-title">Total de niños por género</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="row px-3">
              <div class="col-12 col-lg-8">
                <div class="box-body chart-responsive">
                  <canvas id="total-gender" style="height: 300px; width: 100%"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Existencias VS Promovidos (Niños)</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="man-existence-promoted" style="height: 500px; width: 100%"></canvas>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Existencias VS Promovidos (Niñas)</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="woman-existence-promoted" style="height: 500px; width: 100%"></canvas>
            </div>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>MIGRACIÓN (ALUMNOS QUE PROVIENEN DE OTRA ESCUELA)</h3>
            </div>
          </div>
        </div>
      </div>



      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Migración de alumnos</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="total-migration" style="height: 300px; width: 100%"></canvas>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Total de migración por país</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="total-migration-country" style="height: 300px; width: 100%"></canvas>
            </div>
          </div>
        </div>
      </div>




      
      

      <div class="row">
        <div class="col-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>ALUMNOS Y GRUPOS</h3>
            </div>
          </div>
        </div>
      </div>


      
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Niños grado y edad</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="man-age-group" style="height: 500px; width: 100%"></canvas>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-flag"></i>
              <h3 class="box-title">Niñas por grado y edad</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="woman-age-group" style="height: 500px; width: 100%"></canvas>
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
    
    <!-- Graficas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
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