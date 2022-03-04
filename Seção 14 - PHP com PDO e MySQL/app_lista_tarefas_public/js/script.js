
function editar(id, txt_tarefa, pag) {
    let form = document.createElement('form')
    form.action = 'tarefa_controller.php?acao=atualizar&pag=' + pag
    form.method = 'POST'
    form.className = 'row w-75'

    let input = document.createElement('input')
    input.type = 'text'
    input.name = 'tarefa'
    input.className = 'col-9 form-control'
    input.value = txt_tarefa

    let inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'

    form.appendChild(input)
    form.appendChild(inputId)
    form.appendChild(button)

    let tarefa = document.getElementById('tarefa_' + id)

    tarefa.innerHTML = ''

    tarefa.insertBefore(form, tarefa[0])
}

function excluir(id, pag) {
    location.href = 'todas_tarefas.php?acao=excluir&id=' + id + '&pag=' + pag
}

function marcarRealizada(id, pag) {
    location.href = 'todas_tarefas.php?acao=marcar&id=' + id + '&pag=' + pag
}