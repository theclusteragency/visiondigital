@extends('layouts.blank')

@section('page_css')
    <!-- CSS de cada página -->
    <link rel="stylesheet" href="{{ asset('jquery-ui-1.12.1/jquery-ui.min.css', \App::environment() == 'production') }}">
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
              <h1>Estadística de Educación Primaria</h1>
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
      
      <!-- DATOS DE IDENTIFICACIÓN DEL CENTRO DE TRABAJO -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Sistema Escolarizado</h2>
            </div>
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
              
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>

          </div>
        </div>
      </div>

      <!-- I. EXISTENCIA /PROMOVIDOS -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">I. EXISTENCIA /PROMOVIDOS</h2>
            </div>
              
            <form class="form-horizontal form-element">

              <div class="box-body">
                
                <p>
                  1. Escriba el número de alumnos existentes al final del ciclo 2016-2017, (al último día del ciclo) desglosándolos por grado y sexo, escriba el total de grupos por
                  grado e indique cuántos de ellos son hablantes de alguna lengua indígena, cuántos son nacidos fuera de México, cuántos tienen alguna Discapacidad, Dificultad
                  Severa de Conducta (DSC), Dificultad Severa de Comunicación (DSCom), Dificultad Severa de Aprendizaje (DSA), Trastorno por Déficit de Atención e
                  Hiperactividad (TDAH), Aptitudes sobresalientes u Otras condiciones.
                </p>

                <div id="existencia-promovidos-1">
                  <h3>Grado 1o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 2o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-2">
                      </div>
                      <label for="women-age-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-2" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-2">
                      </div>
                      <label for="foreigner-2" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-2" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-2">
                      </div>
                      <label for="dsc-2" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-2" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-2">
                      </div>
                      <label for="dsa-2" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-2" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-2">
                      </div>
                      <label for="extraordinary-2" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-2" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-2">
                      </div>
                      <!-- label for="women-age-2" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-2">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 3o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-3" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-3">
                      </div>
                      <label for="women-age-3" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-3" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-3">
                      </div>
                      <label for="foreigner-3" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-3" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-3">
                      </div>
                      <label for="dsc-3" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-3" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-3">
                      </div>
                      <label for="dsa-3" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-3" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-3">
                      </div>
                      <label for="extraordinary-3" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-3" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-3">
                      </div>
                      <!-- label for="women-age-3" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-3">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 4o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 5o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 6o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                </div> 
                
                <br><br>
                <p>
                  2. Escriba el número de alumnos promovidos del ciclo 2016-2017 desglosándolos por grado y sexo, e indique cuántos de ellos son hablantes de alguna lengua
                  indígena, cuántos son nacidos fuera de México, cuántos tienen alguna Discapacidad, Dificultad Severa de Conducta (DSC), Dificultad Severa de Comunicación
                  (DSCom), Dificultad Severa de Aprendizaje (DSA), Trastorno por Déficit de Atención e Hiperactividad (TDAH), Aptitudes sobresalientes u Otras condiciones.
                </p>

                <div id="existencia-promovidos-2">
                  <h3>Grado 1o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 2o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-2">
                      </div>
                      <label for="women-age-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-2" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-2">
                      </div>
                      <label for="foreigner-2" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-2" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-2">
                      </div>
                      <label for="dsc-2" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-2" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-2">
                      </div>
                      <label for="dsa-2" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-2" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-2">
                      </div>
                      <label for="extraordinary-2" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-2">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-2" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-2">
                      </div>
                      <!-- label for="women-age-2" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-2">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 3o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-3" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-3">
                      </div>
                      <label for="women-age-3" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-3" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-3">
                      </div>
                      <label for="foreigner-3" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-3" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-3">
                      </div>
                      <label for="dsc-3" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-3" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-3">
                      </div>
                      <label for="dsa-3" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-3" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-3">
                      </div>
                      <label for="extraordinary-3" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-3">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-3" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-3">
                      </div>
                      <!-- label for="women-age-3" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-3">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 4o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 5o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                  <h3>Grado 6o</h3>
                  <div>
                    <div class="form-group row">
                      <label for="men-age-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="men-age-1">
                      </div>
                      <label for="women-age-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="language-speakers-1" class="col-sm-2 control-label">Hablantes lenguas indígenas</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="language-speakers-1">
                      </div>
                      <label for="foreigner-1" class="col-sm-2 control-label">Nacidos fuera México</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="foreigner-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="disability-1" class="col-sm-2 control-label">Con discapacidad</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="disability-1">
                      </div>
                      <label for="dsc-1" class="col-sm-2 control-label">DCS</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsc-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="dscom-1" class="col-sm-2 control-label">DSCom</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dscom-1">
                      </div>
                      <label for="dsa-1" class="col-sm-2 control-label">DSA</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dsa-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tdah-1" class="col-sm-2 control-label">TDAH</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="tdah-1">
                      </div>
                      <label for="extraordinary-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="extraordinary-1">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="other-conditions-1" class="col-sm-2 control-label">Otras condiciones</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="other-conditions-1">
                      </div>
                      <!-- label for="women-age-1" class="col-sm-2 control-label">Aptitudes sobresalientes</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="women-age-1">
                      </div -->
                    </div>

                  </div>
                </div>
              
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>

          </div>
        </div>
      </div>

      <!-- II. MIGRACIÓN (ALUMNOS QUE PROVIENEN DE OTRA ESCUELA) -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">II. MIGRACIÓN (ALUMNOS QUE PROVIENEN DE OTRA ESCUELA)</h2>
            </div>
            <form class="form-horizontal form-element">
              <div class="box-body">
                <p>
                  1. Escriba por sexo y grado el número de alumnos que provienen de otra escuela, desglosándolos según el lugar donde se encontraba la escuela (en la misma entidad federativa, otra entidad federativa o incluso en otro país).
                </p>
                <div id="migracion">
                  <h3>Grado 1o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-1">
                      </div>
                      <label for="migrant-women-otheref-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-1">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-1">
                      </div>
                      <label for="migrant-women-othercountry-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-1">
                      </div>
                    </div>
                  </div>
                  <h3>Grado 2o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-2">
                      </div>
                      <label for="migrant-women-sameef-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-2">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-2">
                      </div>
                      <label for="migrant-women-otheref-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-2">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-2">
                      </div>
                      <label for="migrant-women-othercountry-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-2">
                      </div>
                    </div>
                  </div>
                  <h3>Grado 3o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-3" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-3">
                      </div>
                      <label for="migrant-women-sameef-grade-3" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-3">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-3" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-3">
                      </div>
                      <label for="migrant-women-otheref-grade-3" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-3">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-3" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-3">
                      </div>
                      <label for="migrant-women-othercountry-grade-3" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-3">
                      </div>
                    </div>
                  </div>
                  <h3>Grado 4o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-2">
                      </div>
                      <label for="migrant-women-sameef-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-2">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-2">
                      </div>
                      <label for="migrant-women-otheref-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-2">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-2">
                      </div>
                      <label for="migrant-women-othercountry-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-2">
                      </div>
                    </div>
                  </div>
                  <h3>Grado 5o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-2">
                      </div>
                      <label for="migrant-women-sameef-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-2">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-2">
                      </div>
                      <label for="migrant-women-otheref-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-2">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-2">
                      </div>
                      <label for="migrant-women-othercountry-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-2">
                      </div>
                    </div>
                  </div>
                  <h3>Grado 6o</h3>
                  <div>
                    <h4>Misma entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-2">
                      </div>
                      <label for="migrant-women-sameef-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-2">
                      </div>
                    </div>
                    <h4>Otra entidad federativa</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-2">
                      </div>
                      <label for="migrant-women-otheref-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-2">
                      </div>
                    </div>
                    <h4>Otro país</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-2" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-2">
                      </div>
                      <label for="migrant-women-othercountry-grade-2" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-2">
                      </div>
                    </div>
                  </div>
                </div> 
                <br><br>
                <p>
                  2. De los alumnos provenientes de escuela de otro país reportados en la pregunta anterior, desglóselos según el país o lugar.
                </p>
                <div id="migracion-other-country">
                  <h3>Hombres</h3>
                  <div>
                    <div class="form-group row">
                      <label for="migrant-men-usa" class="col-sm-2 control-label">Estados Unidos</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-usa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-can" class="col-sm-2 control-label">Canada</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-can">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-cam" class="col-sm-2 control-label">Centroamérica y el Caribe</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-cam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-sam" class="col-sm-2 control-label">Sudamérica</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-sam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-afr" class="col-sm-2 control-label">África</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="schoolname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-asia" class="col-sm-2 control-label">Asia</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-asia">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-eur" class="col-sm-2 control-label">Europa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-eur">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-men-oce" class="col-sm-2 control-label">Oceanía</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-men-oce">
                      </div>
                    </div>
                    
                  </div>
                  <h3>Mujeres</h3>
                  <div>
                    <div class="form-group row">
                      <label for="migrant-women-usa" class="col-sm-2 control-label">Estados Unidos</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-usa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-can" class="col-sm-2 control-label">Canada</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-can">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-cam" class="col-sm-2 control-label">Centroamérica y el Caribe</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-cam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-sam" class="col-sm-2 control-label">Sudamérica</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-sam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-afr" class="col-sm-2 control-label">África</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="schoolname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-asia" class="col-sm-2 control-label">Asia</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-asia">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-eur" class="col-sm-2 control-label">Europa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-eur">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="migrant-women-oce" class="col-sm-2 control-label">Oceanía</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="migrant-women-oce">
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- III. CALENDARIO ESCOLAR -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">III. CALENDARIO ESCOLAR</h2>
            </div>
            <form class="form-horizontal form-element">
              <div class="box-body">
                <p>1. Indique qué calendario eligió para el ciclo escolar 2016-2017</p>
                <p>Emitido por la SEP (Federal)</p>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_4">
                    <label for="Checkbox_4">185 días</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_5">
                    <label for="Checkbox_5">200 días</label>
                  </div>
                </div>
                <p>Ajustado preautorizado por la autoridad local (Estatal)</p>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_6">
                    <label for="Checkbox_6">185 días</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_7">
                    <label for="Checkbox_7">200 días</label>
                  </div>
                </div>
                <p>Ajustado por la autoridad escolar</p>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_8">
                    <label for="Checkbox_8">185 días</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input type="checkbox" id="Checkbox_9">
                    <label for="Checkbox_9">200 días</label>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- IV. CONSEJOS ESCOLARES DE PARTICIPACIÓN SOCIAL (ACUERDO 535) -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">IV. CONSEJOS ESCOLARES DE PARTICIPACIÓN SOCIAL (ACUERDO 535)</h2>
            </div>
            <form class="form-horizontal form-element">
              <div class="box-body">
                <p>
                  1. Indique si el Consejo de Participación Social se instaló durante el ciclo escolar 2016-2017
                </p>
                <div class="form-group">
                  <div class="radio">
                    <input name="group1" type="radio" id="Option_1" checked="">
                    <label for="Option_1">SÌ</label>
                  </div> 
                  <div class="radio">
                    <input name="group1" type="radio" id="Option_2" checked="">
                    <label for="Option_2">NO</label>
                  </div>
                </div>
                <p>
                  2. Indique si el Consejo de Participación Social sesionó durante el ciclo escolar 2016-2017
                </p>
                <div class="form-group">
                  <div class="radio">
                    <input name="group2" type="radio" id="Option_3" checked="">
                    <label for="Option_3">SÌ</label>
                  </div> 
                  <div class="radio">
                    <input name="group2" type="radio" id="Option_4" checked="">
                    <label for="Option_4">NO</label>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="migrant-men-usa" class="col-sm-2 control-label">¿Cuántas veces?</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="migrant-men-usa">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
          
      <!-- V.ALUMNOS Y GRUPOS -->
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">V. ALUMNOS Y GRUPOS</h2>
            </div>
            <form class="form-horizontal form-element">
              <div class="box-body">
                <p>
                  1. En esta página y la siguiente, se requiere anotar el total de alumnos inscritos a partir de la fecha de inicio de cursos, sumando las altas y restando las bajas hasta el 30 de septiembre, desglosándolos por grado, sexo, nuevo  ingreso, repetidores y edad. Verifique que la suma de los subtotales de alumnos por edad sea igual al total.
                </p>
                <div id="total-alumnos">
                  <h3>Grado 1o</h3>
                  <div>
                    <h4>Menos de 6 años</h4>
                    <div class="form-group row">
                      <label for="minus6-men-new-grade-1" class="col-sm-2 control-label">Hombres (Nuevo Ingreso)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="minus6-men-new-grade-1">
                      </div>
                      <label for="minus6-men-repeater-grade-1" class="col-sm-2 control-label">Hombres (Repetidores)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="minus6-men-repeater-grade-1">
                      </div>
                      <label for="minus6-women-new-grade-1" class="col-sm-2 control-label">Mujeres (Nuevo Ingreso</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="minus6-women-new-grade-1">
                      </div>
                      <label for="minus6-women-repeater-grade-1" class="col-sm-2 control-label">Mujeres (Repetidores</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="minus6-women-repeater-grade-1">
                      </div>
                    </div>
                    <h4>6 años</h4>
                    <div class="form-group row">
                      <label for="six-men-new-grade-1" class="col-sm-2 control-label">Hombres (Nuevo Ingreso)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="six-men-new-grade-1">
                      </div>
                      <label for="six-men-repeater-grade-1" class="col-sm-2 control-label">Hombres (Repetidores)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="six-men-repeater-grade-1">
                      </div>
                      <label for="six-women-new-grade-1" class="col-sm-2 control-label">Mujeres (Nuevo Ingreso</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="six-women-new-grade-1">
                      </div>
                      <label for="six-women-repeater-grade-1" class="col-sm-2 control-label">Mujeres (Repetidores</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="six-women-repeater-grade-1">
                      </div>
                    </div>
                    <h4>7 años</h4>
                    <div class="form-group row">
                      <label for="seven-men-new-grade-1" class="col-sm-2 control-label">Hombres (Nuevo Ingreso)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="seven-men-new-grade-1">
                      </div>
                      <label for="seven-men-repeater-grade-1" class="col-sm-2 control-label">Hombres (Repetidores)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="seven-men-repeater-grade-1">
                      </div>
                      <label for="seven-women-new-grade-1" class="col-sm-2 control-label">Mujeres (Nuevo Ingreso</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="seven-women-new-grade-1">
                      </div>
                      <label for="seven-women-repeater-grade-1" class="col-sm-2 control-label">Mujeres (Repetidores</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="seven-women-repeater-grade-1">
                      </div>
                    </div>
                  </div>

                  <h3>Grado 2o</h3>
                  <div>
                    
                  </div>

                  <h3>Grado 3o</h3>
                  <div>
                    
                  </div>

                  <h3>Grado 4o</h3>
                  <div>
                    
                  </div>

                  <h3>Grado 5o</h3>
                  <div>
                    
                  </div>

                  <h3>Grado 6o</h3>
                  <div>
                    
                  </div>

                </div>
                
                <br><br>
                <p>
                  2. Escriba el número total de grupos por grado.
                  Nota: Si en un grupo se atiende más de un grado, anótelo en el apartado MÁS DE UN GRADO.
                </p>
                <div class="form-group row">
                  <label for="total-groups-grade-1" class="col-sm-2 control-label">Primero</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-1">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="total-groups-grade-2" class="col-sm-2 control-label">Segundo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-2">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="total-groups-grade-3" class="col-sm-2 control-label">Tercero</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-3">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="total-groups-grade-4" class="col-sm-2 control-label">Cuarto</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-4">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="total-groups-grade-5" class="col-sm-2 control-label">Quinto</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-5">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="total-groups-grade-6" class="col-sm-2 control-label">Sexto</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total-groups-grade-6">
                  </div>
                </div>
                
                <br><br>
                <p>
                  3. Del total de alumnos reportados en primer grado, registre la cantidad de los que cursaron 
                  educación preescolar, según los años cursados y tipo de ingreso, desglosándolos por sexo y 
                  cuántos de ellos tienen alguna discapacidad.
                </p>

                <br><br>
                <p>
                  4. Escriba el número de niños indígenas o hablantes de alguna lengua indígena, desglosándolo por sexo.
                </p>
                <div class="form-group row">
                  <label for="total-man-native" class="col-sm-2 control-label">Hombres</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-man-native">
                  </div>
                  <label for="total-woman-native" class="col-sm-2 control-label">Mujeres</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-woman-native">
                  </div>
                </div>

                <br><br>
                <p>
                  5. Escriba el número de alumnos de nacionalidad extranjera, desglosándolo por sexo.
                </p>
                <div id="total-foreign">
                  <h3>Hombres</h3>
                  <div>
                    <div class="form-group row">
                      <label for="total-foreign-men-usa" class="col-sm-2 control-label">Estados Unidos</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-usa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-can" class="col-sm-2 control-label">Canada</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-can">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-cam" class="col-sm-2 control-label">Centroamérica y el Caribe</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-cam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-sam" class="col-sm-2 control-label">Sudamérica</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-sam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-afr" class="col-sm-2 control-label">África</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="schoolname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-asia" class="col-sm-2 control-label">Asia</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-asia">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-eur" class="col-sm-2 control-label">Europa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-eur">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total-foreign-men-oce" class="col-sm-2 control-label">Oceanía</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="total-foreign-men-oce">
                      </div>
                    </div>
                    
                  </div>
                  <h3>Mujeres</h3>
                  <div>
                    <div class="form-group row">
                      <label for="foreign-women-usa" class="col-sm-2 control-label">Estados Unidos</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-usa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-can" class="col-sm-2 control-label">Canada</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-can">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-cam" class="col-sm-2 control-label">Centroamérica y el Caribe</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-cam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-sam" class="col-sm-2 control-label">Sudamérica</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-sam">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-afr" class="col-sm-2 control-label">África</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="schoolname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-asia" class="col-sm-2 control-label">Asia</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-asia">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-eur" class="col-sm-2 control-label">Europa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-eur">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foreign-women-oce" class="col-sm-2 control-label">Oceanía</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="foreign-women-oce">
                      </div>
                    </div>
                    
                  </div>
                </div> 

                <br><br>
                <p>
                  6. Escriba el número total de alumnos atendidos por la Unidad de Servicios de Apoyo a la 
                  Educación Regular (USAER), desglosándolos por sexo.
                </p>
                <div class="form-group row">
                  <label for="total-man-usaer" class="col-sm-2 control-label">Hombres</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-man-usaer">
                  </div>
                  <label for="total-woman-usaer" class="col-sm-2 control-label">Mujeres</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-woman-usaer">
                  </div>
                </div>

                <br><br>
                <p>
                  7. De la matrícula total, escriba el número de alumnos que proceden de escuela preescolar 
                  general, indígena y/o comunitaria desglosándolo por grado y sexo.
                </p>

                <br><br>
                <p>
                  8. Escriba el nombre de la lengua materna que hablan los alumnos procedentes de escuela preescolar indígena.
                </p>
                <div class="form-group row">
                  <label for="total-native-language-id" class="col-sm-2 control-label">Clave</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-native-language-id">
                  </div>
                  <label for="total-native-language" class="col-sm-2 control-label">Lengua Materna</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="total-native-language">
                  </div>
                </div>
                

                <br><br>
                <p>
                  9. Escriba la cantidad de alumnos con discapacidades, dificultades, trastornos, aptitudes sobresalientes 
                  y otras condiciones (diversidad social, cultural o lingüística), desglosándolos por grado y sexo..
                </p>

                <div id="info-general">
                  <h3>PRIMERO</h3>
                  <div>
                    <h4>Ceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Baja Visión</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-1">
                      </div>
                      <label for="migrant-women-otheref-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-1">
                      </div>
                    </div>
                    <h4>Sordera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-1">
                      </div>
                      <label for="migrant-women-othercountry-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-1">
                      </div>
                    </div>
                    <h4>Hipoacusia</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Sordoceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Discapacidad motriz</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Discapacidad intelectual</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Discapacidad psicosocial</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Transtorno del espectro autista</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Discapacidad múltiple</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Dificultad severa de conducta</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Dificultad severa de comunicación</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Dificultad severa de aprendizaje</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Transtorno por déficit de atención e hiperactividad</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> 
                    <h4>Aptitudes sobresalientes</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Otras condiciones</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                  </div>
                  <h3>SEGUNDO</h3>
                  <div>
                    <h4>Ceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Baja Visión</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-1">
                      </div>
                      <label for="migrant-women-otheref-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-1">
                      </div>
                    </div>
                    <h4>Sordera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-1">
                      </div>
                      <label for="migrant-women-othercountry-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-1">
                      </div>
                    </div>
                     <h4>Hipoacusia</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Sordoceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                     <h4>Discapacidad motriz</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad intelectual</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad psicosocial</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Transtorno del espectro autista</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad múltiple</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de conducta</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de comunicación</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de aprendizaje</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Transtorno por déficit de atención e hiperactividad</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Aptitudes sobresalientes</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                     <h4>Otras condiciones</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                  </div>
                  <h3>TERCERO</h3>
                  <div>
                    <h4>Ceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                    <h4>Baja Visión</h4>
                    <div class="form-group row">
                      <label for="migrant-men-otheref-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-otheref-grade-1">
                      </div>
                      <label for="migrant-women-otheref-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-otheref-grade-1">
                      </div>
                    </div>
                    <h4>Sordera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-othercountry-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-othercountry-grade-1">
                      </div>
                      <label for="migrant-women-othercountry-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-othercountry-grade-1">
                      </div>
                    </div>
                     <h4>Hipoacusia</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Sordoceguera</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                     <h4>Discapacidad motriz</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad intelectual</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad psicosocial</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Transtorno del espectro autista</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Discapacidad múltiple</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de conducta</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de comunicación</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Dificultad severa de aprendizaje</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Transtorno por déficit de atención e hiperactividad</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div> <h4>Aptitudes sobresalientes</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                     <h4>Otras condiciones</h4>
                    <div class="form-group row">
                      <label for="migrant-men-sameef-grade-1" class="col-sm-2 control-label">Hombres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-men-sameef-grade-1">
                      </div>
                      <label for="migrant-women-sameef-grade-1" class="col-sm-2 control-label">Mujeres</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="migrant-women-sameef-grade-1">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>
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
    <script src="{{ asset('jquery-ui-1.12.1/jquery-ui.min.js', \App::environment() == 'production') }}"></script>

@endsection