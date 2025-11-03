<?php
include('./logica/db.php');
$consulta = "SELECT * FROM usuarios";
$result = $conn->query($consulta);
?>

<?php include('./head.php'); ?>

<div class="container">
    <h3 class="center-align">Lista de Usuarios</h3>

    <!-- Botón para agregar usuario -->
    <div class="right-align">
        <a href="./logica/create.php" class="btn waves-effect waves-light green">
            <i class="material-icons left">person_add</i> Agregar Usuario
        </a>
    </div>

    <!-- Espacio visual -->
    <div class="section"></div>

    <!-- Tabla de usuarios -->
    <table class="highlight centered responsive-table z-depth-2">
        <thead class="blue lighten-2 white-text">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <!-- Botones de acción -->
                    <a href="./update.php?id=<?php echo $row['id']; ?>" class="btn-small waves-effect blue">
                        <i class="material-icons">edit</i>
                    </a>
                    <a href="./logica/delete.php?id=<?php echo $row['id']; ?>" class="btn-small waves-effect red">
                        <i class="material-icons">delete</i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Scripts de Materialize -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/materialize.min.js"></script>

<?php include('./footer.php'); ?>
