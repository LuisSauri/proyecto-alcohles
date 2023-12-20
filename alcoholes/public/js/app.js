
//Select anidado
document.addEventListener('DOMContentLoaded', function () {
    var selectorMunicipio = document.getElementById('municipio');
    var poblacionSelector = document.getElementById('poblacion');

    selectorMunicipio.addEventListener('change', loadPoblacion);

    function loadPoblacion() {
        var idMunicipio = selectorMunicipio.value;

        if (idMunicipio) {
            fetch('/registros/form/municipio/' + idMunicipio +'/poblacion')
                .then(function(response) {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Error en la solicitud');
                    }
                })
                .then(function(data) {
                    // Limpiamos las opciones anteriores
                    while (poblacionSelector.firstChild) {
                        poblacionSelector.removeChild(poblacionSelector.firstChild);
                    }

                    // Agregamos la opción predeterminada
                    var defaultOption = document.createElement('option');
                    defaultOption.value = '';
                    defaultOption.text = 'Seleccione la población';
                    poblacionSelector.appendChild(defaultOption);

                    data.forEach(function(poblacion) {
                        var option = document.createElement('option');
                        option.value = poblacion.idLocalidad;
                        option.text = poblacion.nombrePoblacion;
                        poblacionSelector.appendChild(option);
                    });
                })
                .catch(function(error) {
                    console.error('Error:', error);
                    // Limpiar el elemento select en caso de error
                    poblacionSelector.innerHTML = '';
                });
        } else {
            // Limpiar el elemento select si no se ha seleccionado un municipio
            poblacionSelector.innerHTML = '';
        }
    }
});





//Mapa
/*document.addEventListener('DOMContentLoaded', function () {
    // Crea el mapa
    let map = L.map('map').setView([19.8454, -90.5237], 13);
  
    // Agrega una capa base de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
  });*/
  






/*function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 19.8454, lng: -90.5237 },
        zoom: 10
    });

    locations.forEach(location => {
        // Usa location.direccion para geocodificar la dirección
        var address = location.direccion;

        // Realiza la solicitud a la API de Google Maps para geocodificar la dirección
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({ address: address }, function (results, status) {
            if (status === 'OK') {
                var latLng = results[0].geometry.location;
                new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title: location.titulo
                });
            }
        });
    });
}*/
