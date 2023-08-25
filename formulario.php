<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>PHP Y Mysql</h1>
<form action="formulario.php" class="row g-3" method="post">

    <div class="col-md-6">
        <label for="" class="for-label">Identificacion</label>
        <input type="text" name="id" id="" class="form-control" placeholder="Ingrese cc">
    </div>

    <div class="col-md-6">
        <label for="" class="for-label" placeholder="">Nombres</label>
        <input type="text" name="nombre" class="form-control" placeholder="ingrese su nombre completo">
    </div>

    <div class="col-md-6">
        <label for="" class="for-label">Apellidos</label>
        <input type="text" name="apellido" id="" class="form-control" placeholder="ingrese su apellido completo">
    </div>

    <div class="col-md-6">
        <label for="" class="for-label">Telefono de  contacto</label>
        <input type="text" name="telefono" id="" class="form-control" placeholder="ingrese su numero telefonico">
    </div>

    <div class="col-md-6">
        <label for="" class="for-label">Fecha de nacimiento</label>
        <input type="date" name="fecha" id="" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="" class="for-label">Correo electronico</label>
        <input type="email" name="correo" id="" class="form-control" placeholder="ejemplo@gmail.com">
    </div>

    <div class="col-md-6">
        <input type="submit" value="guardar" name="guardar" class="btn btn-primary">
    </div>
</form>

    <?php
      if(isset($_POST['guardar']))
      {
        //$_POST['name'], reemplaza
        include('conexion.php');
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
        $correo=$_POST['correo'];

        //Consulta a la base de datos para insertar los datos
        mysqli_query($conexion,"INSERT INTO registro (id,nombre,apellido,telefono,fecha,correo) VALUES ('$id','$nombre','$apellido','$telefono','$fecha','$correo')");

        echo "Datos guardados correctamente";
      }  
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>