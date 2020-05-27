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
}