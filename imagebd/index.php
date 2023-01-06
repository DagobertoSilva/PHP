<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aqua;
        }
        .button input{
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <h1>Envie sua foto abaixo</h1>
    <form method="POST" action="salvar.php" enctype="multipart/form-data">
    <div class="button">
    <input type="file" accept=".jpg" name="foto">
    </div>

    <button type="submit">Enviar</button>
    </form>
</body>
</html>