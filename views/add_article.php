<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?=BASE?>css/style-admin.css">
</head>
<body>
    <div class="container">
        <h1>Simple Blog Admin</h1>

        <div class="sidebar">
            <ul>
                <li><a href="<?=BASE?>">Dashboard</a></li>
                <li><a href="<?=BASE?>index.php?page=add_article">Tambah Artikel</a></li>
                <li><a href="<?=BASE?>index.php?page=list_articles">List Artikel</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Tambah Artikel</h3>
            <?=$message?>
            <form method="post" class="form-artikel">
                <p>Judul</p>
                <p><input name="title"></p>
                
                <p>Isi Artikel</p>
                <p><textarea name="content"></textarea></p>

                <p><input type="submit" class="btn btn-submit"></p>
            </form>
        </div>

    </div>
</body>
</html>

