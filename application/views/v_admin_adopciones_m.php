<h2>Adopciones</h2>
<h3>Modificar adopcion</h3>
<?php 

        if($adopciones != NULL) {
                        
            foreach( $adopciones as $adopcion ): 
?>
                <form class="formulario-admin" action="<?= base_url("index.php/adopciones/modificar_adopcion");?>" method="post" enctype="multipart/form-data">
                    <div class="centrar-imagen">
                        <?php if( $adopcion['foto'] != '0') { 
                                ?>
                                    <img  src="<?= base_url("subidas/adopciones/" . $adopcion['foto'])?> " alt="adopcion">
                                <?php } else { 
                                ?>
                                    <img class= "vista" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato"></td>
                        <?php } ?>
                    </div>
                    <input type="hidden" name="idadopcion" value="<?=$adopcion['idadopcion']?>">
                    <div class="contenedor-apartados">

                        <div class="apartado-form">
                            <label>Nombre Adoptado*</label>
                            <input class="input-text" type="text" name="nuevonombre" id="nuevonombre" value= "<?=$adopcion['nuevonombre']?>" required>
                        </div>

                        <div class="apartado-form">
                            <label>Fecha de la Adopción*</label>
                            <input class="input-text" type="date" name="fecha" value= <?= $adopcion['fecha'] ?>><br>
                        </div>

                        <div class="apartado-form">
                            <label>Cambiar Imagen</label>
                            <input type="hidden" name="imagen" value="<?=$adopcion['foto']?>">
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
            echo "No encontramos la dopción en la base de datos";
        }
            ?>
