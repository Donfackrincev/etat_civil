
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        form {
            width: 350px;
            height: 240px;
            margin-top: 80px;
            padding: 10px;
            background-color: skyblue
        }

        input {

            width: 320px;
            padding: 8px;
            margin: 8px;
            border-radius: 7px;
            color: black;
            text-align: center;
        }
    </style>

</head>

<body>
    <center>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" placeholder="entrer votre adresse email" name="email">
            @error('email')
                <div id="email-error" classe='error'>{{ $message }}</div>
            @enderror

            <input type="password" placeholder="entrer votre password" name="password">
            @error('password')
                <div id="password-error" classe='error'>{{ $message }}</div>
            @enderror
            <input type="submit">
            <a class="text-color" href="{{ route('password.request') }}"> Forgot
                password? </a>
        </form>

    </center>

</body>

</html>
