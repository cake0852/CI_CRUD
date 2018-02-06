<?php
class Account_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function apply_account($attributes)
    {        
        return $this->db->insert('user', $attributes);
    }
    public function updateByAccount($id, $attributes)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $attributes);
    }
     public function ShowAccount($id)
    {
        return  $this->db  
                        ->where('id', $id)
                        ->get ( 'user' ) // 抓取資料庫指令
                        ->result_array();
         
    }
    public function apply_list()
    {
        return $this->db->get ( 'user' )
                    ->result_array();
    }
    public function apply_delete($id)
    {   
        $this->db->where('id',$id);
        $this->db->delete('user');
        
    }
    public function getOne($id)
    {
       return $this->db
            ->where('id', $id)
            ->get( 'user' )
            ->result_array(); // 抓取資料庫指令
    }
}