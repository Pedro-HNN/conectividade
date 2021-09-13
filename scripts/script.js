

function bolsaMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {

	anoMes = anoMes.split('/')
	ano = anoMes[1]
	mes = anoMes[0]
	anoMes = ano.toString()+mes.toString();

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
				$('#info-state span').html('')
				anoMes = response[0].dataReferencia.split('-')
				$('#info-state').css({ 'display': 'block' });

				var nomeMunicipio = response[0].municipio.nomeIBGE

				var ano = anoMes[0];
				var mes = anoMes[1];
				
				var valorBolsa = response[0].valor;
				var beneficiariosBolsa = response[0].quantidadeBeneficiados;
				
				$('#info-state-title').html(`<h2>${estado} ${mes}/${ano}</h2></br><h5>(${nomeMunicipio})</h5>`)
				$('#info-state-bolsa').html(`<hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: ${beneficiariosBolsa}</li><li>Total de dinheiro usado:${valorBolsa}</li></ul>`);

				
				if (!(ano <= 2020 & mes < 4)) {
					auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina)	
				}else{
					$('#info-state-auxilio').hide()
				}
			} else {
				$('#info-state span').html('<h2>Sem resultado</h2>')
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	anoMes = anoMes[0].toString()+anoMes[1]
	$.ajax({
		url: "/hackathon/public/api/consulta/auxilio/municipio",
		type: "get",
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

				var nomeMunicipio = response[0].municipio.nomeIBGE

				var ano = anoMes[0];
				var mes = anoMes[1];

				var valorAuxilio = response[0].valor;
				var beneficiariosAuxilio = response[0].quantidadeBeneficiados;
				
				$('#info-state-title').html(`<h2>${estado} ${mes}/${ano}</h2></br><h5>(${nomeMunicipio})</h5>`)
				$('#info-state-auxilio').html(`<hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: ${beneficiariosAuxilio}</li><li>Total de dinheiro usado:${valorAuxilio}</li></ul>`);

				
			} else {
				$('#info-state').html('<h2>Sem resultado</h2>')
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function atualizarData(){
	if($('#datepicker').val() == ''){
		let anoMes = new Date().toLocaleDateString()
		anoMes = anoMes.split('/')
		ano = anoMes[2]
		mes = anoMes[1] - 2
		mes = mes.toString().length > 1 ? mes : '0'+mes.toString();
		anoMes = mes+'/'+ano
		$('#datepicker').val(anoMes)
	}
}

function atualizarMapa(siglaEstado){
	$('.mapActive').removeClass('mapActive')
	$(`[cod-state="${siglaEstado}"]`).find('path').addClass('mapActive')
}

  //FUNÇÕES DA PAGINA

  function vericacao() {
    if ($('#selEstados').val() != 'Selecione o Estado') {
      if ($('#selMunicipio').val() != 'Selecione o Municipio') {
        return true
      } else {
        alert('Selecione o municipio!')
      }
    } else {
      alert('Selecione o estado!')
    }
  }

  //EVENTOS

  $("#datepicker").datepicker({
    format: "mm/yyyy",
    startView: "months",
    minViewMode: "months",
    startDate: new Date('2013-01-20'),
    endDate: new Date('2021-08-1')
  });

  $('#selEstados').change(event => {
    estadoSigla = $(event.currentTarget).val()

    atualizarData()
    atualizarMapa(estadoSigla)
    montarSelectMunicipios(estadoSigla)

  })

  $("#datepicker").change(event => {
  })

  $("#selMunicipio").change(event => {
    atualizarData()
    if (vericacao()) {
            estado = $('#selEstados').val()
            codigoIbge = $('#selMunicipio').val()
            anoMes = $('#datepicker').val()
            pagina = $('#valPagina')
            bolsaMunicipioAjax(estado, codigoIbge, anoMes)
          }
  })

  $('#btn-consultar').click(function() {
    var estado = $('#select-estados option:selected').text(); //pega nome do estado
    var codigoIbge = $('#select-estados').val(); //pega código IBGE para as consultas API
    var anoMes = $('#datepicker').val(); //pega mês e ano

    bolsaMunicipioAjax(estado, codigoIbge, anoMes)
  });

  $('#map .state').click(event => {
    var estadoSigla = $(event.currentTarget).attr('cod-state');
    atualizarMapa(estadoSigla)
    $('#selEstados').val(estadoSigla)
    $('#selEstados').trigger('change')
    montarSelectMunicipios(estadoSigla)
    retornarCapital(estadoSigla)
    atualizarData()
  });

  window.onload = () => {
    montarSelectEstados()
  }