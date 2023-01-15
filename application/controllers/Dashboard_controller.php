<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['MasterLocation'] = $this->Dashboard_model->getAllMasterLocation();
        $this->load->view('templates/header');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard_controller.php and path \application\controllers\Dashboard_controller.php */
