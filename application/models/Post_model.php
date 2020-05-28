<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{
    private $table = 'notice';
    public function __construct(){
        parent::__construct();
    }

    public function create($dados){
       return $this->db->insert($this->table, $dados);
       
    }

    public function index($dados){
        return $this->db->get($this->table)->result();
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}