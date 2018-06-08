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
		<div style="color: red">
			<center><p style="font-size: 60px;">Product</p></center>
		</div>
		<a href="{{asset('')}}product/create"><button class="btn btn-sm btn-primary">Add</button></a>
		<p></p>
		@if(session()->has('flag'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{session()->get('flag')}}
			</div>
		@endif
		<div class="table-reponsive">

			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Price</th>
						<th>Created at</th>
						<th>Update at</th>
						<th>Action</th>	
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
						<tr>
							<td>{{ $product -> id }}</td>
							<td>{{ $product -> name }}</td>
							<td>{{ $product -> price }}$</td>
							<td>{{ $product -> created_at }}</td>
							<td>{{ $product -> updated_at }}</td>
							<td>
								<a href="{{asset('')}}product/{{ $product -> id }}"><button class="btn btn-info">Show</button></a>

								<a href="{{asset('')}}product/{{ $product -> id }}/edit"><button class="btn btn-success">Edit</button></a>
								<form style="display: inline-block;" action="{{asset('')}}product/{{ $product -> id }}" method="POST">
									@csrf
									<input type="hidden" name="_method" value="delete">
									<button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
					
				</tbody>
			</table>
			{{$products->links()}}
		</div>
	</div>


</body>
</html>