<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?=BASE . 'css/style.css';?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Simple Blog</h1>
            <ul class="clearfix">
                <li><a href="<?=BASE;?>">Home</a></li>
                <li><a href="<?=BASE . 'index.php?page=about'; ?>">About</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="detail">
                <h1><?=$article->title;?></h1>
                <p><?=$article->created;?>
                <div>
                    <?=$article->content;?>
                </div>
            </div>
        </div>

        <div class="footer">
            Simple Blog &copy; 2016
        </div>
    </div>
</body>
</html>
