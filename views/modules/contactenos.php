<div class="row">
<div class="col-lg-9 col-md-8">
<section class="subs slideanim" id="CONTACTENOS">

	<div class="container ">
		<div class="col-lg-4 col-md-4">
			<h3>CONTACTO</h3>
			<p>Le interesa saber más sobre nuestros productos y servicios.Dejénos sus datos y nos comunicaremos con usted.</p>
			<p>Tambien puede agendar su cita directamente sin costo, ni compromiso.</p>
			<br>
			
			<button type="button" id="btnagendar" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#agendar">Agendar</button>
		</div>

				<div class="col-lg-1"></div>

		<div class="col-lg-5 col-md-4" >
			<div class="contactenos">

				<form action="models/contactenos.php" method="POST" class="form-contacto" name="form-contacto">
						<input class="form-control" id="nombres" name="nombres" placeholder="Nombre y Apellido" type="text" title="Por favor, introduzca su Nombre y Apellido" required>
					<br>
						<input class="form-control" id="correo" name="correo" placeholder="email@dominio.com" type="email" title="Por favor, introduzca una dirección de correo electrónico" required>
					<br>
						<input class="form-control" id="tel" name="tel" placeholder="Celular" type="number" title="Si desea que le llamemos, por favor introduzca su número celular" required>
					<br>
					<input class="btn btn-defaults" type="reset" value="LIMPIAR">
					<input class="btn btn-primary btn-lg" type="submit" value="ENVIAR">

					<div class="cargando"><img src="views/img/GIFS/cargando.gif"></div>
					<div class="resultado"></div>

				</form>
			</div>
		</div>
			
	</div>
	
</section>
</div>

<div class="col-lg-3 col-md-4">
<div class="map slideanim">
    <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7942375848575!2d-78.49145458583631!3d-0.1990739354610592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a6dab0dfd67%3A0xb878ed2a361dc98c!2sEDIFICIO+ROYAL+PACIFIC!5e0!3m2!1ses!2sec!4v1510778072816" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>

</div>


<?php include "modal_agendar.php";?>






