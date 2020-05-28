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

    public function index(){
        $dados['title'] = $this->input->get('title');
        $dados['page'] = $this->input->get('page');
       
        $datas = json_decode(json_encode($this->model_post->index($dados)), true);
        
        $texto ="";
        foreach($datas as $data){
            $id=$data['id'];
            $titulo=$data['title'];
            $subtitle = $data['subtitle'];
            $datacriado = $data['created_at'];
            $datamodificado = $data['updated_at'];
            $texto .= "<tr id = 'id$id'>
                        <td>$titulo</td>
                        <td>$subtitle</td>
                        <td>$datacriado</td>
                        <td>$datamodificado</td>
                        <td>
                            <button class='btn btn-warning' onClick='atualizar($id)'><i class='fas fa-edit'></i></button>
                            <button class='btn btn-danger' onClick='apagar($id)'><i class='fas fa-trash'></i></button>
                        </td>  
                      </tr>";
            
        
        }
        header('Content-Type: application/json; charset=utf-8');
		echo json_encode($texto,JSON_UNESCAPED_UNICODE);
    }

    public function delete(){
       $id = $this->input->post('cod');
       if($this->model_post->delete($id)){
        $ok['ok']=true;
        header('Content-Type: application/json; charset=utf-8');
		echo json_encode($ok,JSON_UNESCAPED_UNICODE);
       }else{
        $ok['ok']=false;
        header('Content-Type: application/json; charset=utf-8');
		echo json_encode($ok,JSON_UNESCAPED_UNICODE);
       }
        
    }

}