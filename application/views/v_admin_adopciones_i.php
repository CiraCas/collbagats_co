<?php 
    foreach( $gatos as $gato):
        $idgato = $gato['idgato'];  
?>
        <img src="<?= base_url("subidas/gatos/" . $gato['imagen']);?>" alt="gato">
        <h2><?=$gato['nombre']?></h2>
        <?php  if($gato['sexo'] != 'M') {?>
            <i class="fas fa-venus"></i>
        <?php } else { ?>
            <i class="fas fa-mars"></i>
        <?php } ?>
        <div> <?=$gato['descripcion']?> </div>
            
            
<?php 
    endforeach; 
?>
<h3>Registra nuevo adoptante</h3>
<form name="formulario" action="<?= base_url("index.php/adopciones/insertar_adoptante/".$idgato);?>" method="post" onsubmit="return validaAdoptante();">
    
    <label>Nombre Adoptante</label>
    <input type="text" name="nombre" required>

    <label>Primer Apellido</label>
    <input type="text" name="apellido1" required>

    <label>Segundo Apellido</label>
    <input type="text" name="apellido2" > 

    <label>DNI</label>
    <input type="text" name="dni" required>
    <span id="msgdni"></span>
    <button>Registrar Adoptante</button>
</form>

<h3>Datos adopción</h3>
<form action="<?= base_url("index.php/adopciones/insertar_adopcion");?>" method="post" enctype="multipart/form-data">
 
    <input type="hidden" name="idgato" value="<?= $idgato ?>">

    <label>Selecciona adoptante:</label>
    <select >
        <option value=""></option>
    <?php 
        foreach( $adoptantes as $adoptante):  
    ?>
        <option value="<?= $adoptante[ 'dni'] ?>"> <?= $adoptante[ 'dni'] ?> </option>
    <?php 
        endforeach; 
    ?>

    </select>

    <label>Nuevo Nombre:</label>
    <input type="text" name="nuevonombre" id="" required>
    <label>Fecha de la adopción:</label>
    <input type="date"  name = 'fecha' required>
    <input type="submit">

<script src="<?= base_url("assets/js/adoptantes.js");?>" defer></script>
<script src="<?= base_url("assets/js/adopcion.js");?>" defer></script>