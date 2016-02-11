<?php
class Model 
{
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbname = 'simple_blog';
        $dbuser = 'root';
        $dbpass = 'root';

        $this->db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function get_articles()
    {
        $query = "SELECT id, title, created, content FROM articles";
        $data = $this->db->query($query);
        return $data->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_article($id)
    {
        $query = "SELECT id, title, content, created FROM articles WHERE id = $id";
        $data = $this->db->query($query);
        return $data->fetch(PDO::FETCH_OBJ);
    }

    public function add_article($data)
    {
        $title = $data['title'];
        $content = $data['content'];

        $query = "INSERT INTO articles SET title = '$title', content = '$content', created = NOW()";
        return $this->db->exec($query);
    }

    public function delete_article($id)
    {
        $query = "DELETE FROM articles WHERE id = $id";
        return $this->db->exec($query);
    }

    public function update_article($id, $data)
    {
        $title = $data['title'];
        $content = $data['content'];

        $query = "UPDATE articles SET title = '$title', content = '$content' WHERE id = $id";
        return $this->db->exec($query);
    }
}
