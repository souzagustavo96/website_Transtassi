<?php

  
//Variaveis de POST, Alterar somente se necessário 
//====================================================

$email = $_POST['email'];
$obs = $_POST['obs'];

//====================================================


//====================================================
//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
//==================================================== 
$email_remetente = "Transtassi"; // deve ser uma conta de email do seu dominio (ou o nome que quer que apareça quando chegar o email)
//====================================================

//Configurações do email, ajustar conforme necessidade
//==================================================== 
$email_destinatario = "vanviltavar@gmail.com";
$email_reply = "site@transtassi.com.br"; 
$email_assunto = "Atendimento Fale Conosco"; // Este será o assunto da mensagem
//====================================================

//Monta o Corpo da Mensagem  
//====================================================
//As tags em HTML serão interpretadas pelo email
//Colocando o título e formatando com os styles dentro da div
$email_conteudo = "
<div style= 'background:#efefef;padding-left:50px;padding-top:50px;padding-bottom:5px;padding-right:50px;font-size:large; font-color:black'>

<div style='width:100%;background:#ffffff;height:120px;text-align:center;border-radius:9px'><img src='https://transtassi.000webhostapp.com/images/Tassi.png' width='180' height='100'></div><br>

<h2 style='text-align:left;color:black'><b>Uma nova mensagem foi recebida a partir do Fale Conosco!</b></h2>\n";
//Informações que foram passadas pelo formulário
if($email){
  $email_conteudo .= "<b>Email:</b> $email <br> \n";
}else{
  $email_conteudo .= "<b>Email:</b> Nenhum email informado <br> \n";
}

if($obs){
  $email_conteudo .= "<b>Observações:</b> $obs  <hr></div>\n";
}else{
  $email_conteudo .= "<b>Observações:</b> Nenhuma observação feita  <hr></div>\n";
}

//Divs com o rodapé do email
$email_conteudo .= "<div style= 'background:#efefef;padding-left:50px;padding-top:5px;padding-bottom:50px;font-color:black;'>
<b>Atenciosamente, <br><big>Transtassi Comercial</big></b> <br>comercial@transtassi.com.br <br> Telefone: (35)2101-1626 <br> <a href='https://transtassi.000webhostapp.com/index.html'> www.transtassi.com.br</a> <br>
 <small><i>'Nossos planos para amanhã dependem da segurança de hoje'</i></small><br><br>
 <a href='https://transtassi.000webhostapp.com/index.html' target='_blank'><button style='padding:10px;background:#c10b1c;color:white;border-radius:12px;height:50px;width:130px'>Voltar ao Site</button></a></div>\n";

//====================================================

//Seta os Headers (Alterar somente caso necessario) 
//==================================================== 
$headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

//====================================================

//Enviando o email 
//==================================================== 
if (mail($email_destinatario, $email_assunto, $email_conteudo, $headers)){ 
        
          echo "
          <script language='JavaScript'>
          window.alert('Comentário enviado com sucesso! Clique no OK para voltar à página inicial.')
          window.location.href='index.php';
          </script>";
      }
      else
      {
          echo "
          <script language='JavaScript'>
          window.alert('Falha ao enviar comentário. Clique no OK para voltar à página inicial.')
          window.location.href='index.php';
          </script>";
      }

   
//====================================================

?>
