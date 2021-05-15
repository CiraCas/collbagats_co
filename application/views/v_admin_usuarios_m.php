<section>
    <h2>Usuarios</h2>
        

    <?php 
        if($usuarios != NULL) {
                        
            foreach( $usuarios as $usuario ): 
    ?>
        <h3>Modificar usuario</h3>
        <form class="formulario-admin" name="formulario" action="<?= base_url("index.php/usuarios/modificar_usuario");?>" method="post" onsubmit="return validaCampos();">
            <input type="hidden" name="idusuario" value="<?=$usuario['idusuario']?>">
            <div class="contenedor-adoptante">
                <div class="apartado-adop">
                    <label>Nombre*</label>
                    <input class="input-text" type="text" name="nombre" id="nombre" value= "<?=$usuario['nombre']?>" required>
                </div>
 
                <div class="apartado-adop">
                    <label>Primer apellido*</label>
                    <input class="input-text" type="text" name="apellido1" id="apellido1" value= "<?=$usuario['apellido1']?>" required>
                </div>
 
                <div class="apartado-adop">
                    <label>Segundo apellido</label>
                    <input class="input-text" type="text" name="apellido2" id="apellido2" value= "<?=$usuario['apellido2']?>">
                </div>
 
                <div class="apartado-adop">
                    <label>Email*</label>
                    <input class="input-text" type="email" name="mail" id="mail" value= "<?=$usuario['mail']?>" required>
                    <span id="msgemail"></span>
                </div>
 
                
                <?php if($usuario['mail'] == $this->session->email){?>
                    <div class="apartado-adop">
                        <label>Contraseña*</label>
                        <input class="input-text" type="password" name="password" value= "<?=$usuario['contrasenia']?>" required>
                        <span id="msgpassword"></span>
                    </div>
 
                    <div class="apartado-adop">
                        <label>Repite la contraseña*</label>
                        <input class="input-text" type="password" name="password2" value= "<?=$usuario['contrasenia']?>" required>
                        <span id="msgpassword2"></span>
                    </div>
 
                
                <?php } else { ?>
                    <input type="hidden" name="password" value= "<?=$usuario['contrasenia']?>" required>
                    <input type="hidden" name="password2" value= "<?=$usuario['contrasenia']?>" required>
                <?php } ?>

                <div class="apartado-adop">
                    <fieldset>
                        <legend>Permisos de usuario*</legend>
                        <div>Master</div>
                        <?php if($usuario['tipo_usuario'] != 1){?>
                            <input type="radio" name="permisos" value= 1 >
                            <div>Usuario limitado</div>
                            <input type="radio" name="permisos" value= 2 checked>
                        <?php }else{ ?>
                            <input type="radio" name="permisos" value= 1 checked>
                            <div>Usuario limitado</div>
                            <input type="radio" name="permisos" value= 2 >
                        <?php } ?>
                    </fieldset>
                </div>
            </div>
            <p class="campos-oblig">*Campos obligatorios</p>
            <div class="alin-derecha">
                <button class="boton">Actualizar</button>
            </div>
        </form>

            <?php endforeach; 
        }else{
            echo "El usuario no existe en la base de datos";
                }
    ?>
</section>

<!-- javaScript -->
<script src="<?= base_url("assets/js/modificar_usu.js");?>"></script>
