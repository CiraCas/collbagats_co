<?php 
    foreach( $gatos as $gato):  
?>
        <img src="<?= base_url("subidas/gatos/" . $gato['imagen']);?>" alt="gato">
        <h2><?=$gato['nombre']?></h2>
        <?php  if($gato['sexo'] != 'M') {?>
            <i class="fas fa-venus"></i>
        <?php } else { ?>
            <i class="fas fa-mars"></i>
        <?php } ?>
        <div> <?=$gato['descripcion']?> </div>
            
            
<?php endforeach; ?>
<h3>Datos adopción</h3>
<form action="<?= base_url("index.php/adopciones/insertar_adopcion");?>" method="post" enctype="multipart/form-data">
    <label>Nuevo Nombre:</label>
    <input type="text" name="nuevonombre" id="" required>
    <label>Fecha de la adopción:</label>
    <input type="date">

    
<h3>Selecciona adoptante o introduce nuevo adoptante</h3>
<select >
    <option value=""></option>
    <?php 
        foreach( $adoptantes as $adoptante):  
    ?>
        <option value="<?= $adoptante[ 'dni'] ?>"> <?= $adoptante[ 'dni'] ?> </option>
    <?php endforeach; ?>

</select>
</form>