function subirSalon(){//Para dar de alta maestro en la base de datos, mediante ajax

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
		url: '/salones/guardar',
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
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.salon + "</td>";
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.capacida + "</td>";
	   //  		html += "	<td class='" + data.data.id + "'>" + data.data.admin + "</td>";
	   //  		html += "	<td>";
	   //  		html += "		<button class='btn' id='editar-{{$salones->id}}' onclick='editarSalon('{{$salones->id}}')'>Editar</button>";
	   //  		html += "		<button class='btn' id='guardar-{{$salones->id}}' style='display: none' onclick='guardarSalon('{{$salones->id}}')'>Guardar</button>";
	   //  		html += "	</td>";
	   //  		html += "	<td><button class='btn' onclick='eliminarSalon('{{$salones->id}}')'>Eliminar</button></td>";
				// html += "</tr>";

				// $('#newRow').append(html);
	    	}
	    	else
	    		alert('Ya existe un salon con el numero de ' + data.salon);
	    },
	});
};

function eliminarSalon(id){//Elimniar salon mediante ajax

	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
		url: '/salones/eliminar/' + id,
	    type: 'DELETE',
	    contentType: "application/x-www-form-urlencoded",
	    success: function(data) {
	    	console.log(data);
	        $("table#table tr#salon-"+id).fadeOut();
	    },
	});
};

//Funciones para editar maestros en tiempo real.
function editarSalon(id)
{
  $('#editar-' + id).hide();

  $('td.' + id).each(function(){
    var content = $(this).html();
    $(this).html('<textarea id="area' + id + '">' + content + '</textarea>');
  });  
  
  $('#guardar-' + id).show();
}

function guardarSalon(id)
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
		numSalon: contenido[0],
		capacidad: contenido[1],
		admin: contenido[2],
	};

	//mediante este ajax guardamos los cambios hechos
	$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

	$.ajax({
	  	type: 'PUT',
		url: '/salones/actualizar/' + id,
		data: data,
		dataType: 'JSON',
		success: function (data) {
			if (!data.respuesta && data.salon != contenido[0]) {
				alert('Ya existe un salon con el numero de ' + data.salon);	
				editarSalon(id);
			}
			else
				alert("Cambio exitoso!");
		},
		error: function (data) {
		  	console.log('Error:', data);
		}
	}); 
	$('#editar-' + id).show(); 
}