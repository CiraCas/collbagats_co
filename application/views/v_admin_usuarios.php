<h2>Usuarios</h2>
<section>
    <h3>Añadir usuario</h3>
    <form action="<?= base_url("index.php/usuarios/insertar_usuario");?>" method="post" >
        <label>Nombre*</label>
        <input type="text" name="nombre" id="nombre">

        <label>Primer apellido*</label>
        <input type="text" name="apellido1" id="apellido1">

        <label>Segundo apellido</label>
        <input type="text" name="apellido2" id="apellido2">

        <label>Email*</label>
        <input type="email" name="mail" id="mail">

        <div></div>
        <fieldset>
            <legend>Permisos de usuario*</legend>
            <label>Master</label>
            <input type="radio" name="permisos" value= 1 > <br>
            <label>Usuario limitado</label>
            <input type="radio" name="permisos" value= 2 checked> <br>
        </fieldset>
        <p>*Campos obligatorios</p>
        <p>La contraseña se asigna automáticamente como 212223. El usuario deberá cambiarla en su primera conexión.</p>
        <button type="submit">Agregar</button>
    </form>
</section>
<section>
    <table id="table_id" class="display" border='1'>
        <thead>
            <tr>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Permisos</th>
            </tr>
        </thead>   
        <tbody>
            <?php foreach( $usuarios as $usu ): ?>
                <tr>
                    <td><?=$usu['mail']?></td>
                    <td><?=$usu['nombre']?></td>
                    <td><?=$usu['apellido1']?></td>
                    <td><?=$usu['apellido2']?></td>
                    <td><?=$usu['tipo_usuario']?></td>
                    <td class= "casilla-iconos">
                        <?php if($usu['mail'] != $this->session->email) { ?>
                            <form method='post' action="<?= base_url("index.php/usuarios/borrar_usu");?>">
                                <input type="hidden" name="mail" value="<?=$usu['mail']?>">
                                <button type="submit">
                                    <i class="fas fa-trash-alt icon-admin"></i>
                                </button>
                            </form>
                        <?php } ?>
                        <a href="<?= base_url("index.php/usuarios/usu2/". $usu['idusuario']);?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        
                        <!-- <form method="get" action="<?= base_url("index.php/usuarios/borrar_usu/" . $usu['mail']);?>">

                        </form> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</section>
<section>
    <h3>Cambia tu contraseña</h3>
    <form class="formulario" name="formulario" method='post' action='<?= base_url("index.php/usuarios/cambiar_password");?>' onsubmit="return validaContraseña();">
        <label>Nueva Contraseña</label>
        <input class="input-text" type="password" name="password">
        <span id="msgpassword"></span>
        <label>Repite la nueva contraseña</label>
        <input class="input-text" type="password" name="password2">
        <span id="msgpassword2"></span>
        <button>Cambiar</button>
    </form>
</section>


<!-- javaScript -->
<script src="<?= base_url("assets/js/usuarios.js");?>" defer></script>