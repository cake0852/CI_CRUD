<?php
class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library('table');
        $this->load->helper('url'); 
    }

    public function index()
    {
        //$this->load->helper('form');
        $query = $this->account_model->apply_list();
        $data = array ( // 存入列陣
            'data' => $query
        );
        $this->load->view('account/list',$data);
    }
    public function list()
    {
        $this->load->helper('url');
        $this->account_model->apply_list();
    }
    public function show()
    {
        $data = $this->account_model->getOne($this->input->get('id') );
    }
    public function showpage()
    {
        $id = $this->input->get('id');
        $query = $this->account_model->ShowAccount($id);
        $data = array ( // 存入列陣
            'id' => $id,
            'data' => $query           
        );
        $this->load->view('account/show',$data);        
    }
    public function insertpage()
    {
        $this->load->view('account/apply');       
    }
    public function insert()
    {
        $data = array(
            'account' => $this->input->post('account'),
            'country' => $this->input->post('country'),
        );
        $this->account_model->apply_account($data);
        $base_Url=base_url("account/");
        header("Location:$base_Url");       
    }
   
    public function updatepage()
    {
        $id = $this->input->get('id');
        $data = array('id' => $id);
        $this->load->view('account/update', $data);       
    }
    public function update()
    {
        $id=$this->input->get('id');
            $temp = array(
                'account'=> $this->input->post('account'), 
                'country'=> $this->input->post('country'),
            );                 
        $this->account_model->updateByAccount($id,$temp);
        $base_Url=base_url("account/");
        header("Location:$base_Url");    
    }
    public function delete()
    {  
        $id=$this->input->get('id');
        $this->account_model->apply_delete($id);
        $base_Url=base_url("account/");
        header("Location:$base_Url");    
    }
} 