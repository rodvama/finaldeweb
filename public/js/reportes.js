function salonesDeMaestro() {
	var maestro = $('#maestro').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/maestro/" + maestro, function(data) {
			console.log(data.data)
	});
}

function gruposDeMateria() {
	var materia = $('#materia').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/materia/" + materia, function(data) {
			console.log(data.data)
	});
}

function salonEnHorario() {
	var horario = $('#horario').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/horario", {"horario": horario}, function(data) {
			console.log(data.data)
	});
}

function profesorDisponibleEnHorario() {
	var disponible = $('#disponible').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/disponible", {"disponible": disponible}, function(data) {
			console.log(data.data)
	});	
}

function profesorNoDisponibleEnHorario() {
	var ocupado = $('#ocupado').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/ocupado", {"ocupado": ocupado}, function(data) {
			console.log(data.data)
	});
}

function claseEnHorario() {
	var clases = $('#clases').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/clases", {"clases": clases}, function(data) {
			console.log(data.data)
	});
}