<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');  
    }

    public function index()
    {
        $sessiondata = array(
           'userid' => '',
           'userpass' => '',
           'module_group_guid' => '',
        );

        $this->session->set_userdata($sessiondata);
        $this->load->view('login');
    }

    public function check()
    {
        $userid = $this->input->post('userid');
        $password = $this->input->post('password');

        // print_r($userid);die;
        $query = $this->login_model->check_info($userid, $password);

        if($query->num_rows() > 0 )
        {
            redirect('First_page');

        }
        else
        {
            redirect('Access');

        }
    }
}
?>

