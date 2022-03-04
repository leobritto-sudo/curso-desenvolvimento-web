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
        
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: 'competencia=2018-10',
            success: () => {console.log('Requisição realizada com sucesso')},
            error: () => {console.log('Erro')}
        })

    })
})