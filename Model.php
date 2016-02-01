<?php
class Model
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=simple_blog;charset=utf8', 'root', 'programmer');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAll()
    {
        $sql = "SELECT id, title, content FROM articles";
        $data = $this->db->query($sql);
        return $data->fetchAll(PDO::FETCH_OBJ);
    }

    public function getDetail($id)
    {
        $sql = "SELECT id, title, content FROM articles WHERE id = $id";
        $data = $this->db->query($sql);
        return $data->fetch(PDO::FETCH_OBJ);
    }

    public function edit($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }

    
}
