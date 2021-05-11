<h2>Noticias</h2>
<h3>Modificar noticia</h3>
<?php 

        if($noticias != NULL) {
                        
            foreach( $noticias as $noti ): 
?>
                <form class="formulario-admin" action="<?= base_url("index.php/noticias/modificar_noticia");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idactualidad" value="<?=$noti['idactualidad']?>">
                    <label>Título</label>
                    <input type="text" name="titulo" id="titulo" value= "<?=$noti['titulo']?>" required>

                    <label>Fecha</label><br>
                    <input type="date" name="fecha" value= <?= $noti['fecha'] ?> required><br>
                    <label >Descripcion</label>
                    <textarea type="text" name="descripcion" id="descripcion"><?=$noti['descripcion']?></textarea><br>
                    <img  src="<?= base_url("subidas/actualidad/" . $noti['imagen'])?> " alt="noticia">
                    <label>Cambiar imagen</label>
                    <input type="hidden" name="imagen" value="<?=$noti['imagen']?>">
                    <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
                    <?php if(isset($error)) { ?>
                        <div class="error_modal"><?= $error;?></div>
                    <?php } ?>
                    <button class="boton" type="submit">Actualizar</button>
                </form>
            <?php endforeach; 
        }else{
            echo "No encontramos la noticia en la base de datos";
        }
            ?>