<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
    }
    
    public function index()
    {
        if (!$this->session->userdata('user')) {
            redirect('login/index');
        } else {
            $this->load->view('V_Dashboard');
        }
    }
 
}
