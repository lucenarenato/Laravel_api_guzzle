<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/app.css">
	<title>Blog</title>
</head>
<body>
	<div class="container">	

		<h1>Publicações</h1>		

			<div class="panel panel-default">

				<div class="panel-header">
					<h4>{{ $post->title }}</h4>
				</div>

				<div class="panel-body">

					{{ $post->body }}			

				</div>

			</div>		
		
	</div>

</body>
</html>

