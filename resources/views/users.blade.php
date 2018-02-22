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
        Configuración del sistema
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-person-stalker"></i></span>
            <div class="info-box-content">
              <span id="totalAdministradores" class="info-box-number">-</span>
              <span class="info-box-text">Administradores</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-md-4 col-lg-4">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-person-stalker"></i></span>
            <div class="info-box-content">
              <span id="totalOperadores" class="info-box-number">-</span>
              <span class="info-box-text">Operadores</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-person-stalker"></i></span>
            <div class="info-box-content">
              <span id="totalAnalistas" class="info-box-number">-</span>
              <span class="info-box-text">Analistas</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <!-- Formulario para editar usuario -->
      <div id="updateUserForm" class="row hide">
        <div class="col-sm-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar colaborador</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-element">
              <div class="box-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 control-label text-right">Nombre(s):</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="editUserName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Apellido Paterno:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="editUserLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Apellido Materno:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="editUserSLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Correo electrónico:</label>
                  <div class="col-sm-9">
                    <input disabled type="email" class="form-control" id="editUserEmail" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Teléfono:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="editUserTelephone" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Ciudad:</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="editState">
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Edad:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="editUserAge" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Nickname:</label>
                  <div class="col-sm-9">
                    <input disabled type="text" class="form-control" id="editUserNickname" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Rol:</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="editUserRol">
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Descripción Rol:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="editUserDescription" placeholder="">
                  </div>
                </div>
                <div class="form-group row hide">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Fotografía:</label>
                  <div class="col-sm-9">
                    <input type="text" id="editUserPhoto" class="form-control">
                  </div>
                </div>
              </div>
              <input id="editUserStatus" type="hidden" value="1">
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="cancelUpdateUserBtn" type="button" class="btn btn-default">Cancelar</button>
                <button onclick="updateUser();" type="button" class="btn btn-info pull-right">Actualizar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- Formulario para usuario nuevo -->
      <div id="userForm" class="row hide">
        <div class="col-sm-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar colaborador</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-element">
              <div class="box-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 control-label text-right">Nombre(s):</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Apellido Paterno:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Apellido Materno:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userSLastName" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Correo electrónico:</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="userEmail" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Teléfono:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userTelephone" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Ciudad:</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="state">
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Edad:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="userAge" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Nickname:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userNickname" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Rol:</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="userRol">
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Descripción Rol:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="userDescription" placeholder="">
                  </div>
                </div>
                <div class="form-group row hide">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Fotografía:</label>
                  <div class="col-sm-9">
                    <input type="file" id="exampleInputFile" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Contraseña:</label>  
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="userPassword" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 control-label text-right">Confirmación de Contraseña:</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="userConfirmPassword" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="cancelUserBtn" type="button" class="btn btn-default">Cancelar</button>
                <button onclick="createUser();" type="button" class="btn btn-info pull-right">Agregar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- Listado de usuarios -->
      <div id="usersSection" class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios registrados en el sistema</h3>
              <button type="button" id="addUserBtn" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Agregar</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usersList" class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Edad</th>
                    <th>Nickname</th>
                    <th>Rol</th>
                    <th>Descripción</th>
                    <th>Editar/Suspender</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
      $(document).ready(function() {
        showLoader("Cargando registros...");
      });
    </script>
@endsection