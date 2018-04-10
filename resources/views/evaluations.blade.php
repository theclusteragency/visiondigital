@extends('layouts.blank')

@section('page_css')
    <!-- CSS de cada página -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <style type="text/css">
      #logo-sep{
        width: 300px;
        float: left;
        margin-right: 12px;
      }
      @media screen and (max-width: 500px) {
        #logo-sep{
          width: 250px
        }
        h1{
          font-size: 26px;
          text-align: center;
          line-height: 30px;
        }
        h2{
          font-size: 20px;
          text-align: center;
        }
      }
    </style>
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
            <img src="/images/seplogo.png" id="logo-sep">
            <div style="display: inline;">
              <h1>Estadística de Educación Inicial</h1>
              <h2>Inicio de Cursos, 2017-2018</h2>
            </div>
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
                  <label for="cct" class="col-sm-2 control-label">Clave del Centro de Trabajo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="cct" placeholder="CCT">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="turn" class="col-sm-2 control-label">Turno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="turn">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="schoolname" class="col-sm-2 control-label">Nombre de la Escuela</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="schoolname">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="mainstreet" class="col-sm-2 control-label">Vialidad Principal</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="mainstreet">
                  </div>
                  <label for="backstreet" class="col-sm-2 control-label">Vialidad Posterior</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="backstreet">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="rightstreet" class="col-sm-2 control-label">Vialidad Derecha</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="rightstreet">
                  </div>
                  <label for="leftstreet" class="col-sm-2 control-label">Vialidad Izquierda</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="leftstreet">
                  </div>
                </div>

                <div class="form-group row">
                    <label for="extnum" class="col-sm-2  control-label">Número Exterior</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="extnum">
                  </div>
                    <label for="intnum" class="col-sm-2 control-label">Número Interior</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="intnum">
                  </div>
                </div>

                <div class="form-group row">
                    <label for="settlement" class="col-sm-2  control-label">Asentamiento Humano</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="settlement">
                  </div>
                    <label for="postalcode" class="col-sm-2 control-label">Código Postal</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="postalcode">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="state" class="col-sm-2 control-label">Entidad Federativa</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="state">
                  </div>
                  <label for="municipality" class="col-sm-2 control-label">Municipio o Delegación</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="municipality">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="location" class="col-sm-2 control-label">Localidad</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="location">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="phone" class="col-sm-2 control-label">Teléfono</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="phone">
                  </div>
                  <label for="extension" class="col-sm-2 control-label">Extensión</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="extension">
                  </div>
                  <label for="mobile-phone" class="col-sm-2 control-label">Celular</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="mobile-phone">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="sustenance" class="col-sm-2 control-label">Sostenimiento</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sustenance">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level" class="col-sm-2 control-label">Tipo / Nivel / Subnivel</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="level" placeholder="Tipo / Nivel / Subnivel">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="characteristic" class="col-sm-2 control-label">Característica</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="characteristic" placeholder="Característica">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="dependence" class="col-sm-2 control-label">Dependencia Normativa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="dependence" placeholder="Dependencia Normativa">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-sm-2 control-label">Correo Institucional</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Correo Institucional">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="principal" class="col-sm-2 control-label">Nombre del Director</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="principal" placeholder="Nombre del Director">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="curp" class="col-sm-2 control-label">CURP</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="curp" placeholder="CURP">
                  </div>
                  <label for="rfc" class="col-sm-2 control-label">RFC</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="rfc" placeholder="RFC">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="headquarters" class="col-sm-2 control-label">Jefatura de Sector</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="headquarters" placeholder="Jefatura de Sector">
                  </div>
                  <label for="schoolzone" class="col-sm-2 control-label">Zona Escolar</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="schoolzone" placeholder="Zona Escolar">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="regional-service" class="col-sm-2 control-label">Servicio Regional</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="regional-service" placeholder="Serviicio Regional">
                  </div>
                </div>

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
    
    <script src="{{ asset('js/pages/evaluations.js', \App::environment() == 'production') }}"></script>

@endsection