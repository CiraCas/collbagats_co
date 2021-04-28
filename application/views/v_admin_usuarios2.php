<h2>Usuario</h2>
<section>
    <h3>Modificar usuario</h3>
    <form name="formulario" method='post' action='<?= base_url("index.php/usuarios/modificar_usuario");?>' onsubmit="return validaCampos();">
        <input type="hidden" name="idusuario" value="<?= $this->session->idusuario ?>">
        <label>Nombre*</label>
        <input type="text" name="nombre" id="nombre" value='<?= $this->session->nombre ?>'>

        <label>Primer apellido*</label>
        <input type="text" name="apellido1" id="apellido1" value='<?= $this->session->apellido1 ?>'>

        <label>Segundo apellido</label>
        <input type="text" name="apellido2" id="apellido2" value='<?= $this->session->apellido2 ?>'>

        <label>Email*</label>
        <input type="email" name="mail" id="mail" value='<?= $this->session->email ?>'>
        <span id="msgemail"></span>

        <input type="hidden" name="permisos" value= 2>

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


<!-- javaScript -->
<script src="<?= base_url("assets/js/modificar_usu.js");?>"></script>