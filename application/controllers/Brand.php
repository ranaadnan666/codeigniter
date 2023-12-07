<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {
    	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('brand_Model'); // Load URL Helper
        $this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
    }
    
        public function index()
        {
            $this->load->view('brand/CreateBrand');
        }
        public function Create(){
            $this->form_validation->set_rules('brand_title','brand_title','required');
            $this->form_validation->set_rules('brand_link','brand_link','required');
            $this->form_validation->set_rules('brand_dec','brand_dec','required');
            
            if ($this->form_validation->run()==false){
                $this->load->view('brand/CreateBrand');
    
            }
            else{
                //Save data successfully
                $post  =  $this->input->post();
                $this->brand_Model->Create($post);
                redirect(base_url() . 'index.php/Brand/Read');


            }
        }
        public function Read()
        {
            $this->load->database();  
            $this->load->model('brand_Model');
            $data['user'] = $this->brand_Model->getData();
            $this->load->view('brand/Read',$data);
     
        }
        // edit data

        public function Edit($id) {
            $this->load->model('brand_Model');
            // Initialize $data
            $data = array();
            $data['brand'] = $this->brand_Model->get_user_by_id($id); // Implement this method in your model
    
            $this->form_validation->set_rules('brand_title', 'brand_title', 'required');
            $this->form_validation->set_rules('brand_link', 'brand_link', 'required');
            $this->form_validation->set_rules('brand_dec', 'brand_dec', 'required');
    
            if ($this->form_validation->run() == false) {
                $this->load->view('brand/Edit', $data);
            } else {
                $formArray = array();
                $formArray['brand_title'] = $this->input->post('brand_title');
                $formArray['brand_link'] = $this->input->post('brand_link');
                $formArray['brand_dec'] = $this->input->post('brand_dec');
                $this->brand_Model->Edit($id, $formArray);
                redirect(base_url() . 'index.php/brand/Read');
            }
        }
        // delete record
        public function Delete($user_id) {
            $this->load->model('brand_Model');
            
            $this->brand_Model->delete($user_id);
            redirect(base_url() . 'index.php/Brand/Read');


        }
}