@extends('layouts.template')

@section('title', 'Control de Alcoholes')
    
@section('header')

@endsection

@section('main')

@section ('content')

<div class="container">
<!--Formulario-->
  <div class="row">
    <div class="col-6">

      <form action="{{route('form.save')}}" method="POST">
        @csrf
        @method('POST')
        <div class="row">
          <!--Formulario pt1-->
   
           <div class="col-6">
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Fecha REV</label>
               <input type="date" class="form-control" name="fecha_rev"required placeholder="Example input placeholder">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Municipio</label>
               <select class="form-select" id="municipio" name="idMunicipio"required aria-label="Default select example">
                 <option selected disabled>Seleccionar Municipio</option>
   
                 @foreach($municipios as $municipio)
                   <option value="{{$municipio->idMunicipio}}">{{$municipio->nombre}}</option>
                 @endforeach
               </select>
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Población</label>
               <select class="form-select" id="poblacion" name="idLocalidad"required aria-label="Default select example">
                <option value="">Seleccione poblacion</option> 
               </select>
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Colonia</label>
               <input type="text" class="form-control" name="colonia"required placeholder="Colonia">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Calle</label>
               <input type="text" class="form-control" name="calle"required placeholder="Calle">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Cruzamiento</label>
               <input type="text" class="form-control" name="cruzamiento"required placeholder="Cruzamiento">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Clave</label>
               <input type="integer" class="form-control" name="clave"required placeholder="Clave">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Nombre del Local</label>
               <input type="text" class="form-control" name="nombreLocal"required placeholder="Nombre del Local">
             </div>
   
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Giro</label>
               <select class="form-select" name="idGiro"required aria-label="Default select example">
                 <option selected disabled>Seleccionar Giro</option>
   
                 @foreach($giros as $giro)
                    <option value="{{$giro->idGiro}}">{{$giro->giro}}</option>
                 @endforeach
               </select>               
             </div>
           </div>
   
   
          <!--Formulario pt2-->
   
           <div class="col-6">
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Fecha Mov</label>
               <input type="date" class="form-control" name="fecha_mov" required placeholder="Example input placeholder">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Nombre del Contribuyente</label>
               <input type="text" class="form-control" name="nombreContribuyente" required placeholder="Nombre">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">RFC</label>
               <input type="text" class="form-control" name="rfc" required placeholder="RFC">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Licencia</label>
               <input type="text" class="form-control" name="licencia" required placeholder="Licencia">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Horario</label>
               <input type="text" class="form-control" name="horario" required placeholder="Horario">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">FOL. ANT.</label>
               <input type="integer" class="form-control" name="fol_ant" required placeholder="Folio Anterior">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput" class="form-label">Arrendamientos</label>
               <input type="text" class="form-control" name="arrendamiento" required placeholder="Arrendamientos">
             </div>
             <div class="mb-3">
               <label for="formGroupExampleInput2" class="form-label">Teléfono</label>
               <input type="integer" class="form-control" name="telefono" placeholder="Teléfono">
             </div>
           </div>
         </div>
   
         <div class="text-center">
           <button type="button" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i> Regresar</button>
           <button type="submit" class="btn btn-success"><i class="bi bi-database-fill-add"></i> Agregar</button>  
         </div>
   
      </form>

    </div>


    <div class="col-6">
      <div>
        
        
          <div class="input-group mb-3" class="search-input">
              <input type="text" id="search-input" name="q" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append"></div>         
          
              <button title="Buscar" type="submit" onclick="searchAddress()" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
          </div>
         

      </div>

      <div class="container" id="map" style="height: 400px; width: 110%;"></div>
      
    </div>

</div>

</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>

<!--Mapa-->
<script>
  let map;

  function initializeMap() {
    map = L.map('map').setView([19.8454, -90.5237], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
  }

  function searchAddress() {
    const searchTerm = document.querySelector('#search-input').value;

    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(searchTerm)}`)
      .then(response => response.json())
      .then(data => {
        if (data.length > 0) {
          const latitud = data[0].lat;
          const longitud = data[0].lon;

          // Limpia los marcadores existentes
          map.eachLayer(layer => {
            if (layer instanceof L.Marker) {
              map.removeLayer(layer);
            }
          });

          // Agrega un nuevo marcador al mapa
          const marker = L.marker([latitud, longitud]).addTo(map);
          marker.bindPopup(searchTerm).openPopup();

          // Centra el mapa en la nueva ubicación
          map.setView([latitud, longitud], 13);
        } else {
          console.error('No se pudo geocodificar la dirección:', searchTerm);
        }
      })
      .catch(error => console.error('Error en la solicitud:', error));
  }

  initializeMap();

  
</script>




@endsection

@section('footer')

@endsection