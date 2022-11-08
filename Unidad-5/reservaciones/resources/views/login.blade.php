<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>
        @if(Auth::User())
            {{ Auth::User()->name }}
        @endif
    </h1>

    <form method="post" action="{{ url('login/')}}">
        @csrf
        <input type='text' placeholder='example@domain.com' name='email'>
        <input type='text' placeholder='password' name='password'>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>