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
            <h3>List Artikel</h3>

            <table class="data">
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th width="20%">Pilihan</th>
                </tr>
                
                <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?=$article->title; ?></td>
                    <td>
                        <?=substr($article->content, 0, 100);?>
                    </td>
                    <td>
                        <a href="<?=BASE?>index.php?page=update_article&id=<?=$article->id?>" class="btn btn-edit">edit</a>
                        <a href="<?=BASE?>index.php?page=delete_article&id=<?=$article->id?>" class="btn btn-hapus">hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!--<tr>
                    <td>Hello berita</td>
                    <td>
                        Dolor molestiae voluptates voluptatibus officia velit quas nihil labore. Enim!
                    </td>
                    <td>
                        <a href="" class="btn btn-edit">edit</a>
                        <a href="" class="btn btn-hapus">hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>Hello berita</td>
                    <td>
                        Dolor molestiae voluptates voluptatibus officia velit quas nihil labore. Enim!
                    </td>
                    <td>
                        <a href="" class="btn btn-edit">edit</a>
                        <a href="" class="btn btn-hapus">hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>Hello berita</td>
                    <td>
                        Dolor molestiae voluptates voluptatibus officia velit quas nihil labore. Enim!
                    </td>
                    <td>
                        <a href="" class="btn btn-edit">edit</a>
                        <a href="" class="btn btn-hapus">hapus</a>
                    </td>
                </tr>-->
            </table>

        </div>

    </div>
</body>
</html>
