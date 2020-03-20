<?php
  session_start();

  // variavel que verifica a autenticação
  $usuario_autentic = false;

  // usuarios do sistemas
  $usuario_app = array(
    array('email' => 'adm@teste.com.br','senha' =>'123456'),
    array('email' => 'user@teste.com.br','senha' =>'abc')
  );

  // verifica os dados
  foreach ($usuario_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
      $usuario_autentic = true;
    }
  }
  if ($usuario_autentic) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
  }else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
  }
?>
