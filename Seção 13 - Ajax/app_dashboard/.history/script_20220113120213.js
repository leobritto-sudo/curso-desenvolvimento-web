$(document).ready(() => {
	$('#documentacao').on('click', () => {
        $('#pagina').load('documentacao.html')

        /* $.get('documentacao.html', data => {
            $('#pagina').html(data)
        }) */

        /* $.post('documentacao.html', data => {
            $('#pagina').html(data)
        }) */
    })

    $('#suporte').on('click', () => {
        $('#pagina').load('suporte.html')

        /* $.get('suporte.html', data => {
            $('#pagina').html(data)
        }) */

        /* $.post('suporte.html', data => {
            $('#pagina').html(data)
        }) */
    })

    //AJAX
    $('#competencia').on('change', e => {

        let competencia = $(e.target).val()
        
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`,
            dataType: 'json',
            success: data => {console.log(data.numeroVendas, data.totalVendas)},
            error: erro => {console.log(erro)}
        })

    })
})