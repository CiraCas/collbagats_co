<h2>Selecciona gato para la adopcion</h2>
<section class="grupos-fotos">
    
    <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
                    <a href="<?= base_url("index.php/adopciones/adopcion2/". $gato['idgato']);?>">
                        <section class="grupo-foto">
                            <h3><?=$gato['idgato']?>. <?=$gato['nombre']?></h3>
                           <!--  <a href="<?= base_url("index.php/adopciones/adopcion2/". $gato['idgato']);?>"> -->
                                <?php if( $gato['imagen'] != '0') { 
                                ?>
                                    <img class="admin-foto" src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
                                <?php } else { 
                                ?>
                                    <img class="admin-foto" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
                                <?php } ?>
                            
                            <?php  if($gato['sexo'] != 'M') {?>
                                <i class="fas fa-venus icon-sex"></i>
                                <div>Hembra</div>
                            <?php } else { ?>
                                <i class="fas fa-mars icon-sex"></i>
                                <div>Macho</div>
                            <?php } ?>

                            <div><?=$gato['descripcion']?></div>
                        </section>
                    </a>
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
    
</section>

<h2>Adopciones</h2>

<section class="grupos-fotos">
    <?php 
        if($adopciones != NULL) {
                    
            foreach( $adopciones as $adopcion ): 
    ?>
    <section class="grupo-foto">
                <h3>Adopción: <?= $adopcion['idadopcion']?> </h3>
                    
                <?php if( $adopcion['foto'] != '0') { ?>
                    <img class="admin-foto" src="<?= base_url("subidas/adopciones/" . $adopcion['foto'])?> " alt="adopcion">
                <?php } else { ?>
                    <img class="admin-foto" src="<?= base_url("subidas/gatos/sombra.png")?> " alt="adopcion">
                <?php } ?>

                    <div>Nombre de Adopción:</div>
                    <span><?=$adopcion['nuevonombre']?><span>
                    <div>Antes:</div>
                    <span><?=$adopcion['nombre']?></span>
                    <div>Fecha de la Adopción:</div>
                    <span><?=$adopcion['fecha']?></span>
                    <div>DNI Adoptante</div>
                    <span><?=$adopcion['dniadoptante']?></span>
                    <div>
                            <a href="<?= base_url("index.php/adopciones/borrar_adopcion/". $adopcion['idadopcion']);?>">
                                <i class="fas fa-trash-alt icon-modif"></i>
                            </a>
                            <a href="<?= base_url("index.php/adopciones/adopcion3/". $adopcion['idadopcion']);?>">
                                <i class="fas fa-edit icon-modif"></i>
                            </a>
                    </div>
    </section>
                    
                <?php endforeach; 
            }else{
                echo "No hay adopciones en la base de datos";
            }
            ?>
            
</section>
<section>
<h2>Adoptantes</h2>
<div class="scroll">
    <table id="tabla-adoptantes" class="display tabla-admin">
            <thead>
                <tr>
                    <th class="tabla-primero">DNI</th>
                    <th>Nombre</th>    
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th class="tabla-ultimo"></th>
                

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
                                    <i class="fas fa-trash-alt icon-tabla"></i>
                                </a>
                                <a href="<?= base_url("index.php/adopciones/adoptante/". $adoptante['dni']);?>">
                                    <i class="fas fa-edit icon-tabla"></i>
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
    </div>
</section>
