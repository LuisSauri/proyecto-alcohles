<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<table class="table table-hover table table-bordered table-responsive border">
    <thead class="table table-primary">
        <tr>
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