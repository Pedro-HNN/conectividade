function bolsaMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	console.log(estado, codigoIbge, anoMes, pagina)
	anoMes = anoMes.split('/')
	ano = anoMes[1]
	mes = anoMes[0]
	anoMes = ano.toString() + mes.toString();
	if (estado == null || estado == undefined) {
		console.log('Log: bolsaMunicipio; param: estado')
		return
	}
	if (codigoIbge == null || codigoIbge == undefined) {
		console.log('Log: bolsaMunicipio; param: codigoIbge')
		return
	}
	if (anoMes == null || anoMes == undefined) {
		console.log('Log: bolsaMunicipio; param: anoMes')
		return
	}
	$.ajax({
		url: "/hackathon/public/api/consulta/bolsa/municipio",
		type: "get",
		data: {
			codigoIbge: codigoIbge,
			mesAno: anoMes,
			pagina: pagina
		},
		success: function (response) {
			try {
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
					$('#info-state-bolsa').html(`<hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: <strong>${beneficiariosBolsa}</strong></li><li>Total de dinheiro usado: <strong>$${valorBolsa}</strong></li></ul>`);


					if (!(ano <= 2020 & mes < 4)) {
						auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina)
					} else {
						$('#info-state-auxilio').hide()
					}
				}
			} catch (exception) {
				console.log('error bolsa municipio')
				console.log(exception)
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	anoMes = anoMes[0].toString() + anoMes[1]
	$.ajax({
		url: "/hackathon/public/api/consulta/auxilio/municipio",
		type: "get",
		data: {
			codigoIbge: codigoIbge,
			mesAno: anoMes,
			pagina: pagina
		},
		success: function (response) {
			try {
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
					$('#info-state-auxilio').html(`<hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: <strong>${beneficiariosAuxilio}</strong></li><li>Total de dinheiro usado: <strong>$${valorAuxilio}</strong></li></ul>`);

				} else {
					$('#info-state').html('<h2>Sem resultado</h2>')
				}
			} catch (exception) {
				console.log('error auxilio municipio')
				console.log(exception)
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function bolsaCpfNisAjax(anoMesCompetencia, anoMesReferencia, codigo, pagina = 1) {
    $.ajax({
        url: "/hackathon/public/api/consulta/bolsa/cpf-nis",
        type: "get", //send it through get method
        data: {
            anoMesCompetencia: anoMesCompetencia,
            anoMesReferencia: anoMesReferencia,
            codigo: codigo,
            pagina: pagina
        },
        success: function (response) {
            response = JSON.parse(response)
            console.log(response)
            if (response[0] != null) {

                var valorBolsa = response[0].valor;//valor total do Bolsa Família
                var quantidadeDependentes = response[0].quantidadeDependentes;//quantidade de beneficiarios Bolsa Família
                var nomeTitular = response[0].titularBolsaFamilia.nome;
				var cpf = response[0].titularBolsaFamilia.cpfFormatado
				var nis = response[0].titularBolsaFamilia.nis
				var data = response[0].dataMesCompetencia.split('-')
				data = data[2]+"/"+data[1]+"/"+data[0]

				$('#bolsa-info').html('')
                $('#bolsa-info').html(`<h2>${nomeTitular}</h2></br><ul style="text-align:left;"><li>CPF: ${cpf}</li><li>NIS: ${nis}</li><li>Data: ${data}</li><li>valor: ${valorBolsa}</li><li>Quantidade dependentes: ${quantidadeDependentes}</li>`)
            }
        },
        error: function (xhr) {
            alert('Erro, contate o adm');
        }
    });
}

function auxilioNisAjax(codigoBenifeciario, codigoResponsavelFamiliar, pagina = 1){
	$.ajax({
        url: "/hackathon/public/api/consulta/auxilio/nis",
        type: "get", 
        data: {
            codigoBenifeciario: codigoBenifeciario,
            codigoResponsavelFamiliar: codigoResponsavelFamiliar,
            pagina: pagina
        },
        success: function (response) {
            arrayResponse = JSON.parse(response)

			var html = ''

			arrayResponse.forEach(element => {
				html+='<div class="aux-result-card">'
				html+='<h3>Responsavel</h3>'
				html+=`<div class="aux-nome-resp">${element.responsavelAuxilioEmergencial.nome}</div>`
				html+=`<div class="aux-cpf-resp">${element.responsavelAuxilioEmergencial.cpfFormatado}</div>` 
				html+=`<div class="aux-nis-resp">${element.responsavelAuxilioEmergencial.nis}</div>`
				html+='</br>'
				html+='<h3>Beneficiario</h3>'
				html+=`<div class="aux-nome-ben">${element.beneficiario.nome}</div>`
				html+=`<div class="aux-cpf-ben">${element.beneficiario.cpfFormatado}</div>` 
				html+=`<div class="aux-nis-ben">${element.beneficiario.nis}</div>`
				html+='</br>'
				html+=`<ul>`
				html+=`<li>Mes Disponibilização: ${element.mesDisponibilizacao}</li>`
				html+=`<li>Situacão Aux. Emer.: ${(element.situacaoAuxilioEmergencial != '' ? element.situacaoAuxilioEmergencial : "-------------")}</li>`
				html+=`<li>Enquadramento: ${element.enquadramentoAuxilioEmergencial}</li>`
				html+=`<li>valor: $${element.valor}</li>`
				html+=`<li>Nº Parcela: ${element.numeroParcela}`
				html+=`</ul>`
				html+='</div>'
			});

            $('#auxilio-info').html(html)
        },
        error: function (xhr) {
            alert('Erro, contate o adm');
        }
    });
}

function atualizarData() {
	if ($('#datepicker').val() == '') {
		let anoMes = new Date().toLocaleDateString()
		anoMes = anoMes.split('/')
		ano = anoMes[2]
		mes = anoMes[1] - 2
		mes = mes.toString().length > 1 ? mes : '0' + mes.toString();
		anoMes = mes + '/' + ano
		$('#datepicker').val(anoMes)
	}
}

function atualizarMapa(siglaEstado) {
	$('.mapActive').removeClass('mapActive')
	$(`[cod-state="${siglaEstado}"]`).find('path').addClass('mapActive')
}