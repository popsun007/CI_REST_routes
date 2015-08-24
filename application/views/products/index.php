<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>REST Routes</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<div class="container">
        <h2>Products</h2>
        <table class="table table-striped table-bordered">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Dscription</th>
        			<th>Price</th>
        			<th>Actions</th>
        		</tr>
        	</thead>
        	<tbody>
<?php 
			foreach($products as $product)
			{
?>
	        	<form action="/products/delete/<?= $product['id']; ?>" method="post">
	        		<tr>
	        			<td><?= $product['name']; ?></td>
	        			<td><?= $product['description']; ?></td>
	        			<td><?= "$" . $product['price']; ?></td>
	        			<td><a href="/products/show/<?= $product['id'] ?>">Show</a> | <a href="/products/edit/<?= $product['id']; ?>">Edit</a> | <input type="submit" value="Remove"></td>
	        		</tr>
        		</form>
<?php
			} 
?>
        	</tbody>
        </table>
        <a href="/products/create">Add a new product</a>
    	</div>	
    </body>
</html>