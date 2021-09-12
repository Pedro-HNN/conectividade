async function montarSelectEstados() {
    $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').done(data => {
        let htmlEstados = '<option>Selecione o Estado</option>';
        data.forEach(e => {
            htmlEstados += `<option value="${e.sigla}">${e.nome}</option>`
        });
        $('#selEstados').html(htmlEstados)
    })
}

async function retornarCapital(estadoSigla){
    await $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-intermediarias`).done(data =>{
        id = $(`#selMunicipio option[name="${data[0].nome}"]`).val()
        $('#selMunicipio').val(id)
        if (vericacao()) {
            estado = $('#selEstados').val()
            codigoIbge = $('#selMunicipio').val()
            anoMes = $('#datepicker').val()
            pagina = $('#valPagina')
            bolsaMunicipioAjax(estado, codigoIbge, anoMes)
          }
    })
}

async function montarSelectMunicipios(sigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/municipios`).done(data => {
        let htmlMunicipios = '<option>Selecione o Municipio</option>';
        data.forEach(e => {
            htmlMunicipios += `<option value="${e.id}" name="${e.nome}">${e.nome}</option>`
        });
        $('#selMunicipio').html(htmlMunicipios)
        retornarCapital(sigla)
    })
}

async function capitalAjax(estadoSigla) {
	var result;
	await $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-imediatas`).done(data => { result = data[0] })
	return result
}