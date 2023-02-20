<?php
      function checarSession() {
        if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
            header("Location: index.php?menuop=usuarios");
        }
    }

    
?>