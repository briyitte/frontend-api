<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="../index_api/CSS/style.principal.css">
    <link rel="stylesheet" href="../index_api/CSS/style_registro.css">

</head>
<script>
    function enviar() {
        alert("enviando gestionando registro...")
    }
</script>
</head>
<ul>
    <li><a href="index.html">volver al inicio</a></li>
    <li> <a href="registro.html">registro</a></li>
    <li><a href="acceso.html" class="active"> inicio de sesion</a></li>

</ul>
<div class="main-content">
    <form class="form-basic" method="post" action="#">
        <div class="form-tittle-row">
            <h1> Crea una cuenta</h1>
        </div>
        <div class=" form-row">
            <label>Nombre</label>
            <input type="text" name="name">
        </div>
        <div class=" form-row">
            <label>Apellido</label>
            <input type="text" name="lastname">
        </div>
        <div class=" form-row">
            <label> tipo de documento</label>
            <select name="select">
                <option > seleccione una opcion</option>
          <option > tarjeta de identidad</option>
          <option >cedula de ciudadania</option>
          <option >cedula estranjeriá</option>
          <option >pasaporte</option>
      </select>
        </div>
        <div class="form-row">
            <label>no.Docuemento</label>
            <input type="number" name="no.id">
        </div>
        <div class=" form-row">
            <label> tipo de email</label>
            <input type="email" name="name">
        </div>
        <div class=" form-row">
            <label>password</label>
            <input type="password" name="password">
        </div>
        <div class=" form-row">
            <label>he leido ya acepto las condiciones del contrato</label>
            <input type="checkbox" name="checkbox">
        </div>
        <div class=" form-row">
            <input type="buttom" value="registrarse" onclick="enviar()">
        </div>
    </form>
</div>


</body>

</html>