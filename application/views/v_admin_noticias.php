<h2>Actualidad</h2>
<section>
    <h3>Añade una nueva noticia</h3>
    <form class="formulario-admin" action="<?= base_url("index.php/noticias/insertar_noticia");?>" method="post" enctype="multipart/form-data">
        <label>Título</label>
        <input type="text" name="titulo" id="titulo" required>
        <div></div>
        <label >Fecha</label>
        <input type="date" name="fecha" required>
        <label>descripción</label><br>
        <textarea type="text" name="descripcion" id="descripcion"></textarea><br>
        <label>Selecciona Imagen</label>
        <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
        <?php if(isset($error)) { ?>
            <div class="error_modal"><?= $error;?></div>
        <?php } ?>
        <button class="boton" type="submit">Agregar</button>
    </form>
</section>
<section class="grupos-fotos">
    
    <?php 
                if($noticias != NULL) {
                    
                    foreach( $noticias as $noti ): 
            ?>
                        <section class="grupo-foto">
                            <h3><?=$noti['titulo']?></h3>
                            <?php if( $noti['imagen'] != '0') { 
                            ?>
                                <img src="<?= base_url("subidas/actualidad/" . $noti['imagen'])?> " alt="noticia">
                            <?php } else { 
                            ?>
                                <img src="<?= base_url("subidas/actualidad/noImage.jpg")?> " alt="noticia">
                            <?php } ?>
                            
                            <div><?=$noti['fecha']?></div>
                            <div><?=$noti['descripcion']?></div>
                            <a href="<?= base_url("index.php/noticias/borrar_noticia/".$noti['idactualidad']);?>">
                                <button class="boton">Borrar noticia</button>
                            </a>
                            <a href="<?= base_url("index.php/noticias/noticia2/".$noti['idactualidad']);?>">
                                <button class="boton">Modificar noticia</button>
                            </a></br>
                        </section>
                <?php endforeach; 
            }else{
                echo "No hay noticias actualmente";
            }
            ?>
    
</section>