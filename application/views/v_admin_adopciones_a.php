<section>
    <h2>Usuarios</h2>
        

    <?php 
        if($adoptantes != NULL) {
                        
            foreach( $adoptantes as $adoptante ): 
    ?>
        <h3>Modificar usuario</h3>
        <form name="formulario" action="<?= base_url("index.php/adopciones/modificar_adoptante");?>" method="post" onsubmit="return  validaAdoptante();">
            <input type="hidden" name="dni1" value="<?=$adoptante['dni']?>">
            <label>DNI*</label>
            <input type="text" name="dni" id="dni" value="<?=$adoptante['dni']?>">
            <span id="msgdni"></span>
            <label>Nombre*</label>
            <input type="text" name="nombre" id="nombre" value= <?=$adoptante['nombre']?> required>

            <label>Primer apellido*</label>
            <input type="text" name="apellido1" id="apellido1" value= <?=$adoptante['apellido1']?> required>

            <label>Segundo apellido</label>
            <input type="text" name="apellido2" id="apellido2" value= <?=$adoptante['apellido2']?>>

            <p>*Campos obligatorios</p>
            
            <button>Actualizar</button>
        </form>

            <?php endforeach; 
        }else{
            echo "El usuario no existe en la base de datos";
        }
    ?>
</section>
<script src="<?= base_url("assets/js/adoptantes.js");?>" defer></script>
