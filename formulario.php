<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />
    <style type="text/css">
        body { font-family: Arial; }
        label { font-size: 12px; font-weight: bold; }
        .campos { border-color: orange; }
        #descricao { width: 300px; height: 200px; }
    </style>
	<title>Untitled 12</title>
</head>

<body>

    <form method="post" action="resultado.php?enviar=true">
        
        <label>Seu nome:</label><br />
        <input type="text" name="nome" class="campos" maxlength="255" /><br /><br />
        
        <label>Email</label><br />
        <input type="text" name="email" class="campos" maxlength="255" /><br /><br />
        
        <label>Setor</label><br />
        <input type="radio" name="setor" value="Financeiro" /> Financeiro
        <input type="radio" name="setor" value="Suporte" /> Suporte<br /><br />
        
        <label>Assunto</label><br />
        <select name="assunto" class="campos">
            <option value="Esporte">Falar sobre esportes</option>
            <option value="Economia">Falar sobre economia</option>
        </select>
        <br /><br />
        <label>Melhor horário de atendimento</label><br />
        <input type="checkbox" name="horario[]" value="Manhã" /> Manhã
        <input type="checkbox" name="horario[]" value="Tarde" /> Tarde
        <input type="checkbox" name="horario[]" value="Noite" /> Noite
        <br /><br />
        <label>Descrição</label><br />
        <textarea name="descricao" id="descricao" class="campos"></textarea><br />
        <input type="submit" value="Enviar" />
        
    </form>

</body>
</html>