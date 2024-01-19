

@include('./shared/login')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="container mt-100">
                            		

                            	
                               
	<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  	<div class="wrapper">
  		<div class="container">
  			<div class="main-content">
			    <h3 class="mt-4">List Product</h3>
				{{-- {{ $test }} --}}
				{{-- Hello World --}}
				@php
					$data = "Test Hello";
				@endphp
				{{ $data }}
			    <table class="table table-striped table-bordered">
			    	<thead>
			    		<tr>
			    			<th>ID</th>
			    			<th>SKU</th>
			    			<th>Name</th>
			    			<th>Price</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		@foreach ($products as $product)
			    			<tr>
			    				<td>{{ $product['id'] }}</td>
			    				<td>{{ $product['sku'] }}</td>
			    				<td>{{ $product['name'] }}</td>
			    				<td>{{ $product['price'] }}</td>
			    			</tr>
			    		
			    			<tr>
			    				<td colspan="4">
			    					Empty
			    				</td>
			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
			</div>
		</div>
	</div>
  </body>
</html>