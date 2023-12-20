@extends('layouts.template')

@section('title', 'Control de Alcoholes')
    
@section('header')

@endsection

@section('main')

@section('image_seafi')

<div class="container">
    <div style="text-align: center" class="">
        <img style="width: 35%;" src="/img/seafi_logo_1.svg">
    </div>

</div>

@endsection


@section('content')
<div class="cards container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulario</h5>
              <p class="card-text">Añada una nueva entrada.</p>
              <a href="/registros/form" class="btn btn-primary"><i class="bi bi-building-fill-add"></i> Registar</a>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registros</h5>
              <p class="card-text">Consulte la base de datos.</p>
              <a href="/registros/padron" class="btn btn-primary"><i class="bi bi-list-columns-reverse"></i> Consultar</a>
            </div>
          </div>
        </div>
      </div>
      
</div>

@endsection

@section('footer')

@endsection