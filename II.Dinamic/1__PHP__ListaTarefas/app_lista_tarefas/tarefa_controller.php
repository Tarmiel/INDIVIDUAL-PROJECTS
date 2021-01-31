<?php

  require "tarefa_model.php";
  require "tarefa_service.php";
  require "conexao.php";

  $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

  if($acao == 'inserir'){
    $tarefa = new Tarefa(); //tarefa_model -- criando o objeto
    $tarefa->__set('tarefa',$_POST['tarefa']); //setando o valor

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao,$tarefa);
    $tarefaService->inserir();

    header('Location:nova_tarefa.php?inclusao=1');
  }else if($acao == 'recuperar'){
    $tarefa = new Tarefa();
    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao,$tarefa);
    $tarefas = $tarefaService->recuperar(); //passando o array de objetos
  }else if($acao == 'atualizar'){
     $tarefa = new Tarefa();
     $tarefa->__set('id',$_POST['id'])->
              __set('tarefa',$_POST['tarefa']);

     $conexao = new Conexao();

     $tarefaService = new TarefaService($conexao,$tarefa);
     if($tarefaService->atualizar()){
       header('Location:todas_tarefas.php');
     }
    }else if($acao == 'remover'){
      $tarefa = new Tarefa();
      $tarefa->__set('id',$_GET['id']);

      $conexao = new Conexao();
      $tarefaService = new TarefaService($conexao,$tarefa);
      $tarefaService->remover();
      header('Location:todas_tarefas.php');
    }else if($acao == 'marcarRealizada'){
      $tarefa = new Tarefa();
      $tarefa->__set('id',$_GET['id'])->__set('id_status',2);
      $conexao = new Conexao();
      $tarefaService = new TarefaService($conexao,$tarefa);
      $tarefaService->marcarRealizada();
      header('Location:todas_tarefas.php');


    }else if($acao=='recuperarTarefasPendentes'){
    $tarefa = new Tarefa();
    $tarefa->__set('id_Status',1);
    $conexao = new Conexao();
    

    $tarefaService = new TarefaService($conexao,$tarefa);
    $tarefaService->recuperarTarefasPendentes(); //passando o array de objetos
    }
    

 ?>
