@extends('layouts.rafagana')

@section('page_css')
    <!-- Selectize style -->
    <link rel="stylesheet" href="{{ asset('css/selectize.default.css', \App::environment() == 'production') }}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/dist/fullcalendar.min.css', \App::environment() == 'production') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/fullcalendar/dist/fullcalendar.print.min.css', \App::environment() == 'production') }}" media="print">

    <style type="text/css">
        .fc-time{display: none}
        .bg-programado{background-color: #1e88e5 !important;  border-color: #1e88e5 !important;}
        .bg-iniciado{background-color: #1e7e34 !important; border-color: #1e7e34 !important;}
        .bg-terminado{background-color: #666 !important; border-color: #666 !important;}
    </style>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Descripción del Evento: <span id="title"></span> 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="info-box">
                <img class="info-box-icon" id="img-leader" src="images/no_user.png" alt="Encargado">
                <div class="info-box-content">
                  <span class="info-box-number">Encargado:</small></span>
                  <span class="info-box-text" id="leader"></span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="ion ion-stats-bars"></i></span>
                <div class="info-box-content">
                  <span class="info-box-number">Categoría:</small></span>
                  <span class="info-box-text" id="category"></span>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="info-box">
                <span class="info-box-icon" id="icon-stat"><i class="fa fa-hourglass"></i></span>
                <div class="info-box-content">
                  <span class="info-box-number">Estatus:</span>
                  <span class="info-box-text" id="status"></span>
                </div>
              </div>
            </div>
        </div><!-- End Info boxes -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-lg-12 col-xl-8">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Operadores -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Operadores</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix" id="ul-operators"></ul>
                            </div>
                            <div class="box-footer text-center">
                              <a href="javascript:void(0)" class="uppercase add-user">Agregar Operador</a>
                            </div>
                        </div>
                        <!--/.Operadores -->

                        <!-- Analistas -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Analistas</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix" id="ul-analysts"></ul>
                            </div>
                            <div class="box-footer text-center">
                              <a href="javascript:void(0)" class="uppercase add-user">Agregar Analista</a>
                            </div>
                        </div>
                        <!--/.Analistas -->

                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- ACTIVIDADES -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actividades</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-responsive no-margin">
                                <thead>
                                  <tr>
                                    <th>Estatus</th>
                                    <th>Usuario</th>
                                    <th>Descripción</th>
                                  </tr>
                                </thead>
                                <tbody id="tb-activities"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- UBICACIÓN -->
                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Dirección: <span id="street"></span></h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="pad">
                            <!-- Map will be created here -->
                            <div id="map-address" style="height: 325px;"></div>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- FOTOS -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Fotos del Evento</h3>
                    </div>
                    <div class="box-body">
                        <div id="carousel-example-generic-captions" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators" id="carousel-indicators">
                                <!-- Indicadores -->
                            </ol>                      
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox" id="div-photos">
                                <!-- Fotos -->
                            </div>
                            <!-- Controls -->
                            <a class="carousel-control-prev" href="#carousel-example-generic-captions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-generic-captions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.box -->   

            </div>
            <!-- /.col -->
            
            <!-- COMENTARIOS -->
            <div class="col-lg-12 col-xl-4">           
                <!-- DIRECT CHAT -->
                <div class="box direct-chat direct-chat-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Comentarios</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="direct-chat-messages inner-content-div" id="div-comments">
                        <!-- Conversations are loaded here -->
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" id="message" placeholder="Escribe un comentario ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn bg-green btn-flat" id="send-msg">Enviar</button>
                        </span>
                    </div>
                    </form>
                  </div>
                  <!-- /.box-footer-->
                </div>
                <!--/.direct-chat -->
            </div> <!-- End COMENTARIOS -->
        </div>

        <!-- BEGIN MODAL -->
        <div class="modal none-border" id="modal-add-users">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><strong>Agregar Usuarios</strong></h4>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Operador</label>
                              <select class="form-control" name="operator[]" id="operator" multiple></select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Analista</label>
                              <select class="form-control" name="analyst[]" id="analyst" multiple></select>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-white waves-effect" data-dismiss="modal" id="btn-cancel-add">Cancelar</button>
                      <button type="button" class="btn btn-success save-event waves-effect waves-light" id="btn-add-users">Agregar</button>
                      <!-- button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button -->
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
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/vendor_components/jquery-ui/jquery-ui.min.js', \App::environment() == 'production') }}"></script>
    <!-- fullCalendar -->
    <script src="{{ asset('assets/vendor_components/moment/moment.js', \App::environment() == 'production') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/dist/fullcalendar.min.js', \App::environment() == 'production') }}"></script>
    <!-- Selectize -->
    <script src="{{ asset('js/selectize.js', \App::environment() == 'production') }}"></script>
    <!-- maximum_admin for calendar -->
    <script src="{{ asset('js/pages/event.js', \App::environment() == 'production') }}"></script>
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk"></script>
@endsection