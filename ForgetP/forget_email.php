<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  $destinatario = "seu-email@exemplo.com";
  $assunto = "Nova mensagem de contato";

  $corpo = "Nome: " . $nome . "\n";
  $corpo .= "Email: " . $email . "\n";
  $corpo .= "Mensagem: " . $mensagem;

  if (mail($destinatario, $assunto, $corpo)) {
    echo "E-mail enviado com sucesso!";
  } else {
    echo "Erro ao enviar o e-mail.";
  }
}
?>
