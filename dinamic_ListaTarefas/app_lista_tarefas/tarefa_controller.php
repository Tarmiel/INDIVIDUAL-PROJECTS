<?php

  require "tarefa_model.php";
  require "tarefa_service.php";
  require "conexao.php";

  $tarefa = new Tarefa(); //tarefa_model -- criando o objeto
  $tarefa->__set('tarefa',$_POST['tarefa']); //setando o valor

  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao,$tarefa);
  $tarefaService->inserir();

  header('Location:nova_tarefa.php?inclusao=1');
 ?>
