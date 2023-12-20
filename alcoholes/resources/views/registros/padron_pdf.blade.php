<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Reporte de Licencias de Venta de Alcohol | PFD</title>

    <link rel="stylesheet" href="{{public_path('/css/pdfStyles.css')}}">


         <!--Bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{public_path('/img/seafi_logo2.png')}}" alt=""  style="max-width: 100px; margin-right: 20px;">
        </div>

        <div class="enbezado">
            <h2 class="text-center">Padron de Licencias de Venta de Alcohol</h2>
            <h4 class="text-center">Sevicio de Administración Fiscal del Estado de Campeche</h4>
        </div>
    </header>

    <main>
        <div class="text-center" style="margin-top: 2%;">
            <div  class="">
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
                    @foreach ($padronesCompleto as $padron)
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
              </div>
        </div>
    </main>
</body>
</html>