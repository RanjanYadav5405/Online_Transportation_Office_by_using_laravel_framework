<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Form Validation</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" href="./css/fv.css" type="text/css" />
<!--[if IE]>
<style>
.field .tooltip .content{ display:none; opacity:1; }
.field .tooltip:hover .content{ display:block; }
</style>
<![endif]-->
<style>
body{
    background: url('./img/bg4.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
</head>
<body>

<div id='wrap'>
<div class='options'>
<!-- <label>
<input type='checkbox' id='vfields' />
Vertical orientation
</label> -->

</div>
<h1 title='how forms should be done.'>Nepal Electronic Driving License And Vehicle Registration System</h1>
<section class='form' >
<form action="./laptop.php" method="post">
<fieldset>
<div class="field">
<label>
<span>Name</span>
<input data-validate-length-range="6" data-validate-words="2" name="name" id="name" placeholder=" first name and Last name" required="required" />
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>
<div class="field">
<label>
<span>Occupation</span>
<input class='optional' name="occ" id="occ" data-validate-length-range="5,15" type="text" />
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
                        <span class='extra'>(optional)</span>
</div>
<div class="field">
<label>
<span>Age</span>
<!--<input required="required" type="text" pattern='\d+' />-->
<input type="text" name="age" id="age" data-validate-length-range="2,6" required="required" placeholder="age"   data-validate-text-invalid='Please follow the pattern rules' />
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>
<div class="field">
<label>
<span>Gender</span>
<select name="gen" id="gen" class="input">
<option value="">-- please select --</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>

</select>
</label>
</div>
<div class="field">
<label>
<span>email</span>
<input name="em" id="em" class='email' required="required" type="em" />
</label>
</div>

<div class="field">
<label>
<span>Citizenship Number</span>
<input type="number" class='number' name="ciz" id="ciz" data-validate-linked='number' required='required'>
</label>
</div>
<div class="field">
<label>
<span>Address</span>
<input name="addr" id="addr" required="required" type="Address" Address />
</label>
</div>
<div class="field">
<label>
<span>District</span>
<input type="address" name="dist"  id="dist" required='required'>
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>
<div class="field">
<label>
<span>Pincode</span>
<input type="number" class='number' name="pin" id="pin" data-validate-minmax="1000,1000000" required='required'>
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>
<div class="field">
<label>
<span>Vehicle Name</span>
<input name="veh" id="veh" required="required" type="Address" name />
</label>
</div>
<div class="field">
<label>
<span>Date</span>
<input class='date' type="date" name="date" id="date" required='required'>
</label>
</div>
<div class="field">
<label>
<span>Time</span>
<input class='time' type="time" name="time" id="time" required='required'>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</label>
</div>


<div class="field">
<label>
<span>Mobile No.</span>
<input type="tel" class='tel' name="mob" id="mob" required='required' data-validate-length-range="8,20">
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>
<div class="field">
<label>
<span>Near Office</span>
<select  name="near" class="input" id="near" required>
<option value="">-- please select --</option>
<option value="Province 1">Province 1</option>
<option value="Madesh Pradesh">Madesh Pradesh</option>
<option value="Bagmati Pradesh">Bagmati Pradesh</option>
<option value="Gandaki Pradesh">Gandaki Pradesh</option>
<option value="Lumbini Pradesh">Lumbini Pradesh</option>
<option value="Karnali Pradesh">Karnali Pradesh</option>
<option value="Sudurpashchim Pradesh">Sudurpashchim Pradesh</option>
</select>
</label>
<div class='tooltip help'>

<div class='content'>
<b></b>

</div>
</div>
</div>


<div class="field">
<label>
<span>Terms and Conditions</span>
<input required="required" type="checkbox" />
<span>I agree</span>
</label>
</div>



<div class="field multi required">

<div class='tooltip help'>

</div>
</div>
<div class="field">

</div>
<div class="field">
<label>
<span>message</span>
<textarea required="required" name='mess' id="mess"></textarea>
</label>
</div>
</fieldset>
<br>
<button type='submit' id="submit" value="submit" name="submit">Submit</button>
                <button type='reset'>Reset</button>
</form>
</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="multifield.js"></script>
    <script src="validator.js"></script>
<script>
// initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
var validator = new FormValidator({"events" : ['blur', 'paste', 'change']}, document.forms[0]);

validator.texts.mySpecialInput = "wrong input" // custom error message for pattern mismatch

        // on form "submit" event
document.forms[0].onsubmit = function(e){
var submit = true,
validatorResult = validator.checkAll(this);

console.log(validatorResult);
return !!validatorResult.valid;
}

// on form "reset" event
document.forms[0].onreset = function(e){
validator.reset();
}

        // stuff related ONLY for this demo page:
$('.toggleValidationTooltips').change(function(){
validator.settings.alerts = !this.checked;

if( this.checked )
$('form .alert').remove();
}).prop('checked',false);
</script>
</body>
</html>