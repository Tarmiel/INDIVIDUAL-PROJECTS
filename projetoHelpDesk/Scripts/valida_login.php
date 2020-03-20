<?php
  session_start();

  // variavel que verifica a autenticação
  $usuario_autentic = false;
  $usuario_id = null;
  // usuarios do sistemas
  $usuario_app = array(
    array('id'  =>  1,'email' => 'adm@teste.com.br','senha' =>'123456'),
    array('id'  =>  2,'email' => 'user@teste.com.br','senha' =>'abc'),
    array('id'  =>  3,'email' => 'jose@teste.com.br','senha' =>'abc'),
    array('id'  =>  4,'email' => 'lucas@teste.com.br','senha' =>'abc')
  );

  // verifica os dados
  foreach ($usuario_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
      $usuario_autentic = true;
      print_r($user);
      // $usuario_id = $user['id'];
    }
  }
  if ($usuario_autentic) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: ../home.php');
  }else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: ../index.php?login=erro');
  }
?>
