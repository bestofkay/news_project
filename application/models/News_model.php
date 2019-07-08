<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Bcrypt $bcrypt The Bcrypt library
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class News_model extends CI_Model
{
    public function get($id = NULL)
    {
        if(empty($id)){
            $this->db->where('deleted_at', NULL);
            $query = $this->db->get('news');
            return $query->result();
        }else{
            $this->db->where('id', $id);
            $query = $this->db->get('news');
            return $query->row();
        }
       
    }

    public function trash(){

        $this->db->where('deleted_at !=', NULL);
            $query = $this->db->get('news');
            return $query->result();
    }

    public function get_news_name(){
        $this->db->select('id, name');
        $this->db->where('deleted_at', NULL);
        $query = $this->db->get('news');
        return $query->result();
    }

    public function insert($array)
    {
        $this->db->insert('news', $array);
    }

    public function update($data, $id){
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function force_delete($id){
        $this->db->where('id', $id);
        $this->db->delete('news');   
    }

    public function soft_delete($id){
        $data = array(
            'deleted_at' => date('Y-m-d h:m:s'),
    );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function restore($id){
        $data = array(
            'deleted_at' => NULL,
    );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }
    
}