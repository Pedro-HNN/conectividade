(function($) {
	
	$(document).ready(function(){
		//toda vez que o mapa � clicado
		$('#map .state').click(function(){
			var estado = $(this).attr('data-state');//pega nome do estado
			var codigoIBGE = $(this).attr('cod-state');//pega c�digo IBGE para as consultas API
			var mesAno = $('#datepicker').val();//pega m�s e ano
			
			if(mesAno == ''){
				$('.info-state').html('<h3>Informe a data que quer buscar!</h3>')
			}else{
				$('.info-state').html('<h3>'+estado+'</h3><ul><li>'+codigoIBGE+'</li><li>'+mesAno+'</li></ul>')
			
			}
			
			
			
			//teste
			console.log(estado + " " + codigoIBGE + " " + mesAno);   
	    });

		

	 

	});
})(jQuery);