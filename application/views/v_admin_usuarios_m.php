<section>
    <h2>Usuarios</h2>
        

    <?php 
        if($usuarios != NULL) {
                        
            foreach( $usuarios as $usuario ): 
    ?>
        <h3>Modificar usuario</h3>
        <form action="<?= base_url("index.php/usuarios/modificar_usuario");?>" method="post" >
            <label>Nombre*</label>
            <input type="text" name="nombre" id="nombre" value= <?=$usuario['nombre']?>>

            <label>Primer apellido*</label>
            <input type="text" name="apellido1" id="apellido1" value= <?=$usuario['apellido1']?>>

            <label>Segundo apellido</label>
            <input type="text" name="apellido2" id="apellido2" value= <?=$usuario['apellido2']?>>
            <label>Email*</label>
            <input type="email" name="mail" id="mail" value= <?=$usuario['mail']?>>
            <?php if($usuario['mail'] == $this->session->email){?>
                <label>Contraseña</label>
                <input type="password" name="password" value= <?=$usuario['contrasenia']?>>
                <span id="msgpassword"></span>
                <label>Repite la contraseña</label>
                <input type="password" name="password2" value= <?=$usuario['contrasenia']?>>
                <span id="msgpassword2"></span>
            <?php } ?>

            <div></div>
            <fieldset>
                <legend>Permisos de usuario*</legend>
                <label>Master</label>
                <?php if($usuario['tipo_usuario'] != 1){?>
                    <input type="radio" name="permisos" value= 1 > <br>
                    <label>Usuario limitado</label>
                    <input type="radio" name="permisos" value= 2 checked> <br>
                <?php }else{ ?>
                    <input type="radio" name="permisos" value= 1 checked> <br>
                    <label>Usuario limitado</label>
                    <input type="radio" name="permisos" value= 2 > <br>
                <?php } ?>
            </fieldset>
            <p>*Campos obligatorios</p>
            
            <button type="submit">Actualizar</button>
        </form>

            <?php endforeach; 
        }else{
            echo "El usuario no existe en la base de datos";
                }
    ?>
</section>
