<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Companies';

        // Load model
        $this->load->model('company/company_model');
    }

    public function index()
    {   
        // Load content view
        $this->data['content_view'] = 'company/index';
        // Get all companies
        $this->data['companies'] = $this->company_model->get();
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
        $this->data['content_view'] = 'company/create';
        $this->template->render($this->data);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Company name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No.', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE) {

            $company_data = array(
                'name'      => $this->input->post('name'),
                'address'   => $this->input->post('address'),
                'email'     => $this->input->post('email'),
                'contact_no'=> $this->input->post('contact_no'),
                'created_by'=> 1 //temporary
            );

            if($company_id = $this->company_model->create($company_data)){

                redirect('/company', 'refresh');
            }

        }
        else{
            // Go back from previous page
            // Does not meet the requirements
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function edit($id = null)
    {
        $where = array('id' => $id);
        $company = $this->company_model->get_where($where);

        // If id not null
        if($company->num_rows() > 0){
            $this->data['company'] = $company->row();
            $this->data['content_view'] = 'company/edit';
            $this->template->render($this->data);
        }
        else{
            echo "Company not found";
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Company name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No.', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE) {

            $id     = $this->input->post('id');
            $where 	= array('id' => $id);
            $company_data = array(
                'name'      => $this->input->post('name'),
                'address'   => $this->input->post('address'),
                'email'     => $this->input->post('email'),
                'contact_no'=> $this->input->post('contact_no'),
            );

            $update = $this->company_model->update($where, $company_data);
    
            if($update){
                redirect('/company', 'refresh');
            }else{
                echo 'Opps something went wrong';
            }

        }
        else{
            // Go back from previous page
            // Does not meet the requirements
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy($id = null)
	{
        if($id){

            $where 	= array('id' => $id);
            $delete = $this->company_model->destroy($where);
            
            if($delete){
                redirect('/company', 'refresh');
            }else{
                echo 'Opps something went wrong';
            }

        }else{
            // Id not found
            redirect($_SERVER['HTTP_REFERER']);
        }
		
	}
}