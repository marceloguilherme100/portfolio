<?php

$nome = addcslashes(@_POST['nome']);
$email = addcslashes(@_POST['email']);
$telefone = addcslashes(@_POST['telefone']);
$mensagem = addcslashes(@_POST['mensagem']);

$para = "marcelotecdev@gmail.com";
$assunto = "Coleta de dados - Inteliogia";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

$cabeca = "From: marcelo.guilherme100@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if (mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviando com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}



?>