<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Blog Thesansco</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Blog Title</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>New Post</h2>
			<p>
				<a href="<?php echo BASE_URL; ?>admin/posts" class="btn btn-default">Back</a>	
			</p>		
			<?php
			if (isset($result) && $result) {
				echo  '<div class="alert alert-success">Post Saved!</div>';
				}
			?>
			<form method="post">
				<div class="form-group">
					<label for="inputTitle">Title</label>
					<input type="text" name="title" id="inputTitle" class="form-control">
				</div>
				<textarea name="content" id="inputContent" rows="5" class="form-control"></textarea>
				<br>
				<input type="submit" value="Save" class="btn btn-primary">
			</form>
		</div>
	</div>
		<div class="col-md-4">

		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-12">
			<footer>
				This is a footer<br>
				<a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
			</footer>
		</div>
	</div>
</body>
</html>