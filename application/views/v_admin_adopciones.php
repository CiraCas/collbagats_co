<section>
    <h3>Gatos en adopción</h3>
    <table id="table_id" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>id</th>
                <th>Selecciona gato</th>    
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Descripción</th>
                <!-- <th>Selecciona</th> -->

            </tr>
        </thead>   
        <tbody>
            <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
                    <tr>
                        <td><?=$gato['idgato']?></td>
                        <td> <a href="<?= base_url("index.php/adopciones/adopcion2/". $gato['idgato']);?>">
                            <?php if( $gato['imagen'] != '0') { 
                            ?>
                                <img src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                            <?php } else { 
                            ?>
                                <img src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                            <?php } ?>
                        </a></td>
                        <td><?=$gato['nombre']?></td>
                        <td><?=$gato['sexo']?></td>
                        <td><?=$gato['descripcion']?></td>
<!--                         <td class= "casilla-iconos">
                        <a href="<?= base_url("index.php/adopciones/adopcion/". $gato['idgato']);?>">
                            <i class="fas fa-paw"></i>
                        </a>
                        </td> -->

                    </tr>
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
            

        </tbody>
    </table>
</section>