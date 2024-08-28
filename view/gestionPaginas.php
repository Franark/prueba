<h1>Gestión de Permisos</h1>
<form method="post" action="controller/paginasControlador.php">
    <label for="idRolUsuario">Rol de Usuario:</label>
    <select name="idRolUsuario" id="idRolUsuario">
        <?php
        require_once('model/rolUsuario.php');
        $rolUsuario = new RolUsuario();
        $rolesUsuario = $rolUsuario->listarRoles();
        foreach ($rolesUsuario as $rol) {
            echo "<option value={$rol['idRolUsuario']}>{$rol['nombreRol']}</option>";
        }
        ?>
    </select>
    <br><br>
    
    <label for="permisos">Seleccionar Páginas:</label><br>
    <?php
    require_once('model/permiso.php');
    $permiso = new Permiso();
    $permisos = $permiso->listarPermisos();

    foreach ($permisos as $permiso) {
        echo "<input type='checkbox' name='permisos[]' value='{$permiso['idPermiso']}'> {$permiso['nombrePermiso']}<br>";
    }
    ?>
    <br>
    <button type="submit">Guardar</button>
</form>