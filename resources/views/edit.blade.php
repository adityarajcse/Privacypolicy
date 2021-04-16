<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy - Vridhi Softech Apps</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
		<header>
		<a href="javascript:void(0)" class="logo"><img src="images/logo.png"></a>
			<span class="tagline">#VridhiSoftechAndroidApps</span>
		</header>   
		<section>
		<div class="container">         
			<div class="proper">
				<div class="content">

						<div class="form-group col-md-12 text-center">
						  <form class="form-horizontal row form-style" action ="/edit" method="POST">
					@csrf
                  
						<div class="form-group col-md-6">  <input type="hidden" name="id" value= "{{$data['id']}}"> 
                      
						  	<input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" value= "{{$data['firstname']}}">
                              <span id="firstnameerror" style="color:red "> @error('firstname') {{$message}} @enderror</span><br><br>
						</div>

						
						<div class="form-group col-md-6">
						  	<input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" value= "{{$data['lastname']}}">
                              <span id="lastnameerror" style="color:red "> @error('lastname') {{$message}} @enderror</span><br><br>
						</div>

					
						<div class="form-group col-md-6">
						  	<input id="email" name="email" type="text" placeholder="Email" class="form-control" value= "{{$data['email']}}">
                              <span id="emailerror"style="color:red "> @error('email') {{$message}} @enderror</span><br><br>
						</div>

					
						<div class="form-group col-md-6">
						  	<input name="subject" type="text" placeholder="Subject" class="form-control" value= "{{$data['subject']}}">
                              <span style="color:red "> @error('subject') {{$message}} @enderror</span><br><br>
						</div>

						
						<div class="form-group col-md-12">
						  	<textarea class="form-control" id="textarea" placeholder="Message" name="message"> {{$data['message']}}</textarea>
                             
                              <span style="color:red "> @error('message') {{$message}} @enderror</span><br><br>
						</dbutton class="btn btn-primary" onclick="validation1()"  >Submit</button>
						</div>
                      
					</form>
					</div>
				</div>
			</div> 
		</div>
	</section>
	<footer>
	    <ul>
	        <li>
	            <a href="{{ url('/') }}">Privacy Policy</a>
	        </li>
	        <li>
	            <a href="{{ url('/contact') }}">Contact us</a>
	        </li>
	        <li>
	            <a href="{{ url('/product') }}">Products</a>
	        </li>
			<li>
	            <a href="{{ url('/listproduct') }}">List Products</a>
	        </li>
	    </ul>
	    <ul class="social-icon-footer">
	        <li>
	            <a href="https://www.facebook.com/VridhiSoftechServicesPvtLtd/" target="_blank"><img src="images/facebook.png"></a>
	        </li>
	        <li>
	            <a href="https://twitter.com/VridhiSoftech" target="_blank"><img src="images/twitter.png"></a>
	        </li>
	        <li>
	            <a href="https://in.linkedin.com/company/vridhi-softech-services" target="_blank"><img src="images/linkedin.png"></a>
	        </li>
	    </ul>
	    <span class="cr">
	        ©2021 by Vridhi Softech Apps · All Rights Reserved
	    </span>
	</footer>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
<script>


function validation1(){
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var email = document.getElementById("email").value;
 
var letters = /^[A-Za-z]{3,10}$/;
var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (letters.test(firstname) ){
	document.getElementById("firstnameerror").innerHTML=" ";

}
else{
	document.getElementById("firstnameerror").innerHTML="**firstname is invalid ";
	return false;
}
if (letters.test(lastname) ){
	document.getElementById("lastnameerror").innerHTML=" ";

}
else{
	document.getElementById("lastnameerror").innerHTML="last name is invalid" ;
	return false;
}
if (mail.test(email) ){
	document.getElementById("emailerror").innerHTML=" ";

}
else{
	document.getElementById("emailerror").innerHTML="email is invalid";
	return false;
}


}

</script>
</html>
