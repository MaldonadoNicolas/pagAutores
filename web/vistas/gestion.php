<?php
    require_once __DIR__."/../controladores/autorController.php";
    $autor = new AutorController();
    $resultado = $autor->ListarAutores();
    //var_dump($resultado->fetch_assoc());
    $autor->eliminar();
?>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="estilos.css" rel="stylesheet">
<div> 
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($array = $resultado -> fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $array["apellido"]; ?></td>
                    <td><?php echo $array["nombre"];?></td>

                    <form id="myForm" method="POST">
                        <td>
                            <input type="hidden" name="id_a" id="id_a" value="<?php echo $array["id_autor"]; ?>">
                            <input type="button" value="Modificar" class="btn btn-warning" onclick="this.form.action='index.php?action=actualizar';this.form.submit()">       
                            <input type="button" value="Eliminar" class="btn btn-danger" onclick="this.form.submit()">
                        </td>
                    </form>
                </tr>
            <?php }
        ?>
        </tbody>
    </table>
</div>
<?php
    $resultado=$autor->eliminar();
?>