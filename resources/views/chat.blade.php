@extends('layouts.rafagana')

@section('page_css')
    
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chat
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-12">

                <!-- Contacts are loaded here -->
                <div class="box direct-chat-contactss">
                    
                    <div class="box-header with-border">
                        <h3 class="box-title">Contactos</h3>
                        <div class="box-tools pull-right">
                            <div class="form-group has-feedback">
                                <div class="input-group">
                                    <span class="input-group-addon" style="height: 30px"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" name="filter-contacts" id="filter-contacts" onkeyup="searchContacts()" placeholder="Filtrar" style="width: 180px; height: 30px">
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>

                    <div class="clearfix inner-content-divv">
                        <ul class="contacts-list" id="contacts-list" style="cursor: pointer;">
                            <!-- Lista de Usuarios -->
                        </ul>
                    </div>
                    <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
            </div>
            <!-- /.col -->
            <div class="col-lg-9 col-12">

                <!-- DIRECT CHAT -->
                <div class="box direct-chat direct-chat-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chat Directo:  <span id="chat-name" ></span> <span id="chat-id-user" style="display: none"></span> </h3>

                        <div class="box-tools pull-right">
                            <!-- span data-toggle="tooltip" title="2 New Messages" class="badge bg-green">2</span>
                            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                              <i class="fa fa-comments"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button -->
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-bodyy">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messagess inner-content-divv" id="chat-msg-content">
                            
                            <div class="direct-chat-msg">
                              <div class="direct-chat-text" style="width:400px; height: 50px">
                                Selecciona un usuario para chatear
                              </div>
                            </div>

                        </div>
                        <!--/.direct-chat-messages-->

                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <!-- form action="#" method="post" -->
                            <div class="input-group">
                              <input type="text" name="message" id="message" placeholder="Escribe un mensaje ..." class="form-control">
                              <span class="input-group-btn">
                                    <button type="button" class="btn bg-green btn-flat" id="send-chat">Enviar</button>
                                  </span>
                            </div>
                        <!-- /form -->
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!--/.direct-chat -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('page_js')
    
    <script src="{{ secure_asset('js/pages/chat.js') }}"></script>

@endsection