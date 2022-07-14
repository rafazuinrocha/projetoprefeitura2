<?php
function trata_injection($sql)
{
// remove palavras que contenham sintaxe sql  /i(não diferencia maiúsculas e minúsculas)
  mb_internal_encoding('UTF-8');
  $sql = preg_replace("/(from|select|insert|like|delete|where|drop table|show tables|#|\*|--|\\\\)/i","",$sql);
  //SE ENCONTRAR MAIS DE UM ESPAÇO EM BRANCO REMOVE
  $sql = preg_replace('/\s+/', ' ', $sql);
  $sql = str_replace("'", " ", $sql);
  $sql = trim($sql);//limpa espaços vazio
 // $sql = str_replace('Ú', 'U', $sql);
  //$sql = str_replace('Û', 'U', $sql);
    
  $sql = mb_strtoupper($sql);//MAIÚSCULA COM ACENTRO
  $sql = strip_tags($sql);//tira tags html e php
  if(!get_magic_quotes_gpc()) // se a opção no php.ini não estiver habilitada
  {
     $sql = addslashes($sql);//Adiciona barras invertidas a uma string
  }
  return $sql;
}
//se a opção no php.ini já estiver habilitada e você der addlashes terá duas barras.
?>