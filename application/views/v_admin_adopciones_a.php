<section>
    <h2>Adoptantes</h2>
    <h3>Modificar adoptante</h3>
    <?php 
        if($adoptantes != NULL) {
                        
            foreach( $adoptantes as $adoptante ): 
    ?>
       
        <form class="formulario-admin" name="formulario" action="<?= base_url("index.php/adopciones/modificar_adoptante");?>" method="post" onsubmit="return  validaAdoptante();">
            <div class="contenedor-adoptante"> 
                <input type="hidden" name="dni1" value="<?=$adoptante['dni']?>">
                
                <div class="apartado-adop">
                    <label>DNI*</label>
                    <input class="input-text" type="text" name="dni" id="dni" value="<?=$adoptante['dni']?>">
                    <span id="msgdni"></span>
                </div>

                <div class="apartado-adop">
                    <label>Nombre*</label>
                    <input class="input-text" type="text" name="nombre" id="nombre" value= "<?=$adoptante['nombre']?>" required>
                </div>

                <div class="apartado-adop">
                    <label>Primer Apellido*</label>
                    <input class="input-text" type="text" name="apellido1" id="apellido1" value= "<?=$adoptante['apellido1']?>" required>
                </div>

                <div class="apartado-adop">
                    <label>Segundo Apellido</label>
                    <input class="input-text" type="text" name="apellido2" id="apellido2" value= "<?=$adoptante['apellido2']?>">
                </div>
                <p class="campos-oblig">*Campos obligatorios</p>
                <div class="alin-derecha">
                    <button class="boton">Actualizar</button>
                </div>
            </div>
        </form>

            <?php endforeach; 
        }else{
            echo "El usuario no existe en la base de datos";
        }
    ?>
</section>
<script src="<?= base_url("assets/js/adoptantes.js");?>" defer></script>
