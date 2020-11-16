<?php
 
class Login_Model extends CI_Model {
    //put your code here
      public function check_user_login_info($user_name ,$password)
    {
        $username=$this->input->post('email',true);
        $password=$this->input->post('password',true);
        //echo $email_address.'------------'.$password;
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('email',$user_name);
        $this->db->where('password',$password);
        // $this->db->where('activation_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result; 
      
    }
    
    public function check_date()
    {
    $this->db->select('date');
    $this->db->from('tbl_users');
    $this->db->where('type','admin');
    $query_result=$this->db->get();
    $result=$query_result->row();
    return $result; 
    }
}

?>
