<?php 
    //base de datos
    require '../../includes/config/database.php';
   
    $db = conectarDB();
    
    $errores = [];
    
    if( $_SERVER['REQUEST_METHOD'] === "POST")  {
        // echo "<pre>";
        // var_dump ($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $baños = $_POST['baños'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedorId'];

        if( !$titulo){
            $errores[] = 'debe insertar un título';
        }
        if( !$precio){
            $errores[] = 'debe insertar un precio';
        }
        if( strlen( $descripcion)  < 50){
            $errores[] = 'debe insertar una descripcion y que sea mayor de 50 caracteres';
        }
        if( !$habitaciones){
            $errores[] = 'debe insertar un numero de habitaciones';
        }
        if( !$baños){
            $errores[] = 'debe insertar unn numero de baños';
        }
        if( !$estacionamiento){
            $errores[] = 'debe insertar un numero de estacionamientos';
        }

        //  echo "<pre>";
        //  var_dump ($errores);
        //  echo "</pre>";

        //REVISAR SI HAY HUECOS VACIOS
        if(empty($errores)){

            
            //INSERTAR EN LA BASE DE DATOS
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, baños, estacionamiento, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$baños', '$estacionamiento', '$vendedorId') ";
            
            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo 'insertado correctamente';
            }
        }
    }
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde"> Volver </a>

        <?php foreach($errores as $error);  ?>
        <div class="alerta error">
            <?php echo ($error); ?>
    
        </div>
        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"> </textarea>

            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="baños">Baños:</label>
                <input type="number" id="baños" name="baños" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3"  min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedorId">
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Crear Propiedad">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>