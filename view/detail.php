<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $detail->title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<header>
            <h2><?php echo $detail->title; ?></h2>
        </header>
        <article>    	
			<p><?php echo $detail->content; ?></p>
        </article>
        <footer>
            Copyright &copy; 2016
        </footer>
	</div>
    
</body>
</html>
