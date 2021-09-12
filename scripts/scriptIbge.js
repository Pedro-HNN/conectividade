function montarSelectEstados() {
    $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').done(data => {
        let htmlEstados = '<option>Selecione o Estado</option>';
        data.forEach(e => {
            htmlEstados += `<option value="${e.sigla}">${e.nome}</option>`
        });
        $('#selEstados').html(htmlEstados)
    })
}

function montarSelectMunicipios(sigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/municipios`).done(data => {
        let htmlMunicipios = '<option>Selecione o Municipio</option>';
        data.forEach(e => {
            htmlMunicipios += `<option value="${e.id}">${e.nome}</option>`
            $('#selMunicipio').html(htmlMunicipios)
        });
    })
}