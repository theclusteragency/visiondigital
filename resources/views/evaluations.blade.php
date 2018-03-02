@extends('layouts.rafagana')

@section('page_css')
    <!-- CSS de cada página -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>EVALUACIONES</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="info-box">
            <!-- span class="info-box-icon bg-yellow"><i class="fa fa-list-alt"></i></span>
            <div class="info-box-content">
              <span id="totalCategories" class="info-box-number">-</span>
              <span class="info-box-text">Categorías</span>
            </div -->
            <h1>Estadística de Educación Inicial</h1>
            <h2>Inicio de Cursos, 2017-2018</h2>
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="info-box">
            <h3>DATOS DE IDENTIFICACIÓN DEL CENTRO DE TRABAJO</h3>
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      
      <!-- Listado de subactividades -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Sistema Escolarizado</h2>
            </div>
            <!-- /.box-header -->
            
              


<!-- form start -->
<form class="form-horizontal form-element">
  <div class="box-body">
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la Escuela</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="schoolname" placeholder="Nombre de la Escuela">
      </div>
    </div>

    <!-- div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Vialidad Principal</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mainstreet" placeholder="Vialidad Principal">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Vialidad Posterior</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="backstreet" placeholder="Vialidad Posterior">
      </div>
    </div -->

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Vialidad Principal</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="mainstreet" placeholder="Vialidad Principal">
      </div>
      <label for="inputPassword3" class="col-sm-2 control-label">Vialidad Posterior</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="backstreet" placeholder="Vialidad Posterior">
      </div>
    </div>

    <!-- div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Número Exterior</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="extnum" placeholder="Número Exterior">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Número Interior</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="intnum" placeholder="Número Interior">
      </div>
    </div -->

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2  control-label">Número Exterior</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="extnum" placeholder="Número Exterior">
      </div>
        <label for="inputPassword3" class="col-sm-2 control-label">Número Interior</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="intnum" placeholder="Número Interior">
      </div>
    </div>

    <!-- div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Entidad Federativa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="state" placeholder="Entidad Federativa">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Municipio o Delegación</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipality" placeholder="Municipio o Delegación">
      </div>
    </div -->

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Entidad Federativa</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="state" placeholder="Entidad Federativa">
      </div>
      <label for="inputPassword3" class="col-sm-2 control-label">Municipio o Delegación</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="municipality" placeholder="Municipio o Delegación">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Sostenimiento</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sustenance" placeholder="Sostenimiento">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Tipo / Nivel / Subnivel</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="level" placeholder="Tipo / Nivel / Subnivel">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Característica</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="characteristic" placeholder="Característica">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Dependencia Normativa</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dependence" placeholder="Dependencia Normativa">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Correo Institucional</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Correo Institucional">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Nombre del Director</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="principal" placeholder="Nombre del Director">
      </div>
    </div>

    <!-- div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">CURP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="curp" placeholder="CURP">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">RFC</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rfc" placeholder="RFC">
      </div>
    </div -->

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">CURP</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="curp" placeholder="CURP">
      </div>
      <label for="inputPassword3" class="col-sm-2 control-label">RFC</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="rfc" placeholder="RFC">
      </div>
    </div>

    <!-- div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Jefatura de Sector</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="headquarters" placeholder="Jefatura de Sector">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Zona Escolar</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="schoolzone" placeholder="Zona Escolar">
      </div>
    </div -->

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 control-label">Jefatura de Sector</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="headquarters" placeholder="Jefatura de Sector">
      </div>
      <label for="inputPassword3" class="col-sm-2 control-label">Zona Escolar</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="schoolzone" placeholder="Zona Escolar">
      </div>
    </div>

    <!-- div class="form-group row">
      <div class="ml-auto col-sm-10">
        <div class="checkbox">
          <input type="checkbox" id="Remember">
          <label for="Remember">Remember me</label> 
        </div>
      </div>
    </div -->

  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-default">Cancelar</button>
    <button type="submit" class="btn btn-info pull-right">Guardar</button>
  </div>
  <!-- /.box-footer -->
</form>






          
          </div>
          <!-- /.box -->        
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="modal modal-warning fade" id="modalEmptyFields">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i class="fa fa-warning"></i> <span id="emptyFieldsCaption"></span> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="emptyFieldsText"></span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline float-right" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('page_js')
    <!-- ChartJS -->
    <script src="{{ asset('assets/vendor_components/chart-js/chart.js') }}"></script>
    <!-- Maximum_admin dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/pages/dashboard2.js') }}"></script>
    <!-- This is data table -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function(){
        showLoader("Cargando registros...");
        getCategories(printCategoriesList);
      });
    </script>
@endsection