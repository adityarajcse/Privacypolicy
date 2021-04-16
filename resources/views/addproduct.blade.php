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
				@if(Session::has('added'))
				      <div class="alert alert-success" role="alert">
                     {{Session::get('added')}}
                       </div>
			   @endif
					<form class="form-horizontal row form-style" enctype="multipart/form-data" name="myform" action ="/addproduct"  method="POST">
					@csrf
						<div class="form-group col-md-7">
						   <input name="title" type="text" placeholder="Title" class="form-control" > 
                              <span style="color:red "> @error('Title') {{$message}} @enderror</span><br><br>
						</div>
						<div class="form-group col-md-7">
						  	<textarea class="form-control" id="textarea" placeholder="Description" name="description"></textarea>
                              <span style="color:red "> @error('Description') {{$message}} @enderror</span><br><br>
						</div>
						
						<div class="form-group col-md-7">
						<label for="img">Thumbnail:</label>
                          <input type="file" id="thumbnail" name="thumbnail" accept="image/*">  
						</div>

				
						  <div class="form-group col-md-7">
						<label for="img">Icon</label>
                          <input type="file" id="image" name="image" accept="image/*">
						  </div>

						  <div class="form-group col-md-7">
						   <input name="playStoreUrl" type="text" placeholder="GooogleLink" class="form-control" > 
                           
						</div>
						
			
                      
						<div class="form-group col-md-7 text-center">
						 <button class="btn btn-primary" type="submit" >Submit</button>
						</div>
					
					</form>
				</div>
			</div> 
		</div>
	</section>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
