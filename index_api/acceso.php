<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceso</title>
    <link rel="stylesheet" href="../index_api/CSS/style.principal.css">
    <link rel="stylesheet" href="../index_api/CSS/style_acceso.css">
    <script>
        function enviar() {
            alert("Accediendo...")
        }
    </script>
</head>
<ul>
    <li><a href="index.html">volver al inicio</a></li>
    <li> <a href="registro.html">registro</a></li>
    <li><a href="acceso.html" class="active"> inicio de sesion</a></li>


</ul>
<div class="main-content">
    <form action="from-basic" method="post" action="#">
        <div class="form-tittle-row">
            <h1> inicia sesion</h1>
        </div>
        <div class=" form-row">
            <label>ingrese email</label>
            <input type="email" name="name" placeholder="ejemplo@gmail.com">
        </div>
        <div class=" form-row">
            <label>password</label>
            <input type="password" name="password">
        </div>
        <div class=" form-row">
            <input type="buttom" value="enviar" onclick="enviar()">
        </div>
    </form>
</div>

</body>

</html>