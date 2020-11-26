<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha lista "TODO" - EEJM</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <div id="main-container">
        <div>
            <h1 id="titulo-principal">Atividades do dia</h1>
        </div>
    <form action="insere.php" method="POST">
        <label class="texto-padrao" for="item_a_fazer">Adicionar tarefa:</label>
        <input type="text" name="item_a_fazer" id="item_a_fazer" placeholder="Nome do item a fazer"/>
        <button class="btn btn-sm btn-primary" type="submit">+</button>
    </form>
        <div>
            <table>
                <tr>
                    <th>NOME</th>
                    <th>REMOVER</th>
                </tr>
                    <?php include 'mostra_lista.php'?>
            </table>
        </div>
    </div>
</body>
</html>