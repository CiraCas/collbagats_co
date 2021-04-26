<h2>Hola
    <?php
    if(isset($this->session->nombre)){
        echo $this->session->nombre;
    }
    ?>! Bienvenid@
</h2>
<section>
    <h3>Cambia de contraseña</h3>
    <form class="formulario" name="formulario" method='post' action='<?= base_url("index.php/admin/cambiar_password");?>' onsubmit="return validaContraseña();">
        <label>Nueva Contraseña</label>
        <input class="input-text" type="password" name="password">
        <span id="msgpassword"></span>
        <label>Repite la nueva contraseña</label>
        <input class="input-text" type="password" name="password2">
        <span id="msgpassword2"></span>
        <button>Cambiar</button>
    </form>
</section>

<form method='post' action='<?= base_url("index.php/admin/desconectar");?>'>
    <input type='submit'  value='Desconectar' name='desconectar'/>