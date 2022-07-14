<?php    


echo "<h1>Sistema de Cadastro de Notícias</h1>";
echo "<hr><br>";
echo "<form action='inserir.php' method='post'>";
echo "Usuário:<input name='nome' type='text' size=30 maxlength=255> *<br>";
echo "Senha:<input name='senha' type='password' size=30 maxlength=255> *<br>";
echo "Nível:<input name='nivel' type='text' size=5> *<br>";
echo "<input type='submit' value='Cadastrar'>";
echo "</form>";
echo "<br><hr>";
echo "<i>Campos marcados com <b>*</b> são obrigatórios no cadastro.<br>";

?>
