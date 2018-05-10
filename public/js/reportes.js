function salonesDeMaestro() {
	var maestro = $('#maestro').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/maestro/" + maestro, function(data) {
		if (data.data == 'error')
			aler("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Sus Cursos");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Clave</h3></td>";
			html += "	<td><h3>Grupo</h3></td>";
			html += "	<td>Horario</h3></td>";
			html += "	<td><h3>Salon</h3></td>";
			html += "	<td><h3>Ingles</h3></td>";
			html += "	<td><h3>Honors</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].clave + "</td>";
				html += "	<td>" + resp[cont].numGrupo + "</td>";
				html += "	<td>" + resp[cont].horario + "</td>";
				html += "	<td>" + resp[cont].salon + "</td>";
				html += "	<td>" + resp[cont].ingles + "</td>";
				html += "	<td>" + resp[cont].honors + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	          $('#moBody').html(html);
			$('#myModal').modal();
		}
	});
}

function gruposDeMateria() {
	var materia = $('#materia').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/materia", {"materia": materia}, function(data) {
		if (data.data == 'error')
			aler("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Materias");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Clave</h3></td>";
			html += "	<td><h3>Grupo</h3></td>";
			html += "	<td>Horario</h3></td>";
			html += "	<td><h3>Salon</h3></td>";
			html += "	<td><h3>Ingles</h3></td>";
			html += "	<td><h3>Honors</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].clave + "</td>";
				html += "	<td>" + resp[cont].numGrupo + "</td>";
				html += "	<td>" + resp[cont].horario + "</td>";
				html += "	<td>" + resp[cont].salon + "</td>";
				html += "	<td>" + resp[cont].ingles + "</td>";
				html += "	<td>" + resp[cont].honors + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	          $('#moBody').html(html);
			$('#myModal').modal();
		}
	});
}

function salonEnHorario() {
	var horario = $('#horario').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/horario", {"horario": horario}, function(data) {
		if (data.data == 'error')
			aler("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Salones");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Clave</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].clave + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	          $('#moBody').html(html);
			$('#myModal').modal();
		}
	});
}

function profesorDisponibleEnHorario() {
	var disponible = $('#disponible').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/disponible", {"disponible": disponible}, function(data) {
		if (data.data == 'error')
			alert("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Maestros disponibles");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Maestro</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].profesor + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	         $('#moBody').html(html);
			$('#myModal').modal();
		}
	});	
}
function profesorNoDisponibleEnHorario() {
	var ocupado = $('#ocupado').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/ocupado", {"ocupado": ocupado}, function(data) {
		if (data.data == 'error')
			aler("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Maestros Ocupados");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Maestro</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].profesor + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	         $('#moBody').html(html);
			$('#myModal').modal();
		}
	});
}

function claseEnHorario() {
	var salon = $('#salon').val();

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.get("/reportes/clases", {"salon":salon}, function(data) {
		if (data.data == 'error')
			aler("Hay un error, intente de nuevo");
		else {
			$('#moTitulo').html("Horario");
			var resp = JSON.parse(data.data);
			var cont = 0;
			html = "";
			html += "<table>";
			html += "<tr>";
			html += "	<td><h3>Clases</h3></td>";
			html += "</tr>";

			while (resp[cont] != null){
				html += "<tr>";
				html += "	<td>" + resp[cont].horario + "</td>";
		        html += "</tr>";
		        cont++;
	  		}
	  		html += "</table>"
	         $('#moBody').html(html);
			$('#myModal').modal();
		}
	});
}