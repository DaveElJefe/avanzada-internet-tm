<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario crear cliente</title>
</head>
<body>
    <form method="post" action="{{ url('clients/')}}">
        $method('PUT')
        @csrf
        
        <label>Nombre:</label>
        <input type="text" placeholder="{{ $client->name }}" name="name" value="{{ $client->name }}">
        <br>
        <label>Correo:</label>
        <input type="email" placeholder="{{ $client->name }}" name="email" value="{{ $client->email }}">
        <br>
        <label>Numero telefonico:</label>
        <input type="text" placeholder="{{ $client->name }}" name="phone_number" value="{{ $client->phone_number }}">
        <br>
        <input type="hidden" name="id" value="{{ $client->id }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>