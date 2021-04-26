<h2>Usuario</h2>
<section>
    <h3>Modificar usuario</h3>
    <form name="formulario" method='post' action='<?= base_url("index.php/usuarios/cambiar_password");?>' onsubmit="return validaCampos();">
        <label>Nombre*</label>
        <input type="text" name="nombre" id="nombre" value='<?= $this->session->nombre ?>'>

        <label>Primer apellido*</label>
        <input type="text" name="apellido1" id="apellido1" value='<?= $this->session->apellido1 ?>'>

        <label>Segundo apellido</label>
        <input type="text" name="apellido2" id="apellido2" value='<?= $this->session->apellido2 ?>'>

        <label>Email*</label>
        <input type="email" name="mail" id="mail" value='<?= $this->session->email ?>'>
        
        <label>Contraseña</label>
        <input type="password" name="password" value='<?= $this->session->password ?>'>
        <span id="msgpassword"></span>
        
        <label>Repite la contraseña</label>
        <input type="password" name="password2" value='<?= $this->session->password ?>'>
        <span id="msgpassword2"></span>

        <p>*Campos obligatorios</p>
        <button>Cambiar</button>
    </form>
</section>
<!-- <section>
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
 -->


<!-- javaScript -->
<script src="<?= base_url("assets/js/usuarios.js");?>" defer></script>