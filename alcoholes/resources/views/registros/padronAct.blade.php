@extends('layouts.template')

@section('title', 'Acutalizar Información')

@section('header')

@endsection

@section('main')

@section('content')
  <div class="container">
    <div class="row">
      <form action="{{url('/registros/padron/'.$padron->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
       <!--Formulario pt1-->
  
          <div class="col-6">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Fecha REV</label>
              <input type="date" class="form-control" value="{{$padron->fecha_rev}}" name="fecha_rev"required placeholder="Example input placeholder">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Municipio</label>
              <select class="form-select" id="municipio" name="idMunicipio"required aria-label="Default select example">
                <option selected disabled>Seleccionar Municipio</option>
  
                @foreach($municipios as $municipio)
                <option value="{{$municipio->idMunicipio}}" @if($padron->idMunicipio == $municipio->idMunicipio) selected @endif>
                  {{$municipio->nombre}}
                </option>
                @endforeach
              </select>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Población</label>
              <select class="form-select" id="poblacion" name="idLocalidad"required aria-label="Default select example">
                <option value="">Seleccione población</option>
                @foreach($poblaciones as $poblacion)
                    <option value="{{$poblacion->idLocalidad}}" @if($padron->idLocalidad == $poblacion->idLocalidad) selected @endif>
                        {{$poblacion->nombrePoblacion}}
                    </option>
                @endforeach
              </select>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Colonia</label>
              <input type="text" class="form-control" value="{{$padron->colonia}}" name="colonia"required placeholder="Colonia">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Calle</label>
              <input type="text" class="form-control" value="{{$padron->calle}}" name="calle"required placeholder="Calle">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Cruzamiento</label>
              <input type="text" class="form-control" value="{{$padron->cruzamiento}}" name="cruzamiento"required placeholder="Cruzamiento">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Clave</label>
              <input type="integer" class="form-control" value="{{$padron->clave}}" name="clave"required placeholder="Clave">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Nombre del Local</label>
              <input type="text" class="form-control" value="{{$padron->nombreLocal}}" name="nombreLocal"required placeholder="Nombre del Local">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Giro</label>
              <select class="form-select" name="idGiro"required aria-label="Default select example">
                <option selected disabled>Seleccionar Giro</option>
  
                @foreach($giros as $giro)
                <option value="{{$giro->idGiro}}" @if($padron->idGiro == $giro->idGiro) selected @endif>
                  {{$giro->giro}}
              </option>
                @endforeach
              </select>               
            </div>
          </div>
  
  
        <!--Formulario pt2-->
  
          <div class="col-6">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Fecha Mov</label>
              <input type="date" class="form-control" value="{{$padron->fecha_mov}}" name="fecha_mov" required placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Nombre del Contribuyente</label>
              <input type="text" class="form-control" value="{{$padron->nombreContribuyente}}" name="nombreContribuyente" required placeholder="Nombre">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">RFC</label>
              <input type="text" class="form-control" value="{{$padron->rfc}}" name="rfc" required placeholder="RFC">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Licencia</label>
              <input type="text" class="form-control" value="{{$padron->licencia}}" name="licencia" required placeholder="Licencia">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Horario</label>
              <input type="text" class="form-control" value="{{$padron->horario}}" name="horario" required placeholder="Horario">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">FOL. ANT.</label>
              <input type="integer" class="form-control" value="{{$padron->fol_ant}}" name="fol_ant" required placeholder="Folio Anterior">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Arrendamientos</label>
              <input type="text" class="form-control" value="{{$padron->arrendamiento}}" name="arrendamiento" required placeholder="Arrendamientos">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Teléfono</label>
              <input type="integer" class="form-control" value="{{$padron->telefono}}" name="telefono" placeholder="Teléfono">
            </div>
          </div>
        </div>
  
        <div>
            <div class="text-center container">
              <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i> Regresar</button>
              <button type="submit" class="btn btn-success"><i class="bi bi-database-fill-add"></i> Agregar</button>  
            </div>
        </div>
  
    </form>

    </div>
  </div>  
@endsection

@endsection

@section('footer')

@endsection