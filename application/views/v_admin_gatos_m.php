<h3>Modificar datos</h3>
<?php 

        if($gatos != NULL) {
                        
            foreach( $gatos as $gato ): 
?>
                <form class="formulario-admin" action="<?= base_url("index.php/gatos/modificar_gato");?>" method="post" enctype="multipart/form-data">
                    <div class="centrar-imagen">
                        <?php if( $gato['imagen'] != '0') { 
                                ?>
                                    <img class= "vista" src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                                <?php } else { 
                                ?>
                                    <img class= "vista" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                        <?php } ?>
                    </div>
                    <input type="hidden" name="idgato" value="<?=$gato['idgato']?>">
                    <div class="contenedor-apartados">
                        <div class="apartado-form">
                            <label>Nombre*</label>
                            <input type="text" class="input-text" name="nombre" id="nombre" value= "<?=$gato['nombre']?>" required>
                        </div>
                        <div class="apartado-form">
                            <fieldset>
                                <legend>Sexo*</legend>
                                <?php if($gato['sexo'] != 'H'){?>
                                    <div>Macho</div>
                                    <input type="radio" name="genero" value= "M" checked>
                                    <div>Hembra</div>
                                   <input type="radio" name="genero" value= "H" >
                                <?php }else{ ?>
                                    <div>Macho</div>
                                    <input type="radio" name="genero" value= "M" >
                                    <div>Hembra</div>
                                    <input type="radio" name="genero" value= "H" checked>
                                <?php } ?>
                            </fieldset>
                        </div>
                        <div class="apartado-form">
                            <label>Descripción</label>
                            <textarea class="input-text" type="text" name="descripcion" id="descripcion" ><?= $gato['descripcion'] ?></textarea>
                        </div>
                        <div class="apartado-form">
                            <label>Cambiar imagen</label>
                            <input type="hidden" name="imagen" value="<?=$gato['imagen']?>">
                            <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
                        </div>
                        <?php if(isset($error)) { ?>
                            <div class="error_modal"><?= $error;?></div>
                        <?php } ?>
                    </div>
                    <p class="campos-oblig">*Campos obligatorios</p>
                    <div class="alin-derecha">
                        <button class="boton" type="submit">Actualizar</button>
                    </div>
                </form>
            <?php endforeach; 
        }else{
            echo "El gato no existe en la base de datos";
        }
            ?>
