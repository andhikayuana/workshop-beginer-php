<?php
class AdminController
{
    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
        $this->data = array();
    }

    public function list_articles()
    {
        $this->data['articles'] = $this->model->get_articles();
        $this->view->load('admin/list_articles', $this->data);
    }

    public function add_article()
    {
        $this->data['message'] = "";
        if (isset($_POST['title'])) {
            $sukses = $this->model->add_article($_POST);
            if ($sukses) {
                $this->data['message'] = "<p>Berhasil tambah artikel</p>";
            }
        }
        $this->view->load('admin/add_article', $this->data);
    }

    public function update_article($id)
    {
        $this->data['message'] = "";
        if (isset($_POST['title'])) {
            $sukses = $this->model->update_article($id, $_POST);
            if ($sukses) {
                $this->data['message'] = "<p>Berhasil update artikel</p>";
            }
        }
        $this->data['article'] = $this->model->get_article($id);
        $this->view->load('admin/update_article', $this->data);
    }

    public function delete_article($id)
    {
        $this->model->delete_article($id);
        $this->list_articles();
    }

}
