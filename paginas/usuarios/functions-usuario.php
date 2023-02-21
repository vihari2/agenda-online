<?php
   include("banco/usuarios.php");

      function checarSession() {
        if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
            unset($_SESSION['logado']);
            header("Location: index.php?menuop=usuarios");
        }
    }

       function fazLogin() {
        if(isset($_POST['emailUser']) && isset($_POST['senhaUser'])) {
           $result = checkLogin(); 
           $quantidade = mysqli_num_rows($result);
    
          if($quantidade == 1) {   
                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['logado'] = true;   
                header("Location: index.php?menuop=home");
    
            }else {
              echo '<p class="alert-danger">Usuário ou senha errados!</p>';
            }  
        }
      }      
?>