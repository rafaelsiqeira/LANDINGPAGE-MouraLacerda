<?php
 header("Access-Control-Allow-Origin: *");


$ToEmail = 'ens@mouralacerda.edu.br'; 
//ToEmail = 'rafaella.torelli@gmail.com'; 
$subject = 'Interesse Escola Nacional de Seguros';
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$message .= "Curso: ". "\n" .$_POST["curso"]."<br>\n\n"; 
$message .= "Nome: ". "\n" .$_POST["nome"]."<br>\n\n"; 
$message .= "RG: ". "\n" .$_POST["rg"]."<br>\n\n"; 
$message .= "Orgão/Estado Emissor: ". "\n" .$_POST["orgaoestado"]."<br>\n\n"; 
$message .= "Data de Nascimento: ". "\n" .$_POST["datanascimento"]."<br>\n\n"; 
$message .= "Escolaridade: ". "\n" .$_POST["escolaridade"]."<br>\n\n"; 
$message .= "Endereço: ". "\n" .$_POST["endereco"]."<br>\n\n"; 
$message .= "Bairro: ". "\n" .$_POST["bairro"]."<br>\n\n"; 
$message .= "Cidade: ". "\n" .$_POST["cidade"]."<br>\n\n"; 
$message .= "UF: ". "\n" .$_POST["uf"]."<br>\n\n"; 
$message .= "Telefone: ". "\n" .$_POST["telefone"]."<br>\n\n"; 
$message .= "E-mail: ". "\n" .$_POST["email"]."<br>\n\n"; 
$message .= "Você é corretor de seguros?" . "\n" .$_POST["corretor"]."<br>\n\n"; 
mail($ToEmail, $subject, $message, $mailheader) or die ("Failure"); 


     echo '<script language="javascript">';
     echo 'alert("Obrigado! Entraremos em contato em até 48 horas para falar sobre seu interesse!")';
     echo '</script>';

     echo '<script language="javascript">';
     echo ' window.location.href = "index.php";';
     echo '</script>';


?>
