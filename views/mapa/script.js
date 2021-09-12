(function($) {
	
	$(document).ready(function(){
		//toda vez que o mapAa � clicado
		$('#map .state').click(function(){
			var estado = $(this).attr('data-state');//pega nome do estado
			var codigoIBGE = $(this).attr('cod-state');//pega código IBGE para as consultas API
			var anoMes = $('#datepicker').val();//pega mês e ano
			
			$('#info-state').css({ 'display' : 'block'});
			
			if(anoMes == ''){
				$('#info-state').html('<h3>Informe a data!</h3>')
			}else{
				
				var anoMes = anoMes.split("-");
			
				//pega ano e mês
				var ano = anoMes[1];
				var mes = anoMes[0];

				var anoMes = anoMes[1]+anoMes[0];
				
				var valorBolsa;//valor total do Bolsa Família
				var beneficiariosBolsa;//quantidade de beneficiarios Bolsa Família
				
				var valorAuxilio;//valor total do auxilio
				var beneficiariosAuxilio;//quantidade de beneficiarios Auxilio
				
				if(ano < 2020 | ano == 2020 & mes < 4){
					
					$('#info-state').html('<h2>'+estado+' '+mes+'/'+ano+'</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado: '+valorBolsa+'</li></ul>');
				}else{
					$('#info-state').html('<h2>'+estado+' '+mes+'/'+ano+'</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado: '+valorBolsa+'</li></ul ><hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosAuxilio+'</li><li>Total de dinheiro usado: '+valorAuxilio+'</li></ul>');
				}
			}
	    });

		$('#btn-consultar').click(function(){
			var estado = $('#select-estados option:selected').text();//pega nome do estado
			var codigoIBGE = $('#select-estados').val();//pega código IBGE para as consultas API
			var anoMes = $('#datepicker').val();//pega mês e ano
			
			console.log(estado + "/" + codigoIBGE + "/"+ anoMes)
			
			$('#info-state').css({ 'display' : 'block'});
			if(anoMes == ''){
				$('#info-state').html('<h3>Informe a data!</h3>');
			}else if(codigoIBGE == 'null'){
				$('#info-state').html('<h3>Informe o estado!</h3>');
			}else{
				var anoMes = anoMes.split("-");
			
				//pega ano e mês
				var ano = anoMes[1];
				var mes = anoMes[0];
				
				var anoMes = anoMes[1]+anoMes[0];
		
				var valorBolsa;//valor total do Bolsa Família
				var beneficiariosBolsa;//quantidade de beneficiarios Bolsa Família
				
				var valorAuxilio;//valor total do auxilio
				var beneficiariosAuxilio;//quantidade de beneficiarios Auxilio
				
				if(ano < 2020 | ano == 2020 & mes < 4){
					
					$('#info-state').html('<h2>'+estado+' '+mes+'/'+ano+'</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado: '+valorBolsa+'</li></ul>');
				}else{
					$('#info-state').html('<h2>'+estado+' '+mes+'/'+ano+'</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosBolsa+'</li><li>Total de dinheiro usado: '+valorBolsa+'</li></ul ><hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: '+beneficiariosAuxilio+'</li><li>Total de dinheiro usado: '+valorAuxilio+'</li></ul>');
				}
			}
		});
	});
})(jQuery);