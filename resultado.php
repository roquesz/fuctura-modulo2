<?php
echo $_POST['nome'];
echo '<br />';
echo $_POST['email'];
echo '<br />';
echo $_POST['setor'];
echo '<br />';
echo $_POST['assunto'];
echo '<br />';
$horarios = $_POST['horario'];
foreach($horarios as $horario){
    echo $horario.'<br />';
}
echo $_POST['descricao'];

?>