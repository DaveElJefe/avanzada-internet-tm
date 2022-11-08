<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario crear cliente</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/clients/">
        @csrf
        <label>Nombre:</label>
        <input type="text" placeholder="your name" name="name">
        <br>
        <label>Correo:</label>
        <input type="email" placeholder="example@domain.com" name="email">
        <br>
        <label>Numero telefonico:</label>
        <input type="text" placeholder="612-xxx-xx-xx" name="phone_number">
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>