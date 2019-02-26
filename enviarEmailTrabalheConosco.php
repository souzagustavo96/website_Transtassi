<?php

  
//Variaveis de POST, Alterar somente se necessário 
//====================================================
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$comentario = $_POST['comentario'];

//Transforma a data em formato brasileiro

//====================================================

//====================================================

//Pega o arquivo em anexo e faz as modificações necessárias para enviar por email
$boundary = "XYZ-".md5(date("dmYis"))."-ZYX";
$path = $_FILES["curriculo"]["tmp_name"];
$fileType = $_FILES["curriculo"]["type"];
$fileName = $_FILES["curriculo"]["name"];
$fp = fopen($path,"rb");
$anexo = fread($fp, filesize($path));
$anexo = chunk_split(base64_encode($anexo));
fclose($fp);

//====================================================
//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
//==================================================== 
$email_remetente = "Transtassi"; // deve ser uma conta de email do seu dominio (ou o nome que quer que apareça quando chegar o email)
//====================================================

//Configurações do email, ajustar conforme necessidade
//==================================================== 
$email_destinatario = "vanviltavar@gmail.com";
$email_reply = "site@transtassi.com.br"; 
$email_assunto = "Atendimento Trabalhe Conosco"; // Este será o assunto da mensagem
//====================================================

//Monta o Corpo da Mensagem  
//====================================================
//As tags em HTML serão interpretadas pelo email
$email_conteudo = "--$boundary".PHP_EOL;
$email_conteudo .= "Content-Type:text/html; charset = 'utf-8'".PHP_EOL;
//Colocando o título e formatando com os styles dentro da div
$email_conteudo .= "
<div style= 'background:#efefef;padding-left:50px;padding-top:50px;padding-bottom:5px;padding-right:50px;font-size:large; font-color:black'>

<div style='width:100%;background:#ffffff;height:120px;text-align:center;border-radius:9px'><img src='https://transtassi.000webhostapp.com/images/Tassi.png' width='180' height='100'></div><br>

<h1 style='text-align:left;color:black'><b>Uma nova mensagem foi recebida a partir do Trabalhe Conosco!</b></h1>\n";
//Informações que foram passadas pelo formulário
$email_conteudo .= "<b>Nome:</b> $nome <br> \n";
$email_conteudo .= "<b>Email:</b> $email <br> \n";
$email_conteudo .= "<b>Telefone:</b> $telefone <br> \n";
$email_conteudo .= "<b> Currículo:</b> Arquivo segue em anexo<br>\n";
//Verifica se alguma observação foi feita
if ($comentario){
  $email_conteudo .= "<b>Comentários:</b> $comentario  <hr></div>\n";
}else{
  $email_conteudo .= "<b>Comentários:</b> Nenhuma observação feita.  <hr></div>\n";
}
//Divs com o rodapé do email
$email_conteudo .= "<div style= 'background:#efefef;padding-left:50px;padding-top:5px;padding-bottom:50px;font-color:black;'>
<b>Atenciosamente, <br><big>Transtassi Comercial</big></b> <br>comercial@transtassi.com.br <br> Telefone: (35)2101-1626 <br> <a href='https://transtassi.000webhostapp.com/index.html'> www.transtassi.com.br</a> <br>
 <small><i>'Nossos planos para amanhã dependem da segurança de hoje'</i></small><br><br>
 <a href='https://transtassi.000webhostapp.com/index.html' target='_blank'><button style='padding:10px;background:#c10b1c;color:white;border-radius:12px;height:50px;width:130px'>Voltar ao Site</button></a></div>\n";
 $email_conteudo .= "--$boundary".PHP_EOL;
 //Anexa o arquivo no email
 $email_conteudo .= "Content-Type: ".$fileType."; name =\"".$fileName."\"".PHP_EOL;
 $email_conteudo .= "Content-Transfer-Encoding: base64".PHP_EOL;
 $email_conteudo .= "Content-Disposition: attachment; filename=\"".$fileName."\"".PHP_EOL;
 $email_conteudo .= "$anexo". PHP_EOL;
 $email_conteudo .= "--$boundary".PHP_EOL;

//====================================================

//Seta os Headers (Alterar somente caso necessario) 
//==================================================== 
$headers = "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-Type: multipart/mixed; ";
$headers .= "boundary=" . $boundary . PHP_EOL;
$headers .= "$boundary" . PHP_EOL;
//====================================================

//Enviando o email 
//==================================================== 
if (mail($email_destinatario, $email_assunto, $email_conteudo, $headers)){ 
        
          echo "
          <script language='JavaScript'>
          window.alert('Currículo enviado com sucesso! Clique no OK para voltar à página inicial.')
          window.location.href='index.php';
          </script>";
      }
      else
      {
          echo "
          <script language='JavaScript'>
          window.alert('Falha no envio do currículo. Clique no OK para voltar à página inicial.')
          window.location.href='index.php';
          </script>";
      }

   
//====================================================

?>
