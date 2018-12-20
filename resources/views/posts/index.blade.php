<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/app.css">
	<title>Blog json</title>
</head>
<body>
	<div class="container">	

		<h1>Publicações</h1>

		@foreach ($posts as $post)

			<div class="panel panel-default">

				<div class="panel-body">

					<a href="/posts/{{ $post->id }}">

						{{ $post->title }}
						
					</a>					

				</div>

			</div>

		@endforeach
		
	</div>

</body>
</html>

