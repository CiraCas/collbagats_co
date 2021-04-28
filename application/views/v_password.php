<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?= base_url("/assets/css/normalize.css");?>">
        <link rel="stylesheet" href="<?= base_url("/assets/css/main.css");?>">
        <title><?= $titulo; ?></title>
        <script src="<?= base_url("assets/js/password.js");?>" defer></script>
    </head>
    <body>

            <h2>Debes cambiar tu contraseña</h2>

            <form class="formulario" name="formulario" method='post' action='<?= base_url("index.php/login/cambiar_password");?>' onsubmit="return validaCampos();">
                <label>Nueva Contraseña</label>
                <input class="input-text" type="password" name="password">
                <span id="msgpassword"></span>
                <label>Repite la nueva contraseña</label>
                <input class="input-text" type="password" name="password2">
                <span id="msgpassword2"></span>
                <button>Cambiar</button>
            </form>


    </body>
</html>