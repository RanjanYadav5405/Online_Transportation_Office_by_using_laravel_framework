<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Signin form
    </title>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./Sign in/app.css">
</head>

<body style="background-image: url(./img/jeong-tae-bae-YcprzitnQH8-unsplash.jpg);">

    <div class="form" id="signin-form">
        <h2>Sign into your account</h2><br>
        <div class="form-group">
 <form action="{{url('/')}}/index3" method="post" >
    @csrf
            <input type="email" class="form-input" id="em" placeholder="Email" name="email" value="{{old('email')}}" >
            
         
            <span class="text-danger">
            @error('email')
            {{$message}}
             @enderror
            </span>
        </div>
        <div class="form-group">
            <input type="password" class="form-input" placeholder="Password" id="pswd" name="password" value="{{old('password')}}" >
            <span class="text-danger">
            @error('password')
             {{$message}}
             @enderror
            </span>
        </div>
        <div class="form-group form-group-checkbox">
            <input type="checkbox" name="remember" id="remember" checked="checked">
            <label for="remember">
                Remember Me
                <i class='bx bx-check'></i>
            </label>
        </div>
        <button class="form-btn" type="submit" id="submit" name="submit" value="Login">Sign in</button>
        <span class="form-delimiter">
            or connect with
        </span>
       
        <span class="form-txt">
            Don't have an account?
            <a href="http://127.0.0.1:8000/index4">Sign up!</a>
        </span>
        <span class="form-txt">
            <a href="http://127.0.0.1:8000/index4">Forgot password?</a>
        </span>
    </div>

    
	

</body>

</html>