$(function(){
    $("#form-test").on("submit",function(){
      nome_input = $("input[name='nomeUser']");
      email_input = $("input[name = 'emailUser']");
      data_input = $("input[name='dataUser']");
      senha_input = $("input[name='senhaUser']");
      confirmacao_input = $("input[name='confirmacaoSenhaUser']");
  
      if(nome_input.val() == "" || nome_input.val() == null)
      {
        $("#erro-nome").html("O nome eh obrigatorio");
        return(false);
      }
  
      if(email_input.val() == "" || email_input.val() == null)
      {
        $("#erro-email").html("O email eh obrigatorio");
        return(false);
      }
  
      if(data_input.val() == "" || data_input.val() == null)
      {
        $("#erro-data").html("A data eh obrigatoria");
        return(false);
      }
  
      if(senha_input.val() == "" || senha_input.val() == null)
      {
        $("#erro-senha").html("A senha eh obrigatoria");
        return(false);
      }
  
      if(confirmacao_input.val() == "" || confirmacao_input.val() == null)
      {
        $("#erro-confirmacao").html("A confirmacao eh obrigatoria");
        return(false);
      }
  
      return(true);
    });
  });