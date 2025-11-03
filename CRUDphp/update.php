<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('./logica/db.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    die("ID inválido o no recibido");
}

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    die("Usuario no encontrado");
}

$row = $result->fetch_assoc();
?>

<?php include('./head.php'); ?>

<div class="container">
    <h3 class="center-align">Editar Usuario</h3>

    <div class="row">
        <form class="col s12 m8 l6 offset-m2 offset-l3 card-panel z-depth-3" 
              method="POST" 
              action="logica/update2.php?id=<?php echo $id; ?>">
            
            <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input id="nombre" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
                <label for="nombre" class="active">Nombre</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <label for="email" class="active">Email</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input id="telefono" type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>
                <label for="telefono" class="active">Teléfono</label>
            </div>

            <div class="center-align">
                <button type="submit" class="btn waves-effect waves-light blue">
                    <i class="material-icons left">save</i>Actualizar Usuario
                </button>
                <a href="./index.php" class="btn grey lighten-1 black-text waves-effect" style="margin-left:10px;">
                    <i class="material-icons left">arrow_back</i>Volver
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Scripts de Materialize -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/materialize.min.js"></script>

<?php include('./footer.php'); ?>

