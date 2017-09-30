$(function(){

	// Lista de departamento
	$.post( 'Departamentos.php' ).done( function(respuesta)
	{
		$( '#Departamentos' ).html( respuesta );
	});

	// lista de municipios	
	$('#Departamentos').change(function()
	{
		var el_Departamento = $(this).val();
		
		// Lista de municipios
		$.post( 'Municipio.php', { Departamentos: el_Departamento} ).done( function( respuesta )
		{
			$( '#Municipio' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	//$( '#Municipio' ).change( function()
	//{
		//var Municipio = $(this).children('option:selected').html();
		//alert( 'Municipio de ' + Municipio );
	//});

})

