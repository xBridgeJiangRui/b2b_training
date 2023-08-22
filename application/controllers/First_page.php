<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_page extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();

	}


    public function index()
    {



        $this->load->view('header_new');
        $this->load->view('dashboard');
        $this->load->view('footer_new');
    }


}
?>

