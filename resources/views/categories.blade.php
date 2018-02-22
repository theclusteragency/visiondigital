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
        Configuración de sistema
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-list-alt"></i></span>
            <div class="info-box-content">
              <span id="totalCategories" class="info-box-number">-</span>
              <span class="info-box-text">Categorías</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- Formulario para actividad nueva -->
      <div id="categoryForm" class="row hide">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dar de alta categorías</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-element">
              <div class="box-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 control-label">Descripción:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="categoryField" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button onclick="createCategory();" type="button" class="btn btn-info pull-right">Agregar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- Listado de subactividades -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Categorías registradas</h3>
              <button type="button" id="addCategoryBtn" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Agregar</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="categoriesList" class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Descripción</th>
                    <th>Acciones</th>
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
      $(document).ready(function(){
        showLoader("Cargando registros...");
        getCategories(printCategoriesList);
      });
    </script>
@endsection