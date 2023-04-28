<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <title>Login</title>
    </head>
    <body>
        <main>
            <form action="{{route('auth.login')}}" method="POST">
                @csrf
                <input placeholder="Email" name="email">
                <input placeholder="Password" name="password" type="password">
                <button type="submit">Se connecter</button>
            </form>
        </main>
    </body>
</html>