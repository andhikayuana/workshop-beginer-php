<?php
class Controller
{
    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
        $this->data = array();
    }

    public function public_list_articles()
    {
        $this->data['articles'] = $this->model->get_articles();
        $this->view->load('public/list_articles', $this->data);
    }

    public function detail($id)
    {
        $this->data['article'] = $this->model->get_article($id);
        $this->view->load('public/detail_article', $this->data);
    }

    public function about()
    {
        $this->view->load('public/about', $this->data);
    }

}
