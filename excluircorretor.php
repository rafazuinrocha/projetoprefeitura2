<?php

    include 'conecta.inc';

    $registros = $_POST['data'];

    $dados = json_decode($registros, true);

    var_dump($dados);



   $codigo= $dados["codigo"];

   $query= "update tbcorretores set status='0' where codigo='$codigo'"; 

   
   $resultc = mysqli_query($con, $query) or die ("Erro na Exclusão");
  
   // exit();
   mysqli_close($con);

?>
