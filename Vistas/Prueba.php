<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Document</title>
</head>

<body>
    <form method="post" id="formulario" enctype="multipart/form-data" onsubmit="return false">
    <img src="" class="card-img-top" id="mostrarimagen">

        <input type="text" name="" id="date1">
        <input type="text" name="" id="date2">
        <input type="file" name="imagen" id="imagen" accept="image/x-png,image/gif,image/jpeg">
        <select name="" id="opcion">
            <option value="1" >probar</option>
            <option value="2" >prueba2</option>

        </select>
        <button onclick="Registrar()">probar</button>

    </form>


    <p id="respa"></p>
    <script src="../JS/NewProducto.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>

</html>