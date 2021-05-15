<h2>Noticias</h2>
<h3>Modificar noticia</h3>
<?php 

        if($noticias != NULL) {
                        
            foreach( $noticias as $noti ): 
?>
                <form class="formulario-admin" action="<?= base_url("index.php/noticias/modificar_noticia");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idactualidad" value="<?=$noti['idactualidad']?>">
                    
                    <div class="centrar-imagen">
                        <?php if( $noti['imagen'] != '0') { 
                                ?>
                                    <img class= "vista" src="<?= base_url("subidas/actualidad/" . $noti['imagen'])?> " alt="noticia">
                                <?php } else { 
                                ?>
                                    <img class= "vista" src="<?= base_url("subidas/actualidad/noImage.jpg")?> " alt="noticia">
                        <?php } ?>
                    </div>

                    <div class="contenedor-apartados">
                        <div class="apartado-form">
                            <label>Título*</label>
                            <input class="input-text" type="text" name="titulo" id="titulo" value= "<?=$noti['titulo']?>" required>
                        </div>

                        <div class="apartado-form">
                            <label>Fecha*</label>
                            <input class="input-text" type="date" name="fecha" value= <?= $noti['fecha'] ?> required>
                        </div>

                        <div class="apartado-form">
                            <label >Descripción*</label>
                            <textarea class="input-text" type="text" name="descripcion" id="descripcion"><?=$noti['descripcion']?></textarea>
                        </div>

                        <div class="apartado-form">
                            <label>Cambiar imagen</label>
                            <input type="hidden" name="imagen" value="<?=$noti['imagen']?>">
                            <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg">
                            <?php if(isset($error)) { ?>
                                <div class="error_modal"><?= $error;?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <p class="campos-oblig">*Campos obligatorios</p>
                    <div class="alin-derecha">
                        <button class="boton" type="submit">Actualizar</button>
                    </div>
                </form>
            <?php endforeach; 
        }else{
            echo "No encontramos la noticia en la base de datos";
        }
            ?>