<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('register/index');
    }
}