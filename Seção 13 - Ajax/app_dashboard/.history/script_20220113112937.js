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
        console.log($(e.target).val())
    })
})