<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="{{asset('')}}product/{{ $product -> id }}" method="POST" role="form">
			@csrf
			<center><h1>Edit product</h></center>
			<input type="hidden" name="_method" value="put">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" value="{{$product->name}}" id="name" name="name" placeholder="Name">
				@if ($errors->has('name'))
				    <div class="alert alert-danger">
				        <p>{{$errors->first('name')}}</p>
				    </div>
				@endif
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" class="form-control" value="{{$product->price}}" id="price" name="price" placeholder="Price">
				@if ($errors->has('price'))
				    <div class="alert alert-danger">
				        <p>{{$errors->first('price')}}</p>
				    </div>
				@endif
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</body>
</html>