<h2>Usuarios</h2>
<section>
    <h3>Añadir usuario</h3>
    <form  class="formulario-admin" name="formulario" action="<?= base_url("index.php/usuarios/insertar_usuario");?>" method="post" onsubmit="return validaCampos();" >
        <div class="contenedor-adoptante">
            <div class="apartado-adop">
                <label>Nombre*</label>
                <input class="input-text" type="text" name="nombre" id="nombre" required>
           </div>
 
            <div class="apartado-adop">
                <label>Primer apellido*</label>
                <input class="input-text" type="text" name="apellido1" id="apellido1" required>
            </div>
 
            <div class="apartado-adop">
                <label>Segundo apellido</label>
                <input class="input-text" type="text" name="apellido2" id="apellido2">
            </div>
 
            <div class="apartado-adop">
                <label>Email*</label>
                <input class="input-text" type="email" name="mail" id="mail" required>
                <span id="msgemail"></span>
            </div>
 
            <div class="apartado-adop">
            <div></div>
                <fieldset>
                    <legend>Permisos de usuario*</legend>
                    <div>Master</div>
                    <input type="radio" name="permisos" value= 1 > <br>
                    <div>Usuario limitado</div>
                    <input type="radio" name="permisos" value= 2 checked> <br>
                </fieldset>
            </div>
        </div>
        <p class="campos-oblig">*Campos obligatorios</p>
        <p class="campos-oblig">*La contraseña se asigna automáticamente como 212223. El usuario deberá cambiarla en su primera conexión.</p>
        <div class="alin-derecha">
            <button class="boton">Agregar</button>
        </div>
    </form>
</section>
<section>
    <h3>Usuarios Registrados</h3>
    <table id="table_id" class="display tabla-admin" >
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
                        <?php if($usu['idusuario'] != $this->session->idusuario) { ?>
                            <a href="<?= base_url("index.php/usuarios/borrar_usu/". $usu['idusuario']);?>">
                                <i class="fas fa-trash-alt icon-admin"></i>
                            </a>
                            <!-- <form method='post' action="<?= base_url("index.php/usuarios/borrar_usu");?>">
                                <input type="hidden" name="idusuario" value="<?=$usu['idusuario']?>">
                                <button type="submit">
                                    <i class="fas fa-trash-alt icon-admin"></i>
                                </button>
                            </form> -->
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


<!-- javaScript -->
<script src="<?= base_url("assets/js/nuevo_usu.js");?>" defer></script>