<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['content_view'] = 'home/index';
        $this->template->render($data);
    }

    function about()
    {
        $data['content_view'] = 'home/about';
        $this->template->render($data);
    }

}