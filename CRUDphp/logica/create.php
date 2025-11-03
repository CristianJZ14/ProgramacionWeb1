<?php
include('./logica/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include('../head.php'); ?>

<div class="container">
    <div class="row center-align" style="margin-top: 50px;">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <div class="card z-depth-3" style="padding: 30px; border-radius: 12px;">
                <h4 class="center-align" style="margin-bottom: 30px;">Agregar Nuevo Usuario</h4>

                <form method="POST" action="create.php">

                    <div class="input-field" style="text-align: left;">
                        <label for="nombre" style="position: static; font-weight: 600;">Nombre completo</label>
                        <input id="nombre" type="text" name="nombre" class="validate" required style="margin-top: 8px;">
                    </div>

                    <div class="input-field" style="text-align: left;">
                        <label for="email" style="position: static; font-weight: 600;">Correo electrónico</label>
                        <input id="email" type="email" name="email" class="validate" required style="margin-top: 8px;">
                    </div>

                    <div class="input-field" style="text-align: left;">
                        <label for="telefono" style="position: static; font-weight: 600;">Número telefónico</label>
                        <input id="telefono" type="text" name="telefono" class="validate" required style="margin-top: 8px;">
                    </div>

                    <div class="section center-align" style="margin-top: 35px;">
                        <button type="submit" class="btn waves-effect waves-light blue darken-2" style="border-radius: 8px;">
                            <i class="material-icons left">person_add</i>Guardar
                        </button>
                        <a href="../index.php" class="btn grey lighten-1 black-text waves-effect" style="margin-left: 10px; border-radius: 8px;">
                            <i class="material-icons left">arrow_back</i>Volver
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../js/materialize.min.js"></script>

<?php include('../footer.php'); ?>
