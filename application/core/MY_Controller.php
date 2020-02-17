<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
    
    public $data;

    public function __construct()
    {
        parent::__construct();
        // Load module template
        $this->load->module('Template');
    }
}
