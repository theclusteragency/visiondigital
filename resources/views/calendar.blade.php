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
        Calendario de Eventos
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                      <!-- THE CALENDAR -->
                      <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
        <div class="modal none-border" id="my-event">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><strong>Agregar Evento</strong></h4>
                    </div>
                    <div class="modal-body">
                      <form>
                        <input type="hidden" name="event-date" id="event-date" value="">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Descripción:</label>
                              <input class="form-control" placeholder="Inserte nombre de Evento" type="text" name="title" id="title">
                            </div>
                          </div>
                          <!-- div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Categoria</label>
                              <select class="form-control" name="categories" id="categories"></select>
                            </div>
                          </div -->
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Estatus:</label>
                              <select class="form-control" name="status" id="status">
                                <option value="1">Programado</option>
                                <option value="2">Iniciado</option>
                                <option value="3">Finalizado</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Dirección:</label>
                              <select class="form-control" name="directors[]" id="directors"></select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group" style="display: none">
                              <label class="control-label">Distritos:</label>
                              <select class="form-control" name="districts[]" id="districts" multiple></select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Regiones:</label>
                              <select class="form-control" name="regions[]" id="regions">
                                <option disabled="disabled" selected="selected">Selecciona</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Municipios:</label>
                              <select class="form-control" name="municipios[]" id="municipios"></select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group" style="display: none">
                              <label class="control-label">Supervisiores:</label>
                              <select class="form-control" name="supervisors[]" id="supervisors" multiple></select>
                            </div>

                            <div class="form-group">
                              <label class="control-label">Roles:</label>
                              <!-- select class="form-control" name="supervisors[]" id="supervisors" multiple></select -->
                              <select class="form-control" name="roles[]" id="roles">
                                <option>Secretario</option>
                                <option>Subsecretario</option>
                                <option>Organismos</option>
                                <option>Directores Generales</option>
                                <option>Dirctores de Área</option>
                                <option>Directores Centrales</option>
                                <option>Directores Regionales</option>
                                <option>Supervisores</option>
                                <option>Escuela</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Estadísticas:</label>
                              <select class="form-control" name="activities" id="activities" multiple>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- div class="row"><div class="col-md-12">
                          <div class="form-group"><label class="control-label">Dirección</label><input class="form-control" placeholder="Dirección" type="text" name="address" id="address"></div></div>
                        </div>
                        <div style="display: block;">
                            <div class="row row5">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Latitud </label>
                                  <input type="number" class="form-control" name="lat" id="lat" min="-85" max="85" value="19.432608">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Longitud</label>
                                  <input type="number" class="form-control" name="lon" id="lon" min="-180" max="180" value="-99.133208">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="map" style="height: 300px; width: 100%"></div>
                            </div>
                        </div -->
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-white waves-effect" data-dismiss="modal" id="btn-cancel-event">Cancelar</button>
                      <button type="button" class="btn btn-success save-event waves-effect waves-light" id="create-event">Crear evento</button>
                      <!-- button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

@endsection

@section('page_js')
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/vendor_components/jquery-ui/jquery-ui.min.js', \App::environment() == 'production') }}"></script>
    <!-- fullCalendar -->
    <script src="{{ asset('assets/vendor_components/moment/moment.js', \App::environment() == 'production') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/dist/fullcalendar.min.js', \App::environment() == 'production') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar/dist/locale-all.js', \App::environment() == 'production')}}"></script>
    <!-- Selectize -->
    <script src="{{ asset('js/selectize.js', \App::environment() == 'production') }}"></script>
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk&libraries=places"></script>
    <!-- maximum_admin for calendar -->
    <script src="{{ asset('js/pages/calendar.js', \App::environment() == 'production') }}"></script>
@endsection