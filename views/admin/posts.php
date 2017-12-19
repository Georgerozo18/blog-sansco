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
			<h2>Posts</h2>
			<p>
				<a href="<?php echo BASE_URL; ?>admin/posts/create" class="btn btn-primary">New Posts</a>
			</p>
			<table class="table">
				<tr>
					<th>Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				foreach ($blogPost as $blogPost) {
				?>
				<tr>
					<td>
						<?php
						echo $blogPost['title'];
						 ?>
					</td>
					<td>
						Edit
					</td>
					<td>
						Delete
					</td>
				</tr>
				<?php
				}
				?>
			</table>
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