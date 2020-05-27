<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Post_model', 'model_post');
	}
    public function create(){
        $this->form_validation->set_rules('title', 'TITLE', array('required'));
        $this->form_validation->set_rules('subtitle', 'SUBTITLE', array('required'));
        $this->form_validation->set_rules('text', 'TEXT', array('required'));

        if($this->form_validation->run()){

            $dados['title'] = $this->input->post('title');
            $dados['subtitle'] = $this->input->post('subtitle');
            $dados['text'] = $this->input->post('subtitle');
            
            $this->model_post->create($dados);
        }else{
            echo validation_errors();
        }
    }

}