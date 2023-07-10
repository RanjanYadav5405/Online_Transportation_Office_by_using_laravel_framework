
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penalties Paid form</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./forms/style2.css">
</head>

<body>
<form action="{{url('/')}}/penlaties" method="post">
@csrf
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
			
            <div class="input-group">
                <div class="input-box">
				    <i class="fa fa-user icon"></i>
                    <input type="text"  id="name"  placeholder="Full Name"  class="name" name="name" value="{{old('name')}}">
                     
                    <span class="text-danger">
           @error('name')
           {{$message}}
           @enderror</span>
                </div>
                <div class="input-box">
                    <i class="fa fa-user icon"></i>
                    <input type="text" id="lname"  placeholder="Last Name"  class="name" name="lastname" value="{{old('lastname')}}">
                    
                    <span class="text-danger">
           @error('lastname')
           {{$message}}
           @enderror</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" id="email"  placeholder="Email Adress"  class="name" name="email"value="{{old('email')}}">
                    
                    <span class="text-danger">
           @error('email')
           {{$message}}
           @enderror</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date</h4>
                    <input type="number" id="DD" placeholder="DD" class="dob" name="DD" value="{{old('DD')}}">
                    <span class="text-danger">
           @error('DD')
           {{$message}}
           @enderror</span>
                    <input type="number" id="MM" placeholder="MM" class="dob" name="MM" value="{{old('MM')}}">
                    <span class="text-danger">
           @error('MM')
           {{$message}}
           @enderror</span>
                    <input type="number" id="YY" placeholder="YYYY" class="dob" name="YY" value="{{old('YY')}}">
                    <span class="text-danger">
           @error('YY')
           {{$message}}
           @enderror</span>
                </div>
                <div class="input-box">
                    <h4>Vehicle Number</h4>
                    <input type="number" id="ve" placeholder="00-xy-0000"  class="name" name="ve" value="{{old('VehicleNo')}}">
                    <span class="text-danger">
           @error('VehicleNo')
           {{$message}}
           @enderror</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                    <span class="text-danger">
           @error('pay')
           {{$message}}
           @enderror</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-credit-card icon"></i>
                    <input type="number" id="number" placeholder="Card Number"  class="name" name="Cardnumber" value="{{old('Cardnumber')}}">
                   
                    <span class="text-danger">
           @error('Cardnumber')
           {{$message}}
           @enderror</span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-user icon"></i>
                    <input type="number" id="cvc" placeholder="Card CVC"  class="name" name="cvc" value="{{old('cvc')}}">
                   
                    <span class="text-danger">
           @error('cvc')
           {{$message}}
           @enderror</span>
                </div>
                
            </div>
			
            <div class="input-group">
                <div class="input-box">
                    <button input class="form-btn"  id="submit" name="submit" type="submit">PAY NOW</button>
                </div>
            </div>
			 
        </form>
    </div>
</body>

</html>