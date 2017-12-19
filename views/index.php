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
			<?php
			foreach ($blogPost as $blogPost) {
				?>
				<div class="blog-post">
					<h2>
						<?php
						echo  $blogPost['title'];
						?>
					</h2>
				<p>Jan 1, 2020 by <a href="">Alex</a></p>
				<div class="blog-post-image">
				<img src="images/keyboard.png" alt="Keyboard">
				</div>
				<div class="blog-post-content">
					<?php
						echo  $blogPost['content'];
					?>
				</div>
				<?php
			}
			?>
			</div>
		</div>
		<div class="col-md-4">
			:V
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