function subirMaestro(){//Para dar de alta maestro en la base de datos, mediante ajax

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
		url: '/maestros/guardar',
	    type: 'POST',
	    data: $( "#myForm" ).serialize(),
	    contentType: "application/x-www-form-urlencoded",
	    success: function(data) {
	    	if (data.estatus == "exito")
	    	{
	    		alert('Se creó con exito');

	    		location.reload();//Por mientras
	    		//Buscar como evitar que se desaparezca cuando se crea salon
	   //  		html = "";
	   //  		html += "<tr id='maestro-" + data.data.id + "' >";
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.nombre + "</td>";
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.nomina + "</td>";
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.telefono + "</td>";
	   //  		html += "	<td>";
	   //  		html += "		<button class='btn' id='editar-{{$maestro->id}}' onclick='editarMaestro('{{$maestro->id}}')'>Editar</button>";
	   //  		html += "		<button class='btn' id='guardar-{{$maestro->id}}' style='display: none' onclick='guardarMaestro('{{$maestro->id}}')'>Guardar</button>";
	   //  		html += "	</td>";
	   //  		html += "	<td><button class='btn' onclick='eliminarMaestro('{{$maestro->id}}')'>Eliminar</button></td>";
				// html += "</tr>";

				// $('#newRow').append(html).hide().fadeIn();
	    	}
	    	else
	    		alert('Ya existe un maestro con la nomina de ' + data.nom);
	    }
	});
};

function eliminarMaestro(id){//Para eliminar maestro mediante ajax
	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
		url: '/maestros/eliminar/' + id,
	    type: 'DELETE',
	    contentType: "application/x-www-form-urlencoded",
	    success: function(data) {
	    	console.log(data);
	        $("table#table tr#maestro-"+id).fadeOut();
	    }
	});
};

//Funciones para editar maestros en tiempo real.
function editarMaestro(id)
{
  $('#editar-' + id).hide();

  $('td.' + id).each(function(){
    var content = $(this).html();
    $(this).html('<textarea id="area' + id + '">' + content + '</textarea>');
  });  
  
  $('#guardar-' + id).show();
}

function guardarMaestro(id)
{
	$('#guardar-' + id).hide();

	var contenido = new Array('3');
	var cont = 0;

	$('textarea#area' + id).each(function() {
		var content = $(this).val();
		contenido[cont] = content;
		$(this).html(content);
	   	$(this).contents().unwrap(); 
	   	cont++;
	}); 

	var data = {
		nombre: contenido[0],
		nomina: contenido[1],
		telefono: contenido[2],
	};

	//mediante este ajax guardamos los cambios hechos
	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
	  	type: 'PUT',
		url: '/maestros/actualizar/' + id,
		data: data,
		dataType: 'JSON',
		success: function (data) {
			if (!data.respuesta && data.nom != contenido[1]){
				alert('Ya existe un maestro con la nomina de ' + data.nom);	
				editarMaestro(id);
			}
			else
				alert("Cambio exitoso!");
		},
		error: function (data) {
		  	console.log('Error:', data);
		}
	}); 
	$('#editar-' + id).show(); 
};
