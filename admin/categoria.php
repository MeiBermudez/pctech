<?php
include '../dbs/cn.php';

// Verificar si se ha enviado el formulario de agregar
if (isset($_POST['agregar'])) {
    // Obtener los datos del formulario
    $nombre = mysqli_real_escape_string($cn, $_POST['nombre']);
$categoria_padre_id = mysqli_real_escape_string($cn, $_POST['categoria_padre_id']);


    // Validar y limpiar los datos ingresados
    $nombre = mysqli_real_escape_string($cn, $nombre);
    $categoria_padre_id = mysqli_real_escape_string($cn, $categoria_padre_id);

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO categorias (nombre, categoria_padre_id) VALUES ('$nombre', '$categoria_padre_id')";

    if ($cn->query($sql) === TRUE) {
        echo "<script>alert('Categoría agregada correctamente');</script>";
    } else {
        echo "Error al agregar la categoría: " . $cn->error;
    }
}
?>

<div class="container center">
    <h2>Listado de Categorías</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="categoria_padre_id" class="form-label">Categoría Padre</label>
            <select class="form-select" id="categoria_padre_id" name="categoria_padre_id">
                <option value="">Sin Categoría Padre</option>
                <?php
                // Obtener las categorías existentes
                $sql = "SELECT * FROM categorias";
                $result = $cn->query($sql);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_categoria"] . '">' . $row["nombre"] . '</option>';
                    }
                } else {
                    echo "Error al obtener las categorías: " . $cn->error;
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="agregar">Agregar</button>
    </form>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Categoría</th>
            <th>Categoría Padre</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Consulta para obtener las categorías y sus categorías padre
        $sql = "SELECT c1.nombre AS categoria, c2.nombre AS categoria_padre
                FROM categorias c1
                LEFT JOIN categorias c2 ON c1.categoria_padre_id = c2.id_categoria";

        $result = $cn->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['categoria'] . '</td>';
                echo '<td>' . ($row['categoria_padre'] ?? 'Sin Categoría Padre') . '</td>';
                echo '</tr>';
            }
        } else {
            echo "Error al obtener las categorías: " . $cn->error;
        }
        ?>
    </tbody>
</table>
