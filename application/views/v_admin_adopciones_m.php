<h2>Adopciones</h2>
<h3>Modificar adopcion</h3>
<?php 
 var_dump($adopciones);
        if($adopciones != NULL) {
                        
            foreach( $adopciones as $adopcion ): 
?>
                <form action="<?= base_url("index.php/adopciones/modificar_adopcion");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idadopcion" value="<?=$adopcion['idadopcion']?>">
                    <label>Nombre en la adopción</label>
                    <input type="text" name="nombre" id="nombre" value= <?=$adopcion['nuevonombre']?> required>

                    <label>Fecha de la adopcion</label><br>
                    <input type="date" name="fecha" value= <?= $adopcion['fecha'] ?>><br>
                    <img class= "vista" src="<?= base_url("subidas/adopciones/" . $adopcion['foto'])?> " alt="adopcion">
                    <label>Cambiar imagen</label>
                    <input type="hidden" name="imagen" value="<?=$adopcion['foto']?>">
                    <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
                    <?php if(isset($error)) { ?>
                        <div class="error_modal"><?= $error;?></div>
                    <?php } ?>
                    <button type="submit">Agregar</button>
                </form>
            <?php endforeach; 
        }else{
            echo "No encontramos la dopción en la base de datos";
        }
            ?>
