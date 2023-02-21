<?php
    include("checarCampos.php");
?>
<header>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/usuarios.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
    <h1>AGENDA ONLINE</h1>
    <a id="aCad" href="index.php?menuop=usuarios.php">Voltar</a>

<div>
    <form class="multipart/formcadasuser" action="index.php?menuop=validate-senha" method="post">
            <br>
            <div class="box">
             <legend><b>Cadastro</b></legend>
             
                <div class="input-group-prepend <?php if(!empty($erro)){echo "has-error";}?>">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                    </div>
                    <div>
                    <input required type="text" name="nomeUser" class="form-control" aria-label="Nome" aria-describedby="basic-addon1">
                    <div id="erro-nome"></div>
                    <?php if (!empty($erro_nome)): ?>
                        <span class="help-block"><?php echo $erro_nome ?></span>
                    <?php endif; ?>
                </div>
            </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>
                    <div>
                    <input required type="email" name="emailUser" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
                    <div id="erro-email"></div>
                        <?php if (!empty($erro_email)): ?>
                            <span class="help-block"><?php echo $erro_email ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                             
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Telefone</span>
                    </div>
                    <div>
                    <input required type="text" name="telefoneUser" class="form-control" aria-label="Telefone" aria-describedby="basic-addon1">
                    <div id="erro-telefone"></div>
                    <?php if (!empty($erro_telefone)): ?>
                        <span class="help-block"><?php echo $erro_telefone ?></span>
                    <?php endif; ?>
                </div>
            </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Sexo</span>
                    </div>
                    <div>
                        <select required name="sexoUser" id="sexoUser" class="form-control" aria-label="Sexo" aria-describedby="basic-addon1">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    <div id="erro-sexo"></div>
                    <?php if (!empty($erro_sexo)): ?>
                        <span class="help-block"><?php echo $erro_sexo?></span>
                    <?php endif; ?>
                </div>
            </div> 
                
            <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Data Nascimento</span>
                    </div>
                    <div>
                    <input required type="date" name="dataNascUser" class="form-control" aria-label="Data" aria-describedby="basic-addon1">
                    <div id="erro-data"></div>
                    <?php if (!empty($erro_data)): ?>
                        <span class="help-block"><?php echo $erro_data ?></span>
                    <?php endif; ?>
                </div>
            </div>
                
            <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Senha</span>
                    </div>
                    <div>
                    <input required type="password" name="senhaUser" class="form-control" aria-label="Senha" aria-describedby="basic-addon1">
                    <div id="erro-senha"></div>
                    <?php if (!empty($erro_senha)): ?>
                        <span class="help-block"><?php echo $erro_senha ?></span>
                    <?php endif; ?>
                </div>
            </div>
                
            <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Confirmar senha</span>
                    </div>
                    <div>
                    <input required type="password" name="confirmarSenhaUser" class="form-control" aria-label="Confirmar" aria-describedby="basic-addon1">
                    <div id="erro-confirmar"></div>
                    <?php if (!empty($erro_confirmar)): ?>
                        <span class="help-block"><?php echo $erro_confirmar ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <input class="btnEnviar" type="submit" value="Enviar" name="btnEnviar">
            </div>
    </form>
</div>
<script src="js/checkForm.js"></script>
</body>
</html>


        

