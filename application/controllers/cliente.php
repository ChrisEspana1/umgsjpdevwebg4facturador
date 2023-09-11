 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Cliente extends CI_Controller{
  //INICIALIZAMOS LOS VALORES DEL CONSTRUCTOR
     function __construct(){
         parent::__construct();
         $this->load->model('clienteModel');
         $this->load->library('session');
   }

// FUNCION INDEX
     public function index(){
        if (!$this->session->userdata('user')) {
            redirect('login/index');
        } else {
            $data['clientes'] = $this->clienteModel->getClientes();
            $this->load->view('V_venta', $data);
        }
         
     }
}