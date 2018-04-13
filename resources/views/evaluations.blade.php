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
                  1. Escriba el número de alumnos existentes de lactante y maternal al final del ciclo 2016-2017, (al último día del ciclo) desglosándolos por estrato de edad y sexo, escriba el total de grupos por estrato de edad e indique cuántos de ellos son hablantes de alguna lengua indígena, cuántos son nacidos fuera de México, cuántos tienen alguna Discapacidad, Dificultad Severa de Conducta (DSC), Dificultad Severa de Comunicación (DSCom), Dificultad Severa de Aprendizaje (DSA), Trastorno por Déficit de Atención e Hiperactividad (TDAH), Aptitudes sobresalientes u Otras condiciones.
                </p>

                <div id="existencia-promovidos-1">
                  <h3>Estrato de Edad 1</h3>
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
                  <h3>Estrato de Edad 2</h3>
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
                  <h3>Estrato de Edad 3</h3>
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
                </div> 
                
                <br><br>
                <p>
                  2. Escriba el número de alumnos existentes de preescolar al final del ciclo 2016-2017, (al último día del ciclo) desglosándolos por grado y sexo, escriba el total de grupos por grado e indique cuántos de ellos son hablantes de alguna lengua indígena, cuántos son nacidos fuera de México, cuántos tienen alguna Discapacidad, Dificultad Severa de Conducta (DSC), Dificultad Severa de Comunicación (DSCom), Dificultad Severa de Aprendizaje (DSA), Trastorno por Déficit de Atención e Hiperactividad (TDAH), Aptitudes sobresalientes u Otras condiciones.
                </p>

                <div id="existencia-promovidos-2">
                  <h3>Estrato de Edad 1</h3>
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
                  <h3>Estrato de Edad 2</h3>
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
                  <h3>Estrato de Edad 3</h3>
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