<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller DashboardController
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class DashboardController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
      $this->load->model('User_model');
      
      $users = $this->User_model->getData();
      
      $this->load->view('dashboard', ['users' => $users]);
  }
  
}


/* End of file DashboardController.php */
/* Location: ./application/controllers/DashboardController.php */