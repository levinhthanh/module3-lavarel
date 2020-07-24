<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký tài khoản</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: gainsboro;
            font-size: 1vw;
        }
        .container_register{
            width: 80%;
            margin: auto;
            margin-top: 3vw
        }
        #label_register_up{
            display: block;
            font-size: 3vw;
            padding: 0.5vw;
        }
        #label_register_down{
            display: block;
            font-size: 1vw;
            padding: 0.5vw;
        }
        input{
            width: 35vw;
            height: 2vw;
            padding: 0.5vw;
            padding-left: 1.5vw;
            border-radius: 0.5vw;
            margin-bottom: 1vw;
            border: solid 0.1vw darkgray;
        }
        input:focus{
            outline: none;
        }
        input:hover{
            cursor: pointer;
        }
        #button_register{
            width: 10vw;
            height: 2.5vw;
            padding: 0.5vw;
            box-shadow: darkgrey 0.1vw 0.1vw;
            font-weight: bold;
        }
        #button_register:hover{
            background-color: darkorange;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container_register">
        <label id="label_register_up">Đăng ký tài khoản</label>
        <label id="label_register_down">Để được phục vụ nhanh chóng !</label>

        <div class="error-message">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='color:red'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>

        <form action="{{ route('form.submit') }}" method="post">
            @csrf
         <input type="text" name="fullname" placeholder="Fullname"><br>
         <input type="text" name="phone" placeholder="Phone Number"><br>
         <input type="email" name="email" placeholder="Email"><br>
         <input type="password" name="password" placeholder="Password"><br>
         <input type="password" name="password_repeat" placeholder="Repeat Password"><br>
         <input id="button_register" type="submit" value="Đăng ký">
        </form>
    </div>
</body>

</html>
