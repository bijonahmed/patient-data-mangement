<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();

  
$this->load->model('login_model');
        
    }
   public function index()
    {
        $user_id=$this->session->userdata('user_id');
        if($user_id!=NULL)
        {
           // redirect("data_record",'refresh');
            $this->load->view('login');
        }
        else{
        $this->load->view('login');
        }
        /*
           {
        $user_id=$this->session->userdata('user_id');
        if($user_id!=NULL)
        {
            redirect("registration_controller",'refresh');
        }
        else{
        $this->load->view('login_form');
        }
    }
         */
    }
    public function validity() {
      
   $valid_date= $this->login_model->check_date();   
    $valid_date_value=date('z',strtotime($current_date));
    $expire_date_value=date('z',strtotime('2020-09-04'));
	 $diff_value=$expire_date_value-$current_date_value;
	 if($diff_value>=1000){
	  echo "Your testing period is over";
	 }
    }
    
    public function check_user_login()
    {
     $valid_date= $this->login_model->check_date();  
      $current_date= date("Y-m-d");
    $valid_date_value=date('z',strtotime($valid_date->date));
    $expire_date_value=date('z',strtotime($current_date));
	 $diff_value=$expire_date_value- $valid_date_value;
	 if($diff_value>=1000){
	  //echo "Your testing period is over";
              echo "<center><font color=red><h1>Your testing period is over</h1></font></center>";
      echo "<center><font color=green><h2>Please contact :- Mobile Number: 01949376654, 01915728982</h2></font></center>";
	 }  else {
         $user_name =$this->input->post('email',true);
        $password=$this->input->post('password',true);
        $this->load->model('login_model');
        $result=$this->login_model->check_user_login_info($user_name,$password);
        
        if($result)
        {
            $sdata['user_id']=$result->user_id;
            //$sdata['manual_pid']=$result->manual_pid;
            $sdata['name']=$result->name;
            $sdata['type']=$result->type;
           // $sdata['mobile_number']=$result->mobile_number;
           // $sdata['user_name']=$result->user_name;
           // $sdata['password']=$result->password;
           // $sdata['password']=$result->password;
            $this->session->set_userdata($sdata);
            
            $this->session->set_userdata($sdata);
            redirect("welcome",'refresh');
            
        }
        else{
            $sdata['message']='Pleae Enter Your User ID /password....?';
            $this->session->set_userdata($sdata);
            redirect("login/index");
            //$this->index();
        }    
         }
         
        
    }
     public function patient_appointment() {
       $this->load->view('source_file/patient_appointment');
       
    }
    
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('patient_id');
        $this->session->unset_userdata('manual_pid');
        $this->session->unset_userdata('visiting_no');
        $this->session->unset_userdata('current_date');
        $sdata['message']='You are successfully logout !';
      //  $this->session->sess_destroy($history_info);
        $this->session->set_userdata($sdata);
        redirect("login/index",'refresh');
            
    }
   
}
?>