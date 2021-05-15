<h2>Gatos</h2>
<section>
    <h3>Añade un nuevo gato</h3>
    <form class="formulario-admin" action="<?= base_url("index.php/gatos/insertar_gato");?>" method="post" enctype="multipart/form-data">
        <div class="contenedor-apartados">
            <div class="apartado-form">
                <label>Nombre*</label>
                <input type="text" class="input-text" name="nombre" id="nombre" required>
            </div>
            <div class="apartado-form">
                <fieldset>
                    <legend>Sexo*</legend>
                    <div>Macho</div>
                    <input type="radio" name="genero" value= "M" checked>
                    <div>Hembra</div>
                    <input type="radio" name="genero" value= "H" >
                </fieldset>
            </div>
            <div class="apartado-form">
                <label>Descripción</label>
                <textarea class="input-text" type="text" name="descripcion" id="descripcion"></textarea>
            </div>
            <div class="apartado-form">
                <label>Selecciona Imagen</label>
                <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg">
            </div>
            <?php if(isset($error)) { ?>
                <div class="error_modal"><?= $error;?></div>
            <?php } ?>
        </div>
        <p class="campos-oblig">*Campos obligatorios</p>
        <div class="alin-derecha">
            <button class="boton" type="submit">Agregar</button>
        </div>
    </form>
</section>

<h3>Gatos en adopción</h3>
<section class="grupos-fotos">
    <?php 
                if($gatos != NULL) {
                    
                    foreach( $gatos as $gato ): 
            ?>
                   
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
                            <?php } else { ?>
                                <i class="fas fa-mars icon-sex"></i>
                            <?php } ?>

                            <div><?=$gato['descripcion']?></div>
                            <div>
                                <a href="<?= base_url("index.php/gatos/borrar_gato/". $gato['idgato']);?>">
                                    <i  class="fas fa-trash-alt  icon-modif"></i>
                                </a>
                                <a href="<?= base_url("index.php/gatos/gato2/". $gato['idgato']);?>">
                                    <i  class="fas fa-edit icon-modif"></i>
                                </a>
                            </div>
                        </section>
                   
                <?php endforeach; 
            }else{
                echo "No hay gatos en adopción en estos momentos";
            }
            ?>
    
</section>
