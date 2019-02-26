<?php
//Variaveis de POST, Alterar somente se necessário 
  //====================================================
$nome = $_POST['nome'];
$nomeEmpresa = $_POST['nomeEmpresa'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$origem = $_POST['origem'];
$destino = $_POST['destino'];
$tipoVeiculo = $_POST['tipoVeiculo'];
$quantidade = $_POST['quantidade'];
$unidadeMedida = $_POST['unidadeMedida'];
$frequencia = $_POST['frequencia'];
$data = $_POST['data'];
$obs = $_POST['obs'];

if($data){
  //Transforma a data em formato brasileiro
  $dataCerta = strftime( '%d-%m-%Y', strtotime($data));
}
  //====================================================

  //====================================================

  //Pega o arquivo em anexo e faz as modificações necessárias para enviar por email
$boundary = "XYZ-".md5(date("dmYis"))."-ZYX";
if($path = $_FILES["fispq"]["tmp_name"]){
  $path = $_FILES["fispq"]["tmp_name"];
  $fileType = $_FILES["fispq"]["type"];
  $fileName = $_FILES["fispq"]["name"];
  $fp = fopen($path,"rb");
  $anexo = fread($fp, filesize($path));
  $anexo = chunk_split(base64_encode($anexo));
  fclose($fp);
}

  //Monta o Corpo da Mensagem  
  //====================================================
  //As tags em HTML serão interpretadas pelo email
$email_conteudo = "--$boundary".PHP_EOL;
$email_conteudo .= "Content-Type:text/html; charset = 'utf-8'".PHP_EOL;
  //Colocando o título e formatando com os styles dentro da div
$email_conteudo .= "
<div style= 'background:#efefef;padding-left:50px;padding-top:50px;padding-bottom:5px;padding-right:50px;font-size:large; font-color:black'>
<div style='width:100%;background:#ffffff;height:120px;text-align:center;border-radius:9px'><img src='https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png' width='180' height='100'></div><br>

<h1 style='text-align:left;color:black'><b>Uma nova cotação foi requisitada!</b></h1>\n";

  //Informações que foram passadas pelo formulário
  //Verifica se todas foram passadas
if($nome){
  $email_conteudo .= "<b>Nome:</b> $nome <br> \n";
}else{
  $email_conteudo .= "<b>Nome:</b> Nenhum nome informado <br> \n";
}

if($nomeEmpresa){
  $email_conteudo .= "<b>Nome Empresa:</b> $nomeEmpresa <br> \n";
}else{
  $email_conteudo .= "<b>Nome Empresa:</b><br> \n";
}

if($cnpj){
  $email_conteudo .= "<b>CNPJ:</b> $cnpj <br> \n";
}else{
  $email_conteudo .= "<b>CNPJ:</b><br> \n";
}

if($email){
  $email_conteudo .= "<b>Email:</b> $email <br> \n";
}else{
  $email_conteudo .= "<b>Email:</b><br> \n";
}

if($telefone){
  $email_conteudo .= "<b>Telefone:</b> $telefone <br> \n";
}else{
  $email_conteudo .= "<b>Telefone:</b><br> \n";
}

if($origem){
  $email_conteudo .= "<b>Origem:</b> $origem <br> \n";
}else{
  $email_conteudo .= "<b>Origem:</b><br> \n";
}

if($destino){
  $email_conteudo .= "<b>Destino:</b> $destino <br> \n";
}else{
  $email_conteudo .= "<b>Destino:</b><br> \n";
}

if($path = $_FILES["fispq"]["tmp_name"]){
  $email_conteudo .= "<b> FISPQ:</b> Arquivo segue em anexo<br>\n";
}else{
  $email_conteudo .= "<b> FISPQ:</b><br>\n";
}

if($tipoVeiculo){
  $email_conteudo .= "<b>Tipo de Veículo:</b> $tipoVeiculo <br> \n";
}else{
  $email_conteudo .= "<b>Tipo de Veículo:</b><br> \n";
}

if($quantidade){
  $email_conteudo .= "<b>Quantidade:</b> $quantidade $unidadeMedida<br>  \n";
}else{
  $email_conteudo .= "<b>Quantidade:</b><br>  \n";
}

if($frequencia){
  $email_conteudo .= "<b>Frequência:</b> $frequencia <br> \n";
}else{
  $email_conteudo .= "<b>Frequência:</b><br> \n";
}

if($data){
  $email_conteudo .= "<b>Data prevista para carregamento:</b> $dataCerta <br>\n";
}else{
  $email_conteudo .= "<b>Data prevista para carregamento:</b><br>\n";
}

if ($obs){
  $email_conteudo .= "<b>Observações:</b> $obs  <hr></div>\n";
}else{
  $email_conteudo .= "<b>Observações:</b> Nenhuma observação feita.  <hr></div>\n";
}
  //Divs com o rodapé do email
$email_conteudo .= "<div style= 'background:#efefef;padding-left:50px;padding-top:5px;padding-bottom:50px;font-color:black;'>
<b>Atenciosamente, <br><big>Transtassi Comercial</big></b> <br>comercial@transtassi.com.br <br> Telefone: (35)2101-1626 <br> <a href='https://site.transtassi.com.br/index.php'> www.transtassi.com.br</a> <br>
<small><i>'Nossos planos para amanhã dependem da segurança de hoje'</i></small><br><br>
<a href='https://site.transtassi.com.br/index.php' target='_blank'><button style='padding:10px;background:#c10b1c;color:white;border-radius:12px;height:50px;width:130px'>Voltar ao Site</button></a></div>\n";
$email_conteudo .= "--$boundary".PHP_EOL;
if($path = $_FILES["fispq"]["tmp_name"]){
     //Anexa o arquivo no email
  $email_conteudo .= "Content-Type: ".$fileType."; name =\"".$fileName."\"".PHP_EOL;
  $email_conteudo .= "Content-Transfer-Encoding: base64".PHP_EOL;
  $email_conteudo .= "Content-Disposition: attachment; filename=\"".$fileName."\"".PHP_EOL;
  $email_conteudo .= "$anexo". PHP_EOL;
  $email_conteudo .= "--$boundary".PHP_EOL;
}
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: site@transtassi.com.br\r\n"; // remetente
$headers .= "Return-Path: site@transtassi.com.br\r\n"; // return-path
$email_destinatario = "gustavo.souza@transtassi.com.br\r\n"; // Destinatário

//Enviando o email 
  //==================================================== 
$envio = mail($email_destinatario,"Cotação",$email_conteudo, $headers);

if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>