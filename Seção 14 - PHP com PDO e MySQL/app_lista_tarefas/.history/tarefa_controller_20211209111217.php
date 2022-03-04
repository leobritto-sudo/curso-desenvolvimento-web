<?php

    require '../../app_lista_tarefas/tarefa.model.php';
    require '../../app_lista_tarefas/tarefa.service.php';
    require '../../app_lista_tarefas/conexao.php';

    $conexao = new Conexao();
    $tarefa = new Tarefa();
    $tarefaService = new TarefaService($conexao, $tarefa);

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {

        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefaService->create();

        header('Location: nova_tarefa.php?inclusao=1');

    }
    else if($acao == 'listar') {
        $tarefas = $tarefaService->read();
    }
    else if($acao == 'atualizar') {
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);
        
        if($tarefaService->update()) {
            header('Location: todas_tarefas.php?update=1');
        }
    }

?>