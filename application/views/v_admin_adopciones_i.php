<?php 
    foreach( $gatos as $gato):
        $idgato = $gato['idgato']; 
?> 
    <section class="caja-datos">
        <h2><?=$gato['nombre']?></h2>
<?php 
    if( $gato['imagen'] != '0') { 
?>
        
        <img src="<?= base_url("subidas/gatos/" . $gato['imagen'])?> " alt="gato">
    <?php } else { 
    ?>
        <img src="<?= base_url("subidas/gatos/sombra.png")?> " alt="gato">
    <?php } ?>
        
        
        <?php  if($gato['sexo'] != 'M') {?>
            <i class="fas fa-venus icon-sex"></i>
            <div>Hembra</div>
        <?php } else { ?>
            <i class="fas fa-mars icon-sex"></i>
            <div>Macho</div>
        <?php } ?>
        <div> <?=$gato['descripcion']?> </div>
    </section>      
            
<?php 
    endforeach; 
?>

<h3>Datos adopción</h3>
<form class="formulario-admin" name="formulario2" action="<?= base_url("index.php/adopciones/insertar_adopcion");?>" method="post" enctype="multipart/form-data" >
    <div class="contenedor-adoptante">  
        <input type="hidden" name="idgato" value="<?= $idgato ?>">

        <div class="apartado-form">
            <label>Selecciona Adoptante*</label>
            <select class="input-text" name="adoptante" id="adoptante" required>
                    <option></option>
                <?php 
                    foreach( $adoptantes as $adoptante):  
                ?>
                    <option value="<?= $adoptante[ 'dni'] ?>"> <?= $adoptante['dni'] ?> </option>
                <?php 
                    endforeach; 
                ?>
            </select>
            <span id="msgadoptante"></span>
        </div>
        

        <div class="apartado-form">
            <label>Fecha de la Adopción*</label>
            <input class="input-text" type="date"  name = 'fecha' required>
        </div>

        <div class="apartado-form">
            <label>Nuevo Nombre*</label>
            <input class="input-text" type="text" name="nuevonombre"  required>
        </div>
        
        <div class="apartado-form">
            <label>Selecciona Imagen</label>
            <input type="file" name="file" id="file" accept=".jpg, .png, .gif, .jpeg">
            <?php if(isset($error)) { ?>
                <div class="error_modal"><?= $error;?></div>
            <?php } ?>
        </div>
    </div>
    <p class="campos-oblig">*Campos obligatorios</p>
    <div class="alin-derecha">
        <input class="boton" type="submit" value= "Registrar Adopción">
    </div>

</form>

<h3>Registra nuevo adoptante</h3>
<form class="formulario-admin" name="formulario" action="<?= base_url("index.php/adopciones/insertar_adoptante/".$idgato);?>" method="post" onsubmit="return validaAdoptante();">
    <div class="contenedor-adoptante">  

        <div class="apartado-adop">
            <label>Nombre Adoptante*</label>
            <input class="input-text" type="text" name="nombre" required>
        </div>

        <div class="apartado-adop">
            <label>Primer Apellido*</label>
            <input class="input-text" type="text" name="apellido1" required>
        </div>

        <div class="apartado-adop">
            <label>Segundo Apellido</label>
            <input class="input-text" type="text" name="apellido2" > 
        </div>

        <div class="apartado-adop">
            <label>DNI*</label>
            <input class="input-text" type="text" name="dni" required>
            <span id="msgdni"></span>
        </div>
    </div>
    <p class="campos-oblig">*Campos obligatorios</p>
    <div class="alin-derecha">
        <button class="boton" >Registrar Adoptante</button>
    </div>
</form>

<script src="<?= base_url("assets/js/adoptantes.js");?>" defer></script>
<script src="<?= base_url("assets/js/adopcion.js");?>" defer></script>