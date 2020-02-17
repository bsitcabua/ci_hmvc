<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Projects';

        // Load model
        $this->load->model('project/project_model');
        $this->load->model('company/company_model');
    }

    public function index()
    {
        $this->data['content_view'] = 'project/index';
        $this->data['projects'] = $this->project_model->get();
        $this->template->render($this->data);
    }

    // Show company details
    public function details($id = null)
    {
        $where = array('id' => $id);
        $company = $this->company_model->get_where($where);

        // If id not null
        if($company->num_rows() > 0){
            $this->data['company'] = $company->row();
            $this->data['content_view'] = 'company/show';
            $this->template->render($this->data);
        }
        else{
            echo "Company not found";
        }
    }

    public function create()
    {   
        // Load content view
        $this->data['content_view'] = 'project/create';
        $this->data['companies'] = $this->company_model->get();
        $this->template->render($this->data);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Project name', 'required');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required');
        $this->form_validation->set_rules('priority', 'Priority', 'required');
        $this->form_validation->set_rules('company_id', 'Company', 'required');

        if ($this->form_validation->run() == TRUE) {

            $project_data = array(
                'name'          => $this->input->post('name'),
                'description'   => $this->input->post('description'),
                'deadline'      => $this->input->post('deadline'),
                'priority'      => $this->input->post('priority'),
                'company_id'    => $this->input->post('company_id'),
                'created_by'    => 1 //temporary
            );

            if($company_id = $this->project_model->create($project_data)){

                redirect('/project', 'refresh');
            }

        }
        else{
            // Go back from previous page
            // Does not meet the requirements
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}