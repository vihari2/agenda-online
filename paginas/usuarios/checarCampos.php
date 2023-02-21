<?php

include("functions-usuario.php");

function limpaCampo($texto)
      {
        $texto = trim($texto);
        $texto = stripslashes($texto);
        $texto = htmlspecialchars($texto);
        
        return $texto;
      }
      
      $erro = false;
      $erro_nome = "";
      $erro_email = "";
      $erro_telefone = "";
      $erro_data = "";
      $erro_sexo = "";
      $erro_senha = "";
      $erro_confirmacao = "";
      
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $nome = limpaCampo($_POST["nomeUser"]);
        $email = limpaCampo($_POST["emailUser"]);
        $data = limpaCampo($_POST["dataNascUser"]);
        $telefone = limpaCampo($_POST['telefoneUser']);
        $sexo = limpaCampo($_POST['sexoUser']);
        $senha = limpaCampo($_POST["senhaUser"]);
        $confirmacao = limpaCampo($_POST["confirmarSenhaUser"]);
        
      
        if(empty($nome)) {
          $erro_nome = "Nome é obrigatório.";
          $erro = true;
        }
      
        if(empty($email)) {
          $erro_email = "Email é obrigatório.";
          $erro = true;
        }
        
        if(empty($telefone)) {
            $erro_telefone = "Telefone é obrigatório.";
            $erro = true;
          }

        if(empty($sexo)) {
            $erro_sexo = "Sexo é obrigatório.";
            $erro = true;
          }

        if(empty($data)) {
          $erro_data = "Data é obrigatória.";
          $erro = true;
        }
      
        if(empty($senha)) {
          $erro_senha = "Senha é obrigatória.";
          $erro = true;
        }
      
        if(empty($confirmacao)) {
          $erro_confirmacao = "Confirmação é obrigatório.";
          $erro = true;
        }
      
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $erro_email = "Formato inválido!";
          $erro = true;
        }
        
        if($senha !== $confirmacao) {
          $erro_senha = "Senhas não são iguais!";
          $erro = true;
        }
      }

    ?>