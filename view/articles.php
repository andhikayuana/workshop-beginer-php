<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple BLog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h2>Simple Blog</h2>
        </header>
        <article>
            <ul>
                <?php foreach ($articles as $detail) : ?>

                    <?php $link = 'index.php?page=detail&id='.$detail->id; ?>

                <li>
                    <a href="<?php echo $link; ?>" class="article-title">
                        <?php echo $detail->title; ?>
                    </a>
                    |
                    <a href="#"><button class="btn">Edit</button></a> - <a href="#"><button class="btn">Delete</button></a>
                </li>

                <?php endforeach; ?>
            </ul>
        </article>
        <footer>
            Copyright &copy; 2016
        </footer>
    </div>
</body>
</html>
