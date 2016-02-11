<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?=BASE .'css/style.css';?>">
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
            <?php foreach ($articles as $article) : ?>
            <div class="item">
                <h3>
                    <a href="<?=BASE . 'index.php?page=detail_article&id=' . $article->id;?>">
                    <?=$article->title;?>
                    </a>
                </h3>
                <p><?=$article->created;?></p>
                <div>
                    <?=$article->content;?>
                </div>
            </div>
            <?php endforeach; ?>
            <!--<div class="item">
                <h3><a href="detail-artikel.html">Judul Artikel</a></h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>
            <div class="item">
                <h3>Judul Artikel</h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>
            <div class="item">
                <h3>Judul Artikel</h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>
            <div class="item">
                <h3>Judul Artikel</h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>
            <div class="item">
                <h3>Judul Artikel</h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>
            <div class="item">
                <h3>Judul Artikel</h3>
                <div>
                    Adipisicing dicta adipisci placeat hic alias nesciunt. Vitae temporibus minus ipsum dolores at tempora unde. Ducimus veniam ad enim provident vitae quisquam iste sequi. Deserunt ipsum assumenda aspernatur magnam voluptatum a iste. Aspernatur eum atque cum velit vitae ipsam optio voluptatum rem rem facilis harum consectetur harum! Repellat ab corporis.
                </div>
            </div>-->
        </div>

        <div class="footer">
            Simple Blog &copy; 2016
        </div>
    </div>
</body>
</html>
