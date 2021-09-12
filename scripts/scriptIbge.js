function montarSelectEstados() {
    $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').done(data => {
        let htmlEstados = '<option>Selecione o Estado</option>';
        data.forEach(e => {
            htmlEstados += `<option value="${e.sigla}">${e.nome}</option>`
        });
        $('#selEstados').html(htmlEstados)
    })
}

function retornarCapital(estadoSigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-intermediarias`).done(data =>{
        console.log(data[0].id)
        $('#selMunicipio').val(data[0].id)
    })
}

function montarSelectMunicipios(sigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/municipios`).done(data => {
        let htmlMunicipios = '<option>Selecione o Municipio</option>';
        data.forEach(e => {
            htmlMunicipios += `<option value="${e.id}" name="${e.nome}">${e.nome}</option>`
        });
        $('#selMunicipio').html(htmlMunicipios)
        retornarCapital(sigla)
    })
}