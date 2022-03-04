//CLASSES
class Despesa{
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }

    validarDados(){
        for(let i in this){
            if(this[i] == undefined || this[i] == null || this[i] == ''){
                return false
            }
        }
        return true
    }
}

class Bd{
    constructor(){
        let id = localStorage.getItem('id')

        if(id === null){
            localStorage.setItem('id', 0)
        }
    }

    getProximoId(){
        let proximoId = localStorage.getItem('id')

        return parseInt(proximoId) + 1
    }

    gravar(d){
        let id = this.getProximoId()

        localStorage.setItem(id, JSON.stringify(d))

        localStorage.setItem('id', id)

    }

    recuperaDados(){
        let despesas = Array()

        let id = localStorage.getItem('id')

        for(let i = 1; i <= id; i++){

            let despesa = JSON.parse(localStorage.getItem(i))

            if(despesa === null){
                continue
            }

            despesa.id = i
            despesas.push(despesa)
        }

        return despesas
    }

    pesquisa(despesa){

        let despesasFiltradas = Array()

        despesasFiltradas = this.recuperaDados()

        if(despesa.ano != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
        }

        if(despesa.mes != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
        }

        if(despesa.dia != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
        }

        if(despesa.tipo != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
        }

        if(despesa.descricao != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
        }

        if(despesa.valor != ''){
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
        }

        return despesasFiltradas
    }

    remover(id){
        localStorage.removeItem(id)
    }
}

let bd = new Bd()

//FUNÇÕES
function cadastrarDespesa(){
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    //CRIANDO OBJETO
    let despesa = new Despesa(
        ano.value, 
        mes.value, 
        dia.value, 
        tipo.value, 
        descricao.value, 
        valor.value
    )

    if(despesa.validarDados()){
        bd.gravar(despesa)

        ano.value = ''
        mes.value = ''
        dia.value = ''
        tipo.value = ''
        descricao.value = ''
        valor.value = ''

        document.getElementById('btn-ok').className = 'btn btn-success'
        document.getElementById('cabecalho').className = 'modal-header text-success'
        document.getElementsByClassName('modal-body')[0].innerHTML = 'Despesa registrada com sucesso!'
        document.getElementsByClassName('modal-title')[0].innerHTML = 'Registro inserido com sucesso'
        $('#modalRegistraDespesa').modal('show')
    }
    else{
        document.getElementById('btn-ok').className = 'btn btn-danger'
        document.getElementById('cabecalho').className = 'modal-header text-danger'
        document.getElementsByClassName('modal-body')[0].innerHTML = 'Existem campos obrigatórios que devem ser preenchidos'
        document.getElementsByClassName('modal-title')[0].innerHTML = 'Erro de gravação'
        $('#modalRegistraDespesa').modal('show')
    }
}

function listaDespesas(despesas = Array(), filtro = false){

    if(despesas.length == 0 && filtro == false){
        despesas = bd.recuperaDados()
    }

    let listaDespesas =  document.getElementById('listaDespesas')
    listaDespesas.innerHTML = ''

    despesas.forEach(function(d){
        let line = listaDespesas.insertRow()
        line.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`

        switch(d.tipo){
            case '1':
                d.tipo = 'Alimentação'
                break
            case '2':
                d.tipo = 'Educação'
                break
            case '3':
                d.tipo = 'Lazer'
                break
            case '4':
                d.tipo = 'Saúde'
                break
            case '5':
                d.tipo = 'Transporte'
                break
        }

        line.insertCell(1).innerHTML = d.tipo
        line.insertCell(2).innerHTML = d.descricao
        line.insertCell(3).innerHTML = d.valor

        let btn = document.createElement('button')
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"></i>'
        btn.id = `despesas_id_${d.id}`
        btnApagar = document.getElementById('btn-apagar')
        btnApagar.onclick = function(){
            let id = btn.id.replace('despesas_id_', '')
            bd.remover(id)
            window.location.reload()
        }
        btn.onclick = function(){
            document.getElementById('btn-ok').className = 'btn btn-light'
            document.getElementById('btn-apagar').className = 'btn btn-danger'
            document.getElementById('cabecalho').className = 'modal-header text-danger'
            document.getElementsByClassName('modal-body')[0].innerHTML = 'Tem certeza que deseja excluir este registro?'
            document.getElementsByClassName('modal-title')[0].innerHTML = 'Excluir resgitro?'
            $('#modalRegistraDespesa').modal('show')
        
        }
        line.insertCell(4).append(btn)

    })
}

function pesquisarDespesas(){
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    let despesas = bd.pesquisa(despesa)

    listaDespesas(despesas, true)

}