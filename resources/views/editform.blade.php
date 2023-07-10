{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Stardos Stencil' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Sign in/Sign up/register2.css" type="text/css">
</head> --}}
<center>
<body>

    <div id="container" style="border:1px solid black ; width:700px">

        <div id="wrapper">
            <div id="headwrap">
                <div id="header">R E G I S T E R</div>
            </div>
            <form id="valForm" method="POST" action="{{ $url }}">
                @csrf
                
                <div class="field">
                    <label>Name:</label>
                    <input  style="width:200px;margin:10px" type="text" id="name" name="name" class="input" value="{{$register->name}}">
                    <div id="check" class="check"></div>
                    <span style="color:red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="field">
                    <label>City:</label>
                    <input  style="width:200px;margin:10px" type="text" id="ci" name="city" class="input" value="{{$register->city}}">
                    <div id="check3" class="check"></div>

                    <span class="text-danger">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="field">
                    <label>country:</label>
                    <select  style="width:200px;margin:10px" id="co" name="country" class="input" type="text" >
                        <option value="0"> -- Select country -- </option>
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bangaldesh">Bangaldesh</option>
                      
                    </select>
                    <div id="check4" class="check"></div>
                    <span class="text-danger">
                        @error('co')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="field">
                    <label>E-mail:</label>
                    <input  style="width:200px;margin:10px" type="text" id="em" name="email" class="input" value="{{$register->email}}">
                    <div id="check5" class="check"></div>

                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="field">
                    <label>Password:</label>
                    <input style="width:200px;margin:10px" type="password" id="pswd" name="password" class="input pswd pass" ><i
                        class="fa fa-eye-slash" id="eye"></i>

                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div id="bottomdiv">
                    <button  style="margin:10px;background-color:green;color:white" type="submit" id="submit" value="submit" class="btn" name="submit"><span
                            id="submit">&#9472; update &#9472;</span></button>
                </div>
            </form>
            <p class="text">Thank you, for filling in the form.</p>
        </div>
    </div>
    <!-- The Modal (no interaction with the rest of the page is possible until the user closes it!)-->
    {{-- <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="close">&times;</div>
            <p class="text">Thank you, for filling in the form.</p>
        </div>

    </div>--}}

    {{-- <script src="register2.js"></script> --}}
</body>
</center>

</html>
