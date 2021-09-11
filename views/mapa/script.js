(function($) {
	
	$(document).ready(function(){
		//toda vez que o mapa é clicado
		$('#map .state').click(function(){
			var estado = $(this).attr('data-state');//pega nome do estado
			var codigoIBGE = $(this).attr('cod-state');//pega código IBGE para as consultas API
			var anoMes = $('#datepicker').val();//pega mês e ano
			
			

			if(anoMes == ''){
				$('.info-state').html('<h3>Informe a data que quer buscar!</h3>')
			}else{
				
				//coloca a variável no padrão do IBGE para pesquisa da API
				var anoMes = anoMes.split("-");
			
				//pega só ano e mês
				var ano = anoMes[1];
				var mes = anoMes[0];
				
				var anoMes = anoMes[1]+anoMes[0];
				
				//TODO: PEGAR API DO AUXILIO EMERGENCIAL E DO BOLSA FAMÍLIA E COLOCAR NAS VARIÁVEIS
				//VARIÁVEIS PARA PEGA A API: codigoIBGE e anoMes (página é sempre 1)
				
				var valorBolsa;//valor total do Bolsa Família
				var beneficiariosBolsa;//quantidade de beneficiarios Bolsa Família
				
				var valorAuxilio;//valor total do auxilio
				var beneficiariosAuxilio;//quantidade de beneficiarios Auxilio
				
				//envio frontend para teste
				$('.info-state').html('<h3>'+estado+'</h3><ul><li>'+codigoIBGE+'</li><li>'+anoMes+'</li></ul>')
				
				//envio frontend oficial (precisa coletar os dados primeiro)
				//$('.info-state').html('<h3>'+estado+'</h3><h2>Bolsa Família em '+ mes+"/"+ano +'</h2><hr/><ul><li>Quantidade de Benificiários pelo Bolsa Família: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado no Bolsa Família: '+valorBolsa+'</li></ul><h2>Auxilio Emergencial em '+ mes+"/"+ano +'</h2><ul><li>Quantidade de Benificiários pelo Auxilio Emergencial: '+beneficiariosAuxilio+'</li><li>Total de dinheiro usado no Auxilio Emergencial: '+valorAuxilio+'</li></ul>')

			
			}
			
			''
			//teste
			console.log(estado + " " + codigoIBGE + " " + mesAno);   
	    });

		

	 

	});
})(jQuery);