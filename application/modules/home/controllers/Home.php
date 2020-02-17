<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Home';

        // Load model
        $this->load->model('home/user_model');
    }

    function index()
    {
        $this->data['content_view'] = 'home/index';
        $this->data['users'] = $this->user_model->get();
        $this->template->render($this->data);
    }

    function about()
    {
        $data['content_view'] = 'home/about';
        $this->template->render($data);
    }

}