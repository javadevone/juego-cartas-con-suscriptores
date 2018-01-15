document.addEventListener('DOMContentLoaded', function(){
	iniciarJuego();
}, false)

function ocultarVistas() {
	$(".vista-juego").hide();
}

function numeroAleatorio(minimo, maximo) {
	return Math.floor((Math.random() * maximo) + minimo);
}

//todo incluir esloganes aleatorios

function generarCarga() {
	var iconos = [
		'<i class="fab fa-accessible-icon fa-spin fa-10x"></i>',
		'<i class="far fa-lemon fa-spin fa-10x"></i>',
		'<i class="fas fa-coffee fa-spin fa-10x"></i>',
		'<i class="fab fa-gitkraken fa-spin fa-10x"></i>',
		'<i class="fab fa-grav fa-spin fa-10x"></i>',
		'<i class="far fa-money-bill-alt fa-spin fa-10x"></i>',
		'<i class="fas fa-code fa-spin fa-10x"></i>'
	];	
	var iconoElegido = numeroAleatorio(0, iconos.length);
	
	var textoCarga = [
		'Exprimiendo la comida',
		'Incluyendo BR +18',
		'Creando H7 for history',
		'Tomando bebidas energéticas',
		'Tomando el 5º café del día'
	];
	var textoElegido = numeroAleatorio(0, textoCarga.length);
	
	$("#carga-spinner").html(iconos[iconoElegido]);
	$("#carga-texto").html("<h2>" + textoCarga[textoElegido] + "</h2>");
}

function cambiarVista(vista) {
	ocultarVistas();
	generarCarga();
	$("#cargando").show();
	setTimeout(function(){console.log("cargando")}, 1000);
	
	$(".vista-juego").each(function(i){
		if(vista == $(this).attr("id")) {
			ocultarVistas();
			$(this).show();
			return;
		}
	});
}

function registro() {
	var peticion;
	
	$("#form-registro").submit(function(event){
		event.preventDefault();
		
		if(peticion) {
			peticion.abort();
		}
		
		var $form = $(this);
		
		var $inputs = $form.find("input");
		
		var datosSerializados = $form.serialize();
		
		$inputs.prop("disabled", true);
		
		peticion = $.ajax({
			url: "/juego-cartas/app/registro.php",
			type: "post",
			data: datosSerializados
		});
		
		peticion.done(function(response, textStatus, jqXHR){
			console.log(response);
			console.log(textStatus);
			console.log(jqXHR);
			console.log("yes bitch");
		});
		
		peticion.fail(function(jqXHR, textStatus, error){
			console.error("Ha habido un problema: " + textStatus, error);
		});
		
		peticion.always(function(){
			$inputs.prop("disabled", false);
		});
	});
}

function iniciarJuego() {
	$("#boton-registro").click(function(){
		cambiarVista("registro");
	});
	$("#boton-login").click(function(){
		cambiarVista("login");
	});
	$("#menu-cartas").click(function(){
		cambiarVista("vista-menu-cartas");
	});
	$(".boton-volver-menu").click(function(){
		cambiarVista("menu-principal");
	});
	$("#enviar-registro").click(function(){
		registro();
	});
	cambiarVista("bienvenida");
}