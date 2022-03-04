<?php

    require '../../app_lista_tarefas/tarefa.model.php';
    require '../../app_lista_tarefas/tarefa.service.php';
    require '../../app_lista_tarefas/conexao.php';

    $conexao = new Conexao();

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {

        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->create();

        header('Location: nova_tarefa.php?inclusao=1');

    }
    else if($acao == 'listar') {
        echo 'Comeu linguiça hein amigão';
    }

?>