(function($) {
	
	$(document).ready(function(){
		//toda vez que o mapa � clicado
		$('#map .state').click(function(){
			var estado = $(this).attr('data-state');//pega nome do estado
			var codigoIBGE = $(this).attr('cod-state');//pega c�digo IBGE para as consultas API
			var anoMes = $('#datepicker').val();//pega m�s e ano
			
			

			if(anoMes == ''){
				$('.info-state').html('<h3>Informe a data que quer buscar!</h3>')
			}else{
				
				//coloca a vari�vel no padr�o do IBGE para pesquisa da API
				var anoMes = anoMes.split("-");
			
				//pega s� ano e m�s
				var ano = anoMes[1];
				var mes = anoMes[0];
				
				var anoMes = anoMes[1]+anoMes[0];
				
				//TODO: PEGAR API DO AUXILIO EMERGENCIAL E DO BOLSA FAM�LIA E COLOCAR NAS VARI�VEIS
				//VARI�VEIS PARA PEGA A API: codigoIBGE e anoMes (p�gina � sempre 1)
				
				var valorBolsa;//valor total do Bolsa Fam�lia
				var beneficiariosBolsa;//quantidade de beneficiarios Bolsa Fam�lia
				
				var valorAuxilio;//valor total do auxilio
				var beneficiariosAuxilio;//quantidade de beneficiarios Auxilio
				
				//envio frontend para teste
				$('.info-state').html('<h3>'+estado+'</h3><ul><li>'+codigoIBGE+'</li><li>'+anoMes+'</li></ul>')
				
				//envio frontend oficial (precisa coletar os dados primeiro)
				//$('.info-state').html('<h3>'+estado+'</h3><h2>Bolsa Fam�lia em '+ mes+"/"+ano +'</h2><hr/><ul><li>Quantidade de Benifici�rios pelo Bolsa Fam�lia: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado no Bolsa Fam�lia: '+valorBolsa+'</li></ul><h2>Auxilio Emergencial em '+ mes+"/"+ano +'</h2><ul><li>Quantidade de Benifici�rios pelo Auxilio Emergencial: '+beneficiariosAuxilio+'</li><li>Total de dinheiro usado no Auxilio Emergencial: '+valorAuxilio+'</li></ul>')

			
			}
			
			''
			//teste
			console.log(estado + " " + codigoIBGE + " " + mesAno);   
	    });

		

	 

	});
})(jQuery);