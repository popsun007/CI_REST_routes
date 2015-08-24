<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Add Product</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    	<div class="container">
        <h2>Add a new product</h2>
        <form action="/products/add" method="post">
        	<p>Name</p>
        	<input type="text" name="name">
        	<p>Description</p>
        	<input type="text" name="description">
        	<p>Price</p>
        	<input type="text" name="price">
        	<div><input type="submit" value="Create"></div>
        </form>
        <a href="/">Go back</a>
        </div>
    </body>
</html>