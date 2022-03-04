$(document).ready(() => {
	$('#documentacao').on('click', () => {
        //$('#pagina').load('documentacao.html')

        $.get('documentacao.html', data => {
            $('pagina').html(data)
        })
    })

    $('#suporte').on('click', () => {
        //$('#pagina').load('suporte.html')

        $.get('documentacao.html', data => {
            $('pagina').html(data)
        })
    })
})