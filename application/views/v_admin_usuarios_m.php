<h2>Hola
    <?php
    if(isset($this->session->nombre)){
        echo $this->session->nombre;
    }
    ?>! Bienvenid@
</h2>
    

<?php 
    if($usuarios != NULL) {
                    
        foreach( $usuarios as $usuario ): 
?>
            <section>
    <h3>Modificar usuario</h3>
    <form action="<?= base_url("index.php/usuarios/insertar_usuario");?>" method="post" >
        <label>Nombre*</label>
        <input type="text" name="nombre" id="nombre" value= <?=$usuario['nombre']?>>

        <label>Primer apellido*</label>
        <input type="text" name="apellido1" id="apellido1" value= <?=$usuario['apellido1']?>>

        <label>Segundo apellido</label>
        <input type="text" name="apellido2" id="apellido2" value= <?=$usuario['apellido2']?>>

        <label>Email*</label>
        <input type="email" name="mail" id="mail" value= <?=$usuario['mail']?>>

        <div></div>
        <fieldset>
            <legend>Permisos de usuario*</legend>
            <label>Master</label>
            <input type="radio" name="permisos" value= 1 > <br>
            <label>Usuario limitado</label>
            <input type="radio" name="permisos" value= 2 checked> <br>
        </fieldset>
        <p>*Campos obligatorios</p>
        
        <button type="submit">Agregar</button>
    </form>
</section>
            <tr>
                <td><?=$usuario['idusuario']?></td>
                <td><?=$usuario['nombre']?></td>
                <td><?=$usuario['mail']?></td>
                <td><?=$usuario['apellido1']?></td>
                
            </tr>
        <?php endforeach; 
    }else{
         echo "El usuario no existe en la base de datos";
            }
?>
   <!--  <?php foreach( $gatos as $gato ): ?>
        <p> e <?= $mail['mail'] ?></p>
    <?php endforeach; ?> -->
