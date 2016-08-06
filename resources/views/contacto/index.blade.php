@extends('layout.main')
@section('title', 'Inicio')
@section('content')
<main>
	<div class="container">
	
		<div class="row">
			<div class="col s12 m6 form-contacto">
				<h3 class="text-teal">Nuestras Oficinas</h3>
				<ul class="contacto">
					<li><i class="material-icons icons-contacto">phone</i> 999-948-43-32</li>
					<li><i class="material-icons icons-contacto">query_builder</i> Mon - Sat 9:00am - 6:00 pm</li>
					<li><i class="material-icons icons-contacto">mail</i> contacto@grupomeda.mx</li>
					<li><i class="material-icons icons-contacto">business</i> C.7 #344 por 10 y 8 Colonia Díaz Ordaz</li>
				</ul>
			</div>


			<div class="col s12 m6 form-contacto">
			<h3 class="text-teal">Contacto</h3>
				<div class="row">
					<div class="input-field col s6">
						<label class="active">Nombre</label>
						<input name="nombre" type="text" class="validate">
					</div>
					<div class="input-field col s6">
						<label class="active">Apellidos</label>
						<input name="apellidos" type="text" class="validate">
					</div>
				</div>
				<div class="input-field col s12">
					<label class="active">Empresa</label>
					<input name="empresa" type="text" class="validate">
				</div>
				<div class="input-field col s12">
					<label class="active">Correo Electrónico</label>
					<input name="email" type="text" class="validate">
				</div>
				<div class="input-field col s12">
					<select>
						<option value="">Servicios</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
					<label>¿Qué informacíon le gustaría recibir?</label>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>

		<div class="row">
			<div id="map_canvas"></div>
		</div>
	</div>
</main>
@section('scripts')
<script>
	$(document).ready(function() {
		$('select').material_select();
	});
</script>

<script>
   // Standard google maps function
   function initialize() {
   	var myLatlng = new google.maps.LatLng(21.004610, -89.590288);
   	var myOptions = {
   		zoom: 20,
   		center: myLatlng,
   		mapTypeId: google.maps.MapTypeId.ROADMAP
   	}
   	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
   	TestMarker();
   }

    // Function for adding a marker to the page.
    function addMarker(location) {
    	marker = new google.maps.Marker({
    		position: location,
    		map: map
    	});
    }

    // Testing the addMarker function
    function TestMarker() {
    	GrupoMedra = new google.maps.LatLng(21.004610, -89.590288);
    	addMarker(GrupoMedra);
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeJfivNf6-xtuMAEjzloFAWnvFpM3FJMk&callback=initialize"
async defer>
</script>
@endsection
@endsection