@extends('layouts.template')

@section('title', 'Control de Alcoholes')
    
@section('header')

@endsection

@section('main')

  @section('content')

    <div class="tabla ">
        <div >
            <div class="container" style="text-align: center">
                
                <!--Busqeueda-->

                <form action="{{ url('/registros/padron') }}" method="GET">
                    <div class="input-group mb-3" class="search">
                        <input type="text" name="search" id="seachInput" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        </div>
                  <div>
                    
                    <button title="Buscar" type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                    <a title="Generar reporte PDF" href="{{url('/registros/padron_pdf')}}" class="btn btn-primary"><i class="bi bi-file-earmark-pdf"></i></i></a>
                    <a title="Generar reporte Excel" href="{{url('/registros/padron_excel')}}" class="btn btn-primary"><i class="bi bi-table"></i></i></i></a>


                </form>
            </div>
          </div>

        </div>       

        <div style="overflow-x:auto;" class="container-fluid">
          <table class="table table-hover table table-bordered table-responsive border">
            <thead class="table table-primary">
              <tr>
                <th cope="col" class="text-center">Acciones</th>
                <th scope="col" class="text-center">Fecha Rev</th>
                <th scope="col" class="text-center">Fecha Mov</th>
                <th scope="col" class="text-center">Municipio</th>
                <th scope="col" class="text-center">Población</th>
                <th scope="col" class="text-center">Colonia</th>
                <th scope="col" class="text-center">Calle</th>
                <th scope="col" class="text-center">Cruzamiento</th>
                <th scope="col" class="text-center">Clave</th>
                <th scope="col" class="text-center">Nombre del Local</th>
                <th scope="col" class="text-center">Giro</th>
                <th scope="col" class="text-center">Nombre del Contribuyente</th>
                <th scope="col" class="text-center">RFC</th>
                <th scope="col" class="text-center">Licencia</th>
                <th scope="col" class="text-center">Horario</th>
                <th scope="col" class="text-center">Fol. Anterior</th>
                <th scope="col" class="text-center">Arrendamientos</th>
                <th scope="col" class="text-center">Teléfono</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($padrones as $padron)
              <tr class="padron">
                <td class="btn-group">
                    <a title="Actualizar" href="{{url('/registros/padron/'.$padron->id. '/padronAct')}}" class="btn btn small btn-warning"><i class="bi bi-pen-fill"></i></a>     
                    
                    <form action="{{url('/registros/form/'.$padron->id)}}" method="POST"> 
                      <button title="Eliminar" class="btn btn small btn-danger" onclick="return confirm('{{ __('¿Desea eliminar este registro?') }}')">
                          {{ __() }}<i class="bi bi-trash-fill"></i></button>
                    @method('DELETE')
                    @csrf
                    </form> 
                </td>
                            
                <td>{{$padron->fecha_rev}}</td>
                <td>{{$padron->fecha_mov}}</td>
                <td>{{$padron->municipio->nombre}}</td>
                <td>{{$padron->poblacion->nombrePoblacion}}</td>
                <td>{{$padron->colonia}}</td>
                <td>{{$padron->calle}}</td>
                <td>{{$padron->cruzamiento}}</td>
                <td>{{$padron->clave}}</td>
                <td>{{$padron->nombreLocal}}</td>
                <td>{{$padron->giro->giro}}</td>
                <td>{{$padron->nombreContribuyente}}</td>
                <td>{{$padron->rfc}}</td>
                <td>{{$padron->licencia}}</td>
                <td>{{$padron->horario}}</td>
                <td>{{$padron->fol_ant}}</td>
                <td>{{$padron->arrendamiento}}</td>
                <td>{{$padron->telefono}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>

    </div>
  @endsection

  

@endsection

@section('footer')

@endsection