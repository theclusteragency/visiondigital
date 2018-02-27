@extends('layouts.blank')

@section('content')

<body class="provitec-bg">

    <video playsinline autoplay muted loop id="bgvid">
        <source src="videos/people-working.webm" type="video/webm">
        <source src="videos/people-working.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
        <section class="content provitec-home">
            <div class="row">
                <div class="col-sm-3 col-md-2"></div>
                <div class=" col-sm-6 col-md-8">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <div class="box shadow box-default selector">
                            <img class="card-img-top img-responsive" src="images/provitec/vision.png" alt="Visión Digital">
                            <div class="box-body center">              
                              <a href="/log" class="btn btn-primary">Acceder</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
