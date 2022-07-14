<?php

  $usuario = $_POST['data'];

  $dados = json_decode($usuario, true);

  var_dump($dados);
 
  echo $dados["nome"];


?>

<a id= "link" rel="noopener" aria-label="Enviar mensagem no WhatsApp" href="https://api.whatsapp.com/send?phone=5511945426288&text=Gostaria de receber mais informações sobre Casa com 3 dormitórios à venda, 220 m² por R$ 760.000,00 - Condomínio Altos De Itaici - Indaiatuba/SP http://www.imobbindaia.com.br/imovel/casa-com-3-dormitorios-a-venda-220-m-por-760000-condominio-altos-de-itaici-indaiatuba-sp/CA0353-IMW8" target="_blank" class="btn btn-md btn-primary">Contato</a>

<script type="text/javascript">
			window.onload = function(){
				document.getElementById('link').click();
			}
</script>

<?php
  exit;
//%20;

?>
