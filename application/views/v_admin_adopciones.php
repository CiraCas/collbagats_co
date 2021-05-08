<section>
    <h2>Selecciona gato para la adopcion</h2>
    <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
                        <h3><?=$gato['idgato']?>. <?=$gato['nombre']?></h3>
                        <a href="<?= base_url("index.php/adopciones/adopcion2/". $gato['idgato']);?>">
                            <?php if( $gato['imagen'] != '0') { 
                            ?>
                                <img src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                            <?php } else { 
                            ?>
                                <img src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                            <?php } ?>
                        </a>
                        <?php  if($gato['sexo'] != 'M') {?>
                            <i class="fas fa-venus"></i>
                        <?php } else { ?>
                            <i class="fas fa-mars"></i>
                        <?php } ?>

                        <div><?=$gato['descripcion']?></div>
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
    <!-- <table id="table_id" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>id</th>
                <th>Selecciona gato</th>    
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Descripción</th>
                <!-- <th>Selecciona</th>

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
                        </td> 

                    </tr>
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
            

        </tbody>
    </table> -->
</section>
<section>
<h3>Adopciones</h3>
<table id="tabla-adopciones" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>Adopción</th>
                <th>Foto</th>    
                <th>Nombre</th>
                <th>Antiguo nombre</th>
                <th>Fecha</th>
                <th>Adoptante</th>
               

            </tr>
        </thead>   
        <tbody>
            <?php 
                if($adopciones != NULL) {
                    
                    foreach( $adopciones as $adopcion ): 
            ?>
                    <tr>
                        <td><?= $adopcion['idadopcion']?></td>
                        <td><?= $adopcion['foto']?></td>
                        <td><?=$adopcion['nuevonombre']?></td>
                        <td><?=$adopcion['nombre']?></td>
                        <td><?=$adopcion['fecha']?></td>
                        <td><?=$adopcion['dniadoptante']?></td>
                        <td class= "casilla-iconos">
                            <a href="<?= base_url("index.php/adopciones/borrar_adopcion/". $adopcion['idadopcion']);?>">
                                <i class="fas fa-trash-alt icon-admin"></i>
                            </a>
                            <a href="<?= base_url("index.php/adopciones/adopcion3/". $adopcion['idadopcion']);?>">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td> 

                    </tr>
                <?php endforeach; 
            }else{
                echo "No hay adopciones en la base de datos";
            }
            ?>
            

        </tbody>
    </table>
</section>
<section>
<h3>Adoptantes</h3>
<table id="tabla-adoptantes" class="display tabla-admin" border='1'>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>    
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th></th>
               

            </tr>
        </thead>   
        <tbody>
            <?php 
                if($adoptantes != NULL) {
                    
                    foreach( $adoptantes as $adoptante ): 
            ?>
                    <tr>
                        <td><?= $adoptante['dni']?></td>
                        <td><?= $adoptante['nombre']?></td>
                        <td><?=$adoptante['apellido1']?></td>
                        <td><?=$adoptante['apellido2']?></td>
                        <td class= "casilla-iconos">
                            <a href="<?= base_url("index.php/adopciones/borrar_adoptante/". $adoptante['dni']);?>">
                                <i class="fas fa-trash-alt icon-admin"></i>
                            </a>
                            <a href="<?= base_url("index.php/adopciones/adoptante/". $adoptante['dni']);?>">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td> 

                    </tr>
                <?php endforeach; 
            }else{
                echo "No hay adoptantes en la base de datos";
            }
            ?>
            

        </tbody>
    </table>
</section>
