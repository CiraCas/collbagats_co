<h2>Usuario</h2>
<section>
    <h3>Modificar usuario</h3>
    <form class="formulario-admin" name="formulario" method='post' action='<?= base_url("index.php/usuarios/modificar_usuario");?>' onsubmit="return validaCampos();">
        <input type="hidden" name="idusuario" value="<?= $this->session->idusuario ?>">
        <div class="contenedor-adoptante">
            <div class="apartado-adop">
                <label>Nombre*</label>
                <input class="input-text" type="text" name="nombre" id="nombre" value='<?= $this->session->nombre ?>'>
            </div>
 
            <div class="apartado-adop">
                <label>Primer apellido*</label>
                <input class="input-text" type="text" name="apellido1" id="apellido1" value='<?= $this->session->apellido1 ?>'>
            </div>
 
            <div class="apartado-adop">
                <label>Segundo apellido</label>
                <input class="input-text" type="text" name="apellido2" id="apellido2" value='<?= $this->session->apellido2 ?>'>
            </div>
 
            <div class="apartado-adop">
                <label>Email*</label>
                <input class="input-text" type="email" name="mail" id="mail" value='<?= $this->session->email ?>'>
                <span id="msgemail"></span>

                <input type="hidden" name="permisos" value= 2>
            </div>
 
            <div class="apartado-adop">
                <label>Contraseña</label>
                <input class="input-text" type="password" name="password" value='<?= $this->session->password ?>'>
                <span id="msgpassword"></span>
            </div>
 
            <div class="apartado-adop">
                <label>Repite la contraseña</label>
                <input class="input-text" type="password" name="password2" value='<?= $this->session->password ?>'>
                <span id="msgpassword2"></span>
            </div>
        </div>

        <p class="campos-oblig">*Campos obligatorios</p>
        <div class="alin-derecha">
            <button class="boton">Cambiar</button>
        </div>
    </form>
</section>


<!-- javaScript -->
<script src="<?= base_url("assets/js/modificar_usu.js");?>"></script>