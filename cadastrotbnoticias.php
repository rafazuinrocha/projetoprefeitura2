<?php    
$data = date("Y-m-d");
$hora = date("H:i:s");
$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4);
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min";

echo "<h1>Sistema de Cadastro de Notícias</h1>";
echo "<hr><br>";
echo "<form action='inserir.php' method='post'>";
echo "Data: $novadata - Hora: $novahora<br>";
echo "Título do Texto:<input name='titulo' type='text' size=50 maxlength=200> *<br>";
echo "Subtítulo do Texto:<input name='subtitulo' type='text' size=50 maxlength=200> <br>";
echo "Texto:<br><textarea name='texto' rows=10 cols=100></textarea> <br><br>";
echo "Status:<input name='status' type='text' size=2> <br>";
echo "<br><input type='submit' value='Cadastrar'>";
echo "</form>";
echo "<br><hr>";
echo "<i>Campos marcados com <b>*</b> são obrigatórios no cadastro.<br>";
echo "<b>Observação</b>: Será inserido no seu cadastro a data atual, bem como a hora atual do cadastro<br>";

?>