

$('#tipoPersona').on('change', function() {
	var valorTipoPersona = $(this).find(":selected").val();
	var i = valorTipoPersona;
	if (i==1) {
		
		$( "#entidad" ).addClass('mostrar');
			
			$( "#entidad" ).removeClass("ocultar");
			
	}else if(i==2){
		
			$( "#entidad" ).removeClass('mostrar');
			
			$( "#entidad" ).addClass("ocultar");
			
 
 
}
	
    //alert( $(this).find(":selected").val() );
});