<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {

  public function index() {
    $this->load->view('header_panel');
    $this->load->view('footer_panel');

    // $this->template->show('home.php');
  }

  public function criarpostagem() {
    $this->load->view('header_panel');
    $this->load->view('postage_panel');
    $this->load->view('footer_panel');
  }
  public function visualizarpostagem() {
    $this->load->view('header_panel');
    $this->load->view('postage_view');
    $this->load->view('footer_panel');
  }
}
