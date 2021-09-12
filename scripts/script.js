
$(document).ready(function () {
	$('#map .state').click(function () {
		var estado = $(this).attr('data-state');//pega nome do estado
		var codigoIbge = $(this).attr('cod-state');//pega código IBGE para as consultas API
		var dataPicker = $('#datepicker').val() != ''
		var anoMes = dataPicker ? $('#datepicker').val() : new Date().toLocaleDateString()

		//coloca tudo na cor padrão
	    $('.state .shape').css({'fill': '#0094d9'});
		$('.state .circle').css({'fill': '#66ccff'});

		//colore os selecionados
		var estadoCor = '#state_'+codigoIbge.toLowerCase();
	    $(estadoCor+' .label_icon_state').css({'fill': '#003399'});
	    $(estadoCor+' .shape').css({'fill': '#003399'});


		if (dataPicker) {
			var anoMes = anoMes.split("/");

			var ano = anoMes[1];
			var mes = anoMes[0];
		} else {
			var anoMes = anoMes.split("/");

			var ano = anoMes[2];
			var mes = anoMes[1] - 2;
			mes = mes.toString().length > 1 ? mes : '0' + mes.toString()
		}
		var anoMes = ano + mes;
		console.log(estado, codigoIbge, anoMes)
		bolsaMunicipioAjax(estado, codigoIbge, anoMes)
	});

	$('#btn-consultar').click(function () {
		var estado = $('#select-estados option:selected').text();//pega nome do estado
		var codigoIbge = $('#select-estados').val();//pega código IBGE para as consultas API
		var anoMes = $('#datepicker').val();//pega mês e ano

		console.log(estado + "/" + codigoIbge + "/" + anoMes)
		bolsaMunicipioAjax(estado, codigoIbge, anoMes)
	});
});

function bolsaMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	$.ajax({
		url: "/hackathon/public/api/consulta/bolsa/municipio",
		type: "get", //send it through get method
		data: {
			codigoIbge: codigoIbge,
			mesAno: anoMes,
			pagina: pagina
		},
		success: function (response) {
			response = JSON.parse(response)
			if (response[0] != null) {
				anoMes = response[0].dataReferencia.split('-')
				$('#info-state').css({ 'display': 'block' });

				var ano = anoMes[0];
				var mes = anoMes[1];

				var valorBolsa = response[0].valor;//valor total do Bolsa Família
				var beneficiariosBolsa = response[0].quantidadeBeneficiados;//quantidade de beneficiarios Bolsa Família

				var valorAuxilio = response[0].valor;//valor total do auxilio
				var beneficiariosAuxilio = response[0].quantidadeBeneficiados;//quantidade de beneficiarios Auxilio

				if (ano <= 2020 & mes < 4) {

					$('#info-state').html('<h2>' + estado + ' ' + mes + '/' + ano + '</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: ' + beneficiariosBolsa + '</li><li>Total de dinheiro usado: ' + valorBolsa + '</li></ul>');
				} else {
					$('#info-state').html('<h2>' + estado + ' ' + mes + '/' + ano + '</h2><hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: ' + beneficiariosBolsa + '</li><li>Total de dinheiro usado: ' + valorBolsa + '</li></ul ><hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: ' + beneficiariosAuxilio + '</li><li>Total de dinheiro usado: ' + valorAuxilio + '</li></ul>');
				}
			} else {
				$('#info-state').html('<h2>Sem resultado</h2>')
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function capitalAjax(estadoSigla){
	var result;
	$.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-imediatas`).done(data => {result = data[0]})
	return result
}