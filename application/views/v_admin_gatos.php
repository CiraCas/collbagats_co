<h2>Gatos</h2>
<section>
    <h3>Añade un nuevo gato</h3>
    <form action="<?= base_url("index.php/gatos/insertar_gato");?>" method="post" enctype="multipart/form-data">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <div></div>
        <fieldset>
            <legend>Sexo</legend>
            <label>Macho</label>
            <input type="radio" name="genero" value= "M" checked> <br>
            <label>Hembra</label>
            <input type="radio" name="genero" value= "H" > <br>
        </fieldset>
        <label>descripción</label><br>
        <textarea type="text" name="descripcion" id="descripcion"></textarea><br>
        <label>Selecciona Imagen</label>
        <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg"> <br>
        <?php if(isset($error)) { ?>
            <div class="error_modal"><?= $error;?></div>
        <?php } ?>
        <button type="submit">Agregar</button>
    </form>
</section>
<section>
    <h3>Gatos en adopción</h3>
    <table id="table_id" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>id</th>
                <th>Foto</th>    
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Descripción</th>

            </tr>
        </thead>   
        <tbody>
            <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
                    <tr>
                        <td><?=$gato['idgato']?></td>
                        <td> 
                        <?php if( $gato['imagen'] != '0') { 
                        ?>
                            <img src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato"></td>
                        <?php } else { 
                        ?>
                             <img src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato"></td>
                        <?php } ?>
                        <td><?=$gato['nombre']?></td>
                        <td><?=$gato['sexo']?></td>
                        <td><?=$gato['descripcion']?></td>
                        <td class= "casilla-iconos">
                        <a href="<?= base_url("index.php/gatos/borrar_gato/". $gato['idgato']);?>">
                            <i class="fas fa-trash-alt icon-admin"></i>
                        </a>
                        <a href="<?= base_url("index.php/gatos/gato2/". $gato['idgato']);?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        </td>

                    </tr>
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
            

        </tbody>
    </table>
</section>
