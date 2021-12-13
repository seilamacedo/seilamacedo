<?php

$remetente          = 'From: ahseilaah@hotmail.com';
$destinatario       = 'lucasmaccedo@outlook.com.br';
$nome               = utf8_decode($_POST['nome'])
$sobrenome          = utf8_decode($_POST['sobrenome'])
$email              = utf8_decode($_POST['email'])
$devweb             = utf8_decode($_POST['devweb'])
$tecnologia1        = utf8_decode($_POST['tecnologia1'])
$alerta             = 'seus dados foram enviados com sucesso!!!';
$corpo              = "

Nome:                   ".$nome."
Sobrenome:              *.$sobrenome."
E-mail:                 ".$email."
Mensagem:               ".$mensagem."";
mail($destinatario, $nome, $corpo, $remetente);
echo $alerta;
>