<?php
class Controller
{
    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
        $this->data = array();
    }

    public function articles()
    {
        $this->data['articles'] = $this->model->getAll();
        $this->view->load('articles', $this->data);
    }

    public function detail($id)
    {
        $this->data['detail'] = $this->model->getDetail($id);
        $this->view->load('detail', $this->data);
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
