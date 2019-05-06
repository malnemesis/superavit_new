<section class="service" id="SERVICIOS">
	<div class="container">
		<h3 class="text-center slideanim">SERVICIOS</h3>
		<p class="text-center slideanim">Ponemos a disposición nuestros servicios empresariales.</p>
		<div id="myCarousel1" class="carousel slideanim" data-ride="carousel" data-interval="10000" data-pause="hover">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel1" data-slide-to="1"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="col-lg-6 col-md-6 serv-w3ls1">
					<button id="btnc" data-toggle="modal" data-target="#contabilidad"><div class="col-xs-12 serv-agile1">
						<h4><i class=""></i> CONTABILIDAD</h4>
							<p class="serv-p1">Le ofrecemos una solución contable integral. Elaboramos sus balances, declaramos sus impuestos y cumplimos con todas sus obligaciones societarias a la vez evaluamos y buscamos optimizar todos sus procesos administrativos y comerciales.</p>
						</div></button>
						<div id="c" class="col-xs-12 serv-agile1">
						<a data-toggle="modal" data-target="#contabilidad" class="slideanim" href="" style="text-decoration:none"><h4><i class="fa fa-edit fa-3x"></i> CONTABILIDAD</h4></a>
							<p class="serv-p1">Le ofrecemos una solución contable integral. Elaboramos sus balances, declaramos sus impuestos y cumplimos con todas sus obligaciones societarias a la vez evaluamos y buscamos optimizar todos sus procesos administrativos y comerciales.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-6 col-md-6 serv-w3ls1">
					<button id="btnt" data-toggle="modal" data-target="#tributacion"><div class="col-xs-12 serv-agile1">
						<h4><i class="fa fa-bank fa-3x"></i> TRIBUTACION</h4>
							<p class="serv-p1">No pierda su dinero con declaraciones incorrectas. Nos encargamos de todas las declaraciones, anexos y obligaciones con los organismos de control, instrumentando el uso de todos los beneficios aplicables.</p>
						</div></button>
						<div id="t" class="col-xs-12 serv-agile1">
							<a data-toggle="modal" data-target="#tributacion" class="slideanim" href="" style="text-decoration:none"><h4><i class="fa fa-bank fa-3x"></i> TRIBUTACIÓN</h4></a>
							<p class="serv-p1">No pierda su dinero con declaraciones incorrectas. Nos encargamos de todas las declaraciones, anexos y obligaciones con los organismos de control, instrumentando el uso de todos los beneficios aplicables.</p>
						</div>
						
					</div>

				</div>
				<div class="item">
					<div class="col-lg-6 col-md-6 serv-w3ls1">
					<button id="btnf" data-toggle="modal" data-target="#finanzas"><div class="col-xs-12 serv-agile1">
						<h4><i class="fa fa-line-chart fa-3x"></i> SERVICIOS FINANCIEROS</h4>
							<p class="serv-p1">Nuestras soluciones le permitirán hacer una evaluación integral de la gestión de su negocio, a través del análisis de cifras, indicadores y comparaciones con la industria.</p>
						</div></button>
						<div id="f" class="col-xs-12 serv-agile1">
                            <a data-toggle="modal" data-target="#finanzas" class="slideanim" href="" style="text-decoration:none"><h4><i class="fa fa-line-chart fa-3x"></i> SERVICIOS FINANCIEROS</h4></a>
							<p class="serv-p1">Nuestras soluciones le permitirán hacer una evaluación integral de la gestión de su negocio, a través del análisis de cifras, indicadores y comparaciones con la industria.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-6 col-md-6 serv-w3ls1">
					<button id="btna" data-toggle="modal" data-target="#auditoria"><div class="col-xs-12 serv-agile1">
						<h4><i class="fa fa-line-chart fa-3x"></i> AUDITORIA</h4>
							<p class="serv-p1">Nuestros servicios tienen un alto valor agregado y se orientan en satisfacer las expectativas y necesidades de nuestros clientes y los usuarios de sus estados financieros.</p>
						</div></button>
						<div id="a" class="col-xs-12 serv-agile1">
							<a data-toggle="modal" data-target="#auditoria" class="slideanim" href="" style="text-decoration:none"><h4><i class="fa fa-briefcase fa-3x"></i>  AUDITORIA</h4></a>
							<p class="serv-p1">Nuestros servicios tienen un alto valor agregado y se orientan en satisfacer las expectativas y necesidades de nuestros clientes y los usuarios de sus estados financieros.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "modal_contabilidad.php";?>

<?php include "modal_auditoria.php";?>

<?php include "modal_tributacion.php";?>

<?php include "modal_finanzas.php";?>
