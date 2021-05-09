<h3>Modificar datos</h3>
<?php 
 var_dump($gatos);
        if($gatos != NULL) {
                        
            foreach( $gatos as $gato ): 
?>
                <form action="<?= base_url("index.php/gatos/modificar_gato");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idgato" value="<?=$gato['idgato']?>">
                    <label>Nombre</label>
                    <input type="text" name="nombre" id="nombre" value= "<?=$gato['nombre']?>" required>
                    <fieldset>
                        <legend>Sexo</legend>
                        <?php if($gato['sexo'] != 'H'){?>
                            <label>Macho</label>
                            <input type="radio" name="genero" value= "M" checked> <br>
                            <label>Hembra</label>
                            <input type="radio" name="genero" value= "H" > <br>
                        <?php }else{ ?>
                            <label>Macho</label>
                            <input type="radio" name="genero" value= "M" > <br>
                            <label>Hembra</label>
                            <input type="radio" name="genero" value= "H" checked> <br>
                        <?php } ?>
                    </fieldset>
                    <label>descripción</label><br>
                    <textarea type="text" name="descripcion" id="descripcion" ><?= $gato['descripcion'] ?></textarea><br>

                    <?php if( $gato['imagen'] != '0') { 
                        ?>
                            <img class= "vista" src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                        <?php } else { 
                        ?>
                             <img class= "vista" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato"></td>
                        <?php } ?>

                    <label>Cambiar imagen</label>
                    <input type="hidden" name="imagen" value="<?=$gato['imagen']?>">
                    <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
                    <?php if(isset($error)) { ?>
                        <div class="error_modal"><?= $error;?></div>
                    <?php } ?>
                    <button type="submit">Actualizar</button>
                </form>
            <?php endforeach; 
        }else{
            echo "El gato no existe en la base de datos";
        }
            ?>
