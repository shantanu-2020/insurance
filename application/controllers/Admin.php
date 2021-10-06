<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   public function index() { 
    	$data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
       $data['page_name']        = '/body';
      $this->load->view("template/dashboard",$data);
    }
    
    public function create() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/staff';
      $this->load->model('Admin_Model');
      $data['staff'] = $this->Admin_Model->getEmployee();
      $this->load->view("/template/dashboard",$data);
      }

    public function store()
        {
      $this->form_validation->set_rules('designation_name', 'Designation Name', 'required|trim');
      $this->form_validation->set_rules('discription', 'Discription', 'required|trim');
       
      if($this->form_validation->run())
       
        {
      $data = [
      'designation_name' => $this->input->post('designation_name'),
      'discription' => $this->input->post('discription'),
       ];
      $this->load->model('Admin_Model');
      $this->Admin_Model->insertEmployee($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/create/");
             }
        }
        //agent function
     public function agent() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/agent';
      $this->load->model('Admin_Model');
      $data['agent'] = $this->Admin_Model->getAgent();
      $this->load->view("/template/dashboard",$data);
      }

       public function reference()
        {
      $this->form_validation->set_rules('reference_type', 'Reference Type', 'required|trim');
      $this->form_validation->set_rules('discription', 'Discription', 'required|trim');
       
      if($this->form_validation->run())
       
        {
      $data = [
      'reference_type' => $this->input->post('reference_type'),
      'discription' => $this->input->post('discription'),
       ];
      $this->load->model('Admin_Model');
      $this->Admin_Model->insertAgent($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/agent");
             }
       
    }

     public function type() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/type';
      $this->load->model('Admin_Model');
      $data['type'] = $this->Admin_Model->getType();
      $this->load->view("/template/dashboard",$data);
      }

       public function advisor()
        {
      $this->form_validation->set_rules('agent_advisor', 'Demo', 'required|trim');
      $this->form_validation->set_rules('discription', 'Demo description', 'required|trim');
       
      if($this->form_validation->run())
       
        {
      $data = [
      'agent_advisor' => $this->input->post('agent_advisor'),
      'discription' => $this->input->post('discription'),
       ];
      $this->load->model('Admin_Model');
      $this->Admin_Model->insertType($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/type");
             }
       
    }


      public function period() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/period';
      $this->load->model('Admin_Model');
      $data['period'] = $this->Admin_Model->getPeriod();
      $this->load->view("/template/dashboard",$data);
      }
    

       public function policy()
        {
      $this->form_validation->set_rules('add_free', 'Add Free Period', 'required|trim');
      $this->form_validation->set_rules('discription', 'Discription', 'required|trim');
       
      if($this->form_validation->run())
       
        {
      $data = [
      'add_free' => $this->input->post('add_free'),
      'discription' => $this->input->post('discription'),
       ];
      $this->load->model('Admin_Model');
      $this->Admin_Model->insertPeriod($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/period");
             }
        }

     public function form() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/basic';
      $this->load->view("/template/dashboard",$data);
     }

      public function details()
        {

      $data = [
      'id' => $this->input->post('id'),
      'staff_id' => $this->input->post('staff_id'),
      'email' => $this->input->post('email'),
      'alternate_email' => $this->input->post('alternate_email'),
      'role' => $this->input->post('role'),
      'staff_type' => $this->input->post('staff_type'),
      'aadhar' => $this->input->post('aadhar'),
      'appointment' => $this->input->post('appointment'),
      'first_name' => $this->input->post('first_name'),
      'middle_name' => $this->input->post('middle_name'),
      'last_name' => $this->input->post('last_name'),
      'experience' => $this->input->post('experience'),
      'blood_group' => $this->input->post('blood_group'),
      'dob' => $this->input->post('dob'),
      'gender' => $this->input->post('gender'),
      'medical_history' => $this->input->post('medical_history'),
    ];
                     
            
      $this->load->model('Admin_Model');
      $this->Admin_Model->insertForm($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/form");
            echo"Data has been submited successfully";
             {
              redirect("admin/form");
              echo"data has been not inserted";
             }
           }

      public function class() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/board';
      $this->load->model('Admin_Model');
      $data['class'] = $this->Admin_Model->getClass();
      $this->load->view("/template/dashboard",$data);
      }

       public function fetch()
        {
     
      $data = [
      'class_1' => $this->input->post('class_1'),
      'stream' => $this->input->post('stream'),
      'institute_name' => $this->input->post('institute_name'),
      'board' => $this->input->post('board'),
      'passing' => $this->input->post('passing'),
      'percentage' => $this->input->post('percentage'),
       ];

      $this->load->model('Admin_Model');
      $this->Admin_Model->insertClass($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/class");
       }
            

     public function address() { 
      $data = array();
      $data['controller_name']  = 'admin';
      $data['view']             = 'template/dashboard';
      $data['page_name']        = '/address';
      $this->load->view("/template/dashboard",$data);
     }

     public function address1()
        {
    
      $data = [
      'mobile_number' => $this->input->post('mobile_number'),
      'alternate_number' => $this->input->post('alternate_number'),
      'image' => $this->input->post('image'),
      'designation' => $this->input->post('designation'),
      'local_address' => $this->input->post('local_address'),
      'zip_code' => $this->input->post('zip_code'),
      'permanent_address' => $this->input->post('permanent_address'),
      'zip_code1' => $this->input->post('zip_code1'),
       ];
       

      $this->load->model('Admin_Model');
      $this->Admin_Model->insertAddress($data);
      $this->session->set_flashdata('status', 'Employee Data inserted Successfully');
      redirect("admin/address");

       }



        



}
?>
