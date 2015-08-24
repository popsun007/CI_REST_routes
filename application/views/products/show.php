<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Product Info</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
        	<h2>Product <?= $id ?></h2>
        	<table class="table table-striped table-bordered">
        		<tbody>
        			<tr>
        				<td>Name:</td>
        				<td><?= $name; ?></td>
        			</tr>
        			<tr>
        				<td>Description:</td>
        				<td><?= $description; ?></td>
        			</tr>
        			<tr>
        				<td>Price:</td>
        				<td><?= $price; ?></td>
        			</tr>
        			<tr>
        				<td>Sell Since:</td>
        				<td><?= $sell_since; ?></td>
        			</tr>
        		</tbody>
        	</table>
        	<a href="/products/edit/<?= $id ?>">Edit</a> | <a href="/">Back</a>
        </div>
    </body>
</html>