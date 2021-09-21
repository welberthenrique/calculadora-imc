<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div id="principal">
        
        <div id="formulario">
            <div id="titulo">
                <h1>Calculadora de IMC</h1>
            </div>
                <form method="POST" action="config.php">
                
                    
                    <fieldset><legend>Dados Pessoais</legend>
                        <div class="field">
                            <label class="form" for="nome">Nome:</label>
                            <input class="campo" type="text" id="nome" name="nome" required><br/>
                            <label for="nome" class="form">Altura:</label>
                            <input class="campo" type="float" id="altura" name="altura" required><br/>
                            <label for="peso" class="form">Peso:</label>
                            <input class="campo" type="number" id="peso" name="peso" required><br/>
                            
                            <input type="radio" id="m" name="sexo" value="Masculino">
                            <label class="form" for="m">Masculino</label>
                            <br/>
                            <input type="radio" id="f" name="sexo" value="Feminino">
                            <label class="form" for="f">Feminino</label>
                            <br/>
                            <button class="button" type="submit">Calcular</button>
                        </div>
                    </fieldset>
                    
                </form>
        </div> 
        
    </div>
</body>
</html>