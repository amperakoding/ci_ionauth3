<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {
    $this->data['title'] = "Dashboard";

    $this->load->view('back/dashboard/index', $this->data);
  }
}
