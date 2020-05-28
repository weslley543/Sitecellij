<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {

  public function index() {
    // $this->load->view('header_panel');
    // $this->load->view('sidebar_panel');
    // $this->load->view('footer_panel');

    // $this->template->show('home.php');
  }

  public function pagina_2() {
    $this->load->view('header_panel');
    $this->load->view('postage_panel');
    $this->load->view('footer_panel');
  }
}
