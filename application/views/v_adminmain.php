<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=<?= base_url("/assets/css/normalize.css");?>>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href=<?= base_url("/assets/css/main.css");?>>
        <title>Administrador</title>
    </head>
    <body class="bo-page">

        <div class="bo-flex-container">

            <aside class="bo-aside">
               <?php $this->load->view('admin_sidebar');?>
            </aside>


            <section class="bo-main">
                <?php $this->load->view($admin_contenido);?>
            </section>

        </div>
    </body>
</html>
