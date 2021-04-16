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
		            <h1>Products</h1>
						@foreach($Products as $member)
							<div class="row product">
									<div class="col-md-12">
										<h2>{{$member['title']}}</h2>
									</div>
									<div class="col-md-2">
										<a href="{{$member['playStoreUrl']}}" class="" target="_blank">
											<img src="{{asset('').'/'.$member['thumbnail']}}" alt="Easy Notepad for Android" class="logo">
										</a>
									</div>
									<div class="col-md-10">
										<p class="descr">{{$member['description']}}</p>
										<a href="{{$member['playStoreUrl']}}"class="badge" target="_blank">
											<img src="{{asset('').'/'.$member['image']}}" alt="Get it on Google Play">
										</a>
									</div>
								</div>
						@endforeach() 
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
</html>