function montarSelectEstados() {
    $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').done(data => {
        let htmlEstados = '<option>Selecione o estado</option>';
        data.forEach(e => {
            htmlEstados += `<option value="${e.sigla}">${e.nome}</option>`
        });
        $('#selEstados').html(htmlEstados)
    })
}

function montarSelectMunicipios(sigla){
    let htmlMunicipios = '<option>Selecione o municipio</option>';
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/distritos`).done(data => {
        data.forEach(e => {
            let municipio = e.municipio
            htmlMunicipios += `<option value="${municipio.id}">${municipio.nome}</option>`
        });
    })
    return htmlMunicipios
}