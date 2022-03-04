<?php

    require '../../app_lista_tarefas/tarefa.model.php';
    require '../../app_lista_tarefas/tarefa.service.php';
    require '../../app_lista_tarefas/conexao.php';

    $conexao = new Conexao();

    if(isset($_GET['acao']) && $_GET['acao'] == 'inserir') {

        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->create();

        header('Location: nova_tarefa.php?inclusao=1');

    }

?>